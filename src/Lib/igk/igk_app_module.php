<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// Description: Use to add extra module to system. that module include function declared on .module.pinc file with the $reg array

///<summary>represent application module class </summary>
/**
* represent application module class
*/
final class IGKAppModule extends IGKControllerBase{
    private $m_dir;
    private $m_doc;
    private $m_fclist;
    private $m_listener;
    private $m_src;
    private $m_initializer; // used to extend modul class properties


    public function initClass($classname){
        if (class_exists($classname)){
            $this->m_initializer = new $classname();
        }
    }
    ///<summary>Represente __call function</summary>
    ///<param name="n"></param>
    ///<param name="args"></param>
    /**
    * Represente __call function
    * @param mixed $n
    * @param mixed $args
    */
    function __call($n, $args){
        $fc=igk_getv($this->m_fclist, $n);
        if($fc){
            igk_push_env(__CLASS__."/callee", $n);
            $o=call_user_func_array($fc, $args);
            $dc=igk_pop_env(__CLASS__."/callee");
            return $o;
        }
        igk_die("/!\\ function {$n} not define");
        return null;
    }
    ///<summary>Represente __construct function</summary>
    ///<param name="dir"></param>
    /**
    * Represente __construct function
    * @param mixed $dir
    */
    public function __construct($dir){
        parent::__construct();
        $this->m_dir=IGKIO::GetDir($dir);
        $this->mm_fclist=array();
        $tf = $dir."/.config";
        $c=realpath($tf);
        if(!file_exists($c)){
            $configs=array();
            $this->_initconfig($configs);
            $o="<?php\n";
            if(count($configs) > 0){
                foreach($configs as $k=>$m){
                    $o .= "\$config[\"{$k}\"] = \"{$m}\";\n";
                }
                igk_io_w2file($tf, $o);
            }
        }
        $c=realpath($dir."/.module.pinc");
        if(file_exists($c)){
            $this->_init($c);
        }

        $classLib = $this->getDeclaredDir()."/Lib/Classes";
       

        if (is_dir($classLib)){
            $dir = $this->getDeclaredDir();
            if (!empty($dir) &&  is_link($dir)){
                $dir = @readlink($dir);
            } 
            if (!is_dir($dir)){
                $dir = "";
            } 
            $entry_ns = str_replace("/","\\", igk_get_module_name($dir));
            $libdir=$classLib;
            spl_autoload_register(function($n)use($entry_ns, $libdir){
             
                $fc = "";
                if (!empty($entry_ns) && (strpos( $n, $entry_ns)===0)){
                    $cl = ltrim(substr($n, strlen($entry_ns)), "\\");
                    if (file_exists($fc = igk_io_dir($libdir."/".$cl.".php"))){
                        include($fc);
                        if (!class_exists($n, false)){
                            igk_die("file loaded but class $cl does not exists");
                        }
                        return 1;
                    }
                } 
            });
        }
    }
    ///<summary>Represente __sleep function</summary>
    /**
    * Represente __sleep function
    */
    function __sleep(){
        $this->m_fclist=array();
        $this->m_src=null;
        return array("m_dir");
    }
    ///<summary>Represente __wakeup function</summary>
    /**
    * Represente __wakeup function
    */
    function __wakeup(){
        $this->_init();
    }
    ///<summary>Represente _init function</summary>
    ///<param name="c" default="null"></param>
    /**
    * Represente _init function
    * @param mixed $c the default value is null
    */
    private function _init($c=null){
        $s=igk_io_read_allfile($c ?? $this->m_dir."/.module.pinc");
        $reg=function($name, $callback){
            $this->reg_function($name, $callback);
        };
        eval("?>".$s);
        $this->m_src=$s;

    }
    ///<summary>Represente _initconfig function</summary>
    ///<param name="configs" ref="true"></param>
    /**
    * Represente _initconfig function
    * @param  * $configs
    */
    protected function _initconfig(& $configs){
        $configs["libdir"]=IGK_LIB_DIR;

    }
    ///<summary>Represente bindError function</summary>
    ///<param name="msg"></param>
    /**
    * Represente bindError function
    * @param mixed $msg
    */
    private function bindError($msg){
        $this->setParam(__METHOD__, $msg);
    }
    ///<summary>Represente getAppDocument function</summary>
    /**
    * Represente getAppDocument function
    */
    public function getAppDocument(){
        return null;
    }
    ///<summary>Represente getAppUri function</summary>
    ///<param name="c" default="null"></param>
    /**
    * Represente getAppUri function
    * @param mixed $c the default value is null
    */
    public function getAppUri($c=null){
        $q="";
        if($this->Listener)
            $q="ctrl=".$this->Listener->Name;
        $u="n=".$this->Name.($q ? "&".$q: "")."".($c ? "&q=".$c: "");
        $s=base64_encode($u);
        return igk_getctrl(IGK_SESSION_CTRL)->getUri("invmodule&q=".$s);
    }
    ///<summary>Represente getCallee function</summary>
    /**
    * Represente getCallee function
    */
    public function getCallee(){
        return igk_peek_env(__CLASS__."/callee");
    }
    ///<summary>get the inline calling function</summary>
    /**
    * get the inline calling function
    */
    public function getCaller(){
        return $this->m_caller;
    }
    ///<summary>Represente GetCanCreateFrameworkInstance function</summary>
    /**
    * Represente GetCanCreateFrameworkInstance function
    */
    public static function GetCanCreateFrameworkInstance(){
        return false;
    }
    ///<summary>Represente getCurrentDoc function</summary>
    /**
    * Represente getCurrentDoc function
    */
    public function getCurrentDoc(){
        return $this->m_doc;
    }
    ///<summary>Represente getDeclaredDir function</summary>
    /**
    * Represente getDeclaredDir function
    */
    public function getDeclaredDir(){
        return $this->m_dir;
    }
    ///<summary>Represente getDeclaredFileName function</summary>
    /**
    * Represente getDeclaredFileName function
    */
    public function getDeclaredFileName(){
        return realpath($this->getDeclaredDir()."/.module.pinc");
    }
    ///<summary>get module environment configuration</summary>
    /**
    * get module environment configuration
    */
    public function getEnvironmentConfigs(){
        /** @var string $c */
        static $_configs=null;
        if($_configs === null){
            $_configs=array();
        }
        $_hash=spl_object_hash($this);
        if(isset($_configs[$_hash])){
            return $_configs[$_hash];
        }
        $configs=realpath($this->m_dir."/.config");
        if(file_exists($c)){
            $config=array();
            include($c);
            $_configs[$_hash]=(object)$config;
        }
        return $_configs[$_hash];
    }
    ///<summary>Represente getListener function</summary>
    /**
    * Represente getListener function
    */
    public function getListener(){
        return $this->m_listener ?? igk_ctrl_current_view_ctrl();
    }
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    public function getName(){
        return strtolower(str_replace("/", ".", igk_html_uri(substr($this->m_dir, strlen(igk_get_module_dir())))));
    }
    ///<summary>Represente getParam function</summary>
    ///<param name="n"></param>
    ///<param name="def" default="null"></param>
    ///<param name="register" default="false"></param>
    ///<return refout="true"></return>
    /**
    * Represente getParam function
    * @param mixed $n
    * @param mixed $def the default value is null
    * @param mixed $register the default value is false
    * @return *
    */
    public function & getParam($n, $def=null, $register=false){
        $l=$this->Listener;
        $h=null;
        if($l){
            $h=$l->getParam($n, $def, $register);
        }
        return $h;
    }
    ///<summary>Represente getUri function</summary>
    ///<param name="c" default="null"></param>
    /**
    * Represente getUri function
    * @param mixed $c the default value is null
    */
    public function getUri($c=null){
        return $this->getAppUri($c);
    }
    ///<summary>Represente methodExists function</summary>
    ///<param name="n"></param>
    /**
    * Represente methodExists function
    * @param mixed $n
    */
    public function methodExists($n){
        return isset($this->m_fclist[$n]);
    }
    ///<summary>Represente reg_function function</summary>
    ///<param name="n"></param>
    ///<param name="fc"></param>
    /**
    * Represente reg_function function
    * @param mixed $n
    * @param mixed $fc
    */
    protected function reg_function($n, $fc){
        $this->m_fclist[$n]=$fc;
    }
    ///<summary>Represente setCurrentDoc function</summary>
    ///<param name="doc"></param>
    /**
    * Represente setCurrentDoc function
    * @param mixed $doc
    */
    private function setCurrentDoc($doc){
        $this->m_doc=$doc;
    }
    ///<summary>Represente setListener function</summary>
    ///<param name="v"></param>
    /**
    * Represente setListener function
    * @param mixed $v
    */
    public function setListener($v){
        $this->m_listener=$v;
    }
    ///<summary>Represente setParam function</summary>
    ///<param name="n"></param>
    ///<param name="v"></param>
    /**
    * Represente setParam function
    * @param mixed $n
    * @param mixed $v
    */
    public function setParam($n, $v){
        $l=$this->Listener;
        if($l){
            $l->setParam($this->Name."/{$n}", $v);
        }
    }
    public function set($name, $value){
        return $this->setEnvParam($name, $default);
    }
    public function get($name, $default=null){
        return $this->getEnvParam($name, $default);
    }
}
