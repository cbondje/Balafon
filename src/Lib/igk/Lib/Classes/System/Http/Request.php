<?php

namespace IGK\System\Http;

///<summary>request </summary>
class Request{
    static $sm_instance;

    public static function getInstance(){
        if (self::$sm_instance === null)
            self::$sm_instance = new self();
        return self::$sm_instance;
    }
    private function __construct(){
    }
    /**
     * get the request value
     * @param mixed $name 
     * @param mixed|null $default 
     * @return mixed 
     */
    public function get($name, $default=null){
        return igk_getr($name, $default);
    }
    /**
     * 
     * @param mixed $type 
     * @return mixed 
     */
    public function method($type){
        return igk_server()->method($type);
    }
    /**
     * get the file
     * @return void 
     */
    public function file($name){
        return igk_getv($_FILES, $name);
    }

}