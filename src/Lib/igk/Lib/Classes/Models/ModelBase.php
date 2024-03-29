<?php
namespace IGK\Models;

use ArrayAccess;
use Closure;
use Exception;
use IGK\Helper\Utility;
use IGKEvents;
use IGKSystemController;
use IGKSysUtil;
use ReflectionClass;

abstract class ModelBase implements ArrayAccess{

    static $macros;
    /**
     * the base table
     * @var mixed
     */
    protected $table;

    /**
     * raw data
     * @var mixed
     */
    protected $raw;

    /**
     * 
     * @var mixed
     */
    protected $primaryKey = "clId";

    /**
     * column use for display
     * @var string
     */
    protected $display = "clName";

    /**
     * base model controller
     * @var string
     */
    protected $controller;

    /**
     * class used for factory
     * @var mixed
     */
    protected $factory;

    /**
     * field list use to create forms
     * @var array
     */
    protected $form_fields = [];

    /**
     * fillable list use data
     * @var mixed
     */
    protected $fillable;

    public function getFactory(){
        if ($this->factory === null){
            $name = basename(igk_io_dir(get_class($this)));
            $this->factory = $this->getController()::ns("Database\\Factories\\".$name."Factory");
        }
        return $this->factory;
    }
    public function set($name, $value){
        $this->raw->{$name} = $value;
        return $this;
    }
    

	public function display(){
		return $this->{$this->display};
	}
    public function getPrimaryKey(){
        return $this->primaryKey;
    }
    public function getFormFields(){
        return $this->form_fields;
    }
    

    public function __construct($raw=null)
    {
        $this->raw = igk_db_create_row($this->getTable());
        if (!$this->raw ){
            die("failed to create db row: ".$this->getTable());
        }
        if ($raw){
            foreach($raw as $k=>$v){
                if (property_exists($this->raw, $k)){
                    $this->raw->$k = $v;
                }
            }   
        }
    }
    public function __set($name, $value){
        if (property_exists($this->raw, $name)){
            $this->raw->$name = $value;
            return;
        }
        throw new Exception("Failed to access ".$name);
    }
    public function __get($name){  
        if (method_exists($this, $m = "get".$name )){
			return $this->$m();
		}
        if (igk_environment()->is("DEV")){
            if (!property_exists($this->raw, $name) && (strpos($name, "::")!==0)){
                igk_trace();
                die("property ".static::class."::$name not present");
            }
        }
        return igk_getv($this->raw, $name);
    }

    public function offsetExists($offset) { }

	public function offsetGet($offset) {
		return $this->$offset;
	 }

	public function offsetSet($offset, $value) {
		$this->$offset = $value;
	 }

	public function offsetUnset($offset) { } 

	public function geturi(){ 
		return $this->clhref;
	}

	 
    /**
     * return the current table string
     * @return mixed 
     */
    public function getTable(){
        $ctrl = $this->getController();
        return IGKSysUtil::GetTableName($this->table, $ctrl); 
    }
    public function getController(){
        return igk_getctrl($this->controller, false);
    }
    public function getDataAdapter(){
        return igk_get_data_adapter(igk_getctrl(IGKSystemController::class));
    }

    /**
     * disable debug
     * @return null 
     */
    public function __debugInfo()
    {
        return null;
    }

    /**
     * calling static member function
     * @param mixed $name 
     * @param mixed $arguments 
     * @return mixed 
     * @throws Exception 
     */
    public static function __callStatic($name, $arguments)
    {
        if (self::$macros === null){
            // 
            // + initialize macro definition
            //
            self::$macros = [
                "create"=>function($raw=null){                     
                    $c= new static($raw); 
                    if ($c->raw){
                        if ($g = $c->insert($c->raw)){
                            $c->raw = $g->raw;;
                        }else{
                            return null;
                        }
                    }
                    return $c;
                },
                "registerMacro"=>function($name, Callable $callback){
                    
                    if (is_callable($callback)){
                        $callback = Closure::fromCallable($callback);
                    }
                    if (__CLASS__ == static::class){
                        self::$macros[$name] = $callback;     
                    }else {
                        self::$macros[static::class."/".$name] = $callback; 
                    }
                },
                "unregisterMacro"=>function($name){
                    unset(self::$macros[static::class."/".$name]);
                },
                "registerExtension"=>function($classname){ 
                    $f = new ReflectionClass($classname);
                    foreach($f->getMethods() as $k){
                        if ($k->isStatic()){
                            self::$macros[$k->getName()] = [$classname, $k->getName()];
                        }
                    }
                },
                "getMacroKeys"=>function(){
                    return array_keys(self::$macros);
                },
                "getInstance"=>function($name){
                    return igk_environment()->createClassInstance(static::class);
                }
            ];
            // register call extension
            $f = new ReflectionClass(ModelEntryExtension::class);
            foreach($f->getMethods() as $k){
                if ($k->isStatic()){
                    self::$macros[$k->getName()] = [ModelEntryExtension::class, $k->getName()];
                }
            } 
            require(__DIR__."/DefaultModelEntryExtensions.pinc");
            igk_hook(IGKEvents::HOOK_MODEL_INIT, []);

        }   
        if ($fc = igk_getv(self::$macros, $name)){
            $bind = 1;
            if (is_array($fc)){
                array_unshift($arguments, igk_environment()->createClassInstance(static::class));
                $bind = 0;
            } 
            if ($bind && (static::class !== __CLASS__)){
                $fc = Closure::bind($fc, null, static::class); 
                if (!$fc){
                    igk_die("Can't bind : ", $name);
                }
            }            
            return $fc(...$arguments);
        } 
        if ($fc = igk_getv(self::$macros, static::class."/".$name)){
            $fc = $fc->bindTo(new static);
            return $fc(...$arguments);
        }
        if (static::class === __CLASS__){
            return;
        }   
        $c = new static;
        if (method_exists($c, $name)){
            return $c->$name(...$arguments);
        }
        igk_wln(array_keys(self::$macros));
        die("ModelBase: failed to call [".$name."]");
    }

    /**
     * call macro on this model
     * @param mixed $name 
     * @param mixed $arguments 
     * @return mixed 
     * @throws Exception 
     */
    public function __call($name, $arguments){

        static $regInvoke;

        if ($regInvoke === null){
            $regInvoke = 1;
        }
        if ($fc = igk_getv(self::$macros, static::class."/".$name)){
            $fc = $fc->bindTo($this); 
            return $fc(...$arguments);
        } 
        
        if ($fc = igk_getv(self::$macros, $name)){
            if (is_callable($fc)){
                $fc = Closure::fromCallable($fc);
            }
            array_unshift($arguments, $this);            
            //$fc = $fc->bindTo($this); 
            return $fc(...$arguments);
        }   
        if (igk_environment()->is("DEV")){
            igk_trace();
            igk_wln_e("failed to call ", $name );
        }
    }

    /**
     * model to json
     * @param mixed|null $options 
     * @return string|false 
     */
    public function to_json($options=null){
        return Utility::To_JSON($this->raw, $options);
    }

    /**
     * return raw data
     * @return mixed 
     */
    public function to_array(){
        return (array)$this->raw;
    }
    public function save(){     
        $pkey = $this->primaryKey;
        $r = $this->getDataAdapter()->update($this->getTable(), $this->raw, [$this->primaryKey=>$this->$pkey]);    
        return $r && $r->success(); 
    }
}