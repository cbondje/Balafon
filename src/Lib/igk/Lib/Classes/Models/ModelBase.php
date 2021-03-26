<?php
namespace IGK\Models;

use Closure;
use Exception;
use IGK\Helper\Utility;
use IGK\Models\ModelEntryUtility;
use IGKSystemController;
use ReflectionClass;

abstract class ModelBase{

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

    public function getPrimaryKey(){
        return $this->primaryKey;
    }
    

    public function __construct($raw=null)
    {
        $this->raw = igk_db_create_row($this->getTable());
        if ($raw){
            foreach($raw as $k=>$v){
                if (key_exists($k, $this->raw)){
                    $this->raw->$k = $v;
                }
            }   
        }
    }
    public function __set($name, $value){
        if (key_exists($name, $this->raw)){
            $this->raw->$name = $value;
            return;
        }
        throw new Exception("Failed to access ".$name);
    }
    public function __get($name){
        return igk_getv($this->raw, $name);
    }

    /**
     * return the current table string
     * @return mixed 
     */
    public function getTable(){
        if (strpos("%prefix%", $this->table)!== false){
            $this->table = str_replace("%prefix%", igk_app()->Configs->db_prefix, $this->table);
        }
        return $this->table;
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
    public function __callStatic($name, $arguments)
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
            $fc->bindTo(new static);
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
        igk_wln_e("failed", $name );
    }

    /**
     * model to json
     * @param mixed|null $options 
     * @return string|false 
     */
    public function to_json($options=null){
        return Utility::To_JSON($this->raw, $options);
    }

    public function to_array(){
        return $this->raw;
    }
    public function save(){     
        $pkey = $this->primaryKey;
        $r = $this->getDataAdapter()->update($this->getTable(), $this->raw, [$this->primaryKey=>$this->$pkey]);    
        return $r && $r->success(); 
    }
}