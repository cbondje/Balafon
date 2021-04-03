<?php 

namespace IGK\Controllers;

use Exception;

abstract class ControllerTask{
    
    protected $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }
    /**
     * index start entry task
     * @return mixed 
     */
    abstract function index();
    
    public function __call($name, $args)
    {
        $n = $name."_".igk_server()->REQUEST_METHOD;
        if (method_exists($this, $n)){
            return $this->$n(...$args);
        }else {
            array_unshift($args, $name);
            return $this->index(...$args);
        }

        throw new Exception("Task $name not found");
    }
}