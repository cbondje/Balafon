<?php



///<summary>represent server management </summary>
/**
* represent server management
*/
final class IGKServer{
    private $data;
    private static $sm_server;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    private function __construct(){
        $this->prepareServerInfo();
    }
    ///<summary>Represente __get function</summary>
    ///<param name="n"></param>
    /**
    * Represente __get function
    * @param mixed $n
    */
    public function __get($n){
        if(isset($this->data[$n]))
            return $this->data[$n];
        return null;
    }
    ///<summary>Represente __isset function</summary>
    ///<param name="n"></param>
    /**
    * Represente __isset function
    * @param mixed $n
    */
    public function __isset($n){
        return isset($this->data[$n]);
    }
    ///<summary>Represente __set function</summary>
    ///<param name="n"></param>
    ///<param name="v"></param>
    /**
    * Represente __set function
    * @param mixed $n
    * @param mixed $v
    */
    public function __set($n, $v){
        if($v === null){
            unset($this->data[$n]);
        }
        else
            $this->data[$n]=$v;
    }
    ///<summary>return if server accept return type</summary>
    public function accept($type="html"){
        static $accept_type= null;
        if ($accept_type===null){
            $accept_type = [
                "html"=>"text/html",
                "json"=>"application/json"
            ];
        }
        $a = explode(",", $this->HTTP_ACCEPT);
        if (in_array("*/*", $a)){
            return true;
        }
        $mtype = igk_getv($accept_type, $type, null);
        return $mtype && in_array($mtype, explode(",", $this->HTTP_ACCEPT));
    }

    public function get($name, $default=null){
        return igk_getv($this->data, $name, $default);
    }
    ///<summary>Represente getInstance function</summary>
    /**
    * Represente getInstance function
    */
    public static function getInstance(){
        $r=& self::$sm_server;
        return igk_create_instance(__CLASS__, $r, function($s){
            return new $s();
        });
    }
    ///<summary>Represente IsEntryFile function</summary>
    ///<param name="file"></param>
    /**
    * Represente IsEntryFile function
    * @param mixed $file
    */
    public function IsEntryFile($file){
        return $file === realpath($this->SCRIPT_FILENAME);
    }
    ///<summary>check if this request is POST</summary>
    /**
    * check if this request is POST
    */
    public function ispost(){
        return $this->REQUEST_METHOD == "POST";
    }
    ///<summary>check for method. if type is null return the REQUEST_METHOD</summary>
    /**
    * check for method
    */
    public function method($type=null){
			if ($type===null)
				return $this->REQUEST_METHOD;
        return $this->REQUEST_METHOD == $type;
    }
    public function isMultipartFormData(){
        return strpos($this->CONTENT_TYPE, "multipart/form-data") === 0;
    }
    ///<summary>Represente prepareServerInfo function</summary>
    /**
    * Represente prepareServerInfo function
    */
    public function prepareServerInfo(){
        $this->data=array();
        foreach($_SERVER as $k=>$v){
            $this->data[$k]=$v;
        }
        $this->IGK_SCRIPT_FILENAME=igk_html_uri(realpath($this->SCRIPT_FILENAME));
        $this->IGK_DOCUMENT_ROOT= igk_html_uri(realpath($this->DOCUMENT_ROOT))."/";
        $sym_root=$this->IGK_DOCUMENT_ROOT !== $this->DOCUMENT_ROOT;
        $c_script=$this->IGK_SCRIPT_FILENAME;
        if(!$sym_root)
            $c_script=$this->SCRIPT_FILENAME;
        if(!empty($doc_root=$this->IGK_DOCUMENT_ROOT)){
            $doc_root=str_replace("\\", "/", realpath($doc_root));
            $self=substr($c_script, strlen($doc_root));
            if((strlen($self) > 0) && ($self[0] == "/"))
                $self=substr($self, 1);
            $basedir=str_replace("\\", "/", dirname($doc_root."/".$self));
            $this->IGK_BASEDIR=$basedir;
            $uri=$this->REQUEST_SCHEME."://".$this->HTTP_HOST;
            $query=substr($basedir, strlen($doc_root) + 1);
            if(!empty($query))
                $query .= "/";
            $baseuri=$uri."/".$query;
            $this->IGK_BASEURI=$baseuri;
        }
        $this->IGK_CONTEXT=($t_=isset($this->HTTP_HOST)) ? "html": "cmd";
        $this->LF=$t_ ? "\n": "<br />";
        if(!empty($env=$this->ENVIRONMENT)){
            $this->ENVIRONMENT=defined('IGK_ENV_PRODUCTION') ? "production": $env;
        }
        else{
            $this->ENVIRONMENT=defined('IGK_ENV_PRODUCTION') ? "production": "development";
        }
        if(!isset($this->WINDIR)){
            $this->WINDIR=($this->OS == "Windows_NT");
        }
        if(isset($_SERVER['REDIRECT_STATUS']) && isset($_GET["__c"])){
            $_get=array_slice($_GET, 0);
            $this->REDIRECT_CODE=$_get["__c"];
            $this->REDIRECT_OPT=array();
            unset($_get["__c"]);
            $_SERVER["QUERY_STRING"]=http_build_query($_get);
        }
        $this->REQUEST_PATH=explode("?", $this->REQUEST_URI)[0];
    }
    ///<summary>Represente toArray function</summary>
    /**
    * Represente toArray function
    */
    public function toArray(){
        return $this->data;
    }
}
