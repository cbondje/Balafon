<?php 

namespace IGK\Controllers;

use Exception;
use IGK\System\Http\RouteActionHandler;

abstract class ControllerTask{
    
    protected $controller;

    protected $route;

    public function __construct($controller, ?RouteActionHandler $route=null)
    {
        $this->controller = $controller;
        $this->route = $route;        
    
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