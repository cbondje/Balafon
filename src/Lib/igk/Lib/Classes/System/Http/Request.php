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
    public function get($name, $default=null){
        return igk_getr($name, $default);
    }

}