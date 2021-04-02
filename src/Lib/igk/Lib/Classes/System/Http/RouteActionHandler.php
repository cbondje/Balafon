<?php

namespace IGK\System\Http;

class RouteActionHandler{
    protected $path;
    protected $classBind;

    ///
    protected $verbs = [];

    public function __construct($path, $handleClass, $verb="GET, POST"){
        $this->path = $path;
        $this->classBind = $handleClass;
        $this->verbs = is_string($verb)? array_map("trim", explode(",", $verbs)) : 
            (is_array($verb) ? $verb: []);
    }
    public function where(){
        return $this;
    }
    public function match($path, $verb='GET'){
        if (!in_array($verb, $this->verbs)){
            return false;
        }
        $regex = $this->path;

        if (preg_match("#^".$regex."#", "/".ltrim("/".$path))){
            return true;
        } 
        return false;
    }
    public function process(...$args){

    }
}