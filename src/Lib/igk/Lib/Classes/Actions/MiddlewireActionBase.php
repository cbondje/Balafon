<?php

namespace IGK\Actions;

use IGK\Models\User;
use IGK\System\Http\RedirectRequestResponse;
use IGK\System\Http\Route;
use IGKActionBase;
use IGKException;

abstract class MiddlewireActionBase extends IGKActionBase{
    protected $user;

    /**
     * redirection uri
     * @var mixed
     */
    protected $redirect;
    /**
     * array of this middle wire auths
     * @var mixed
     */
    protected $auths;

    /**
     * middleware object
     * @var mixed
     */
    protected $middleware;

    protected function getActionProcessor()
    {
        return $this;
    }

    public static function __callStatic($name, $arguments)
    {    
        return  (new static())->$name(...$arguments);        
    }
    public function __call($name, $arguments)
    {
        $this->ctrl->checkUser(false);
        if (!$this->ctrl->User){
            if ($this->redirect){
                return new RedirectRequestResponse($this->ctrl::uri($this->redirect));
            }
            throw new IGKException("User Not found");
        }
        

        User::registerMacro("auth", function($auths){
            if (!is_array($auths)){
                if (!is_string($auths)){
                    return false;
                }
                $auths= [$auths];
            }
            $data = $this->to_array();
            while($auth = array_shift($auths)){
                if (!igk_sys_isuser_authorize($data, $auth)){
                    return false;
                }
            } 
            return true; 
        });

        $user = new User($this->ctrl->User);
        if ( $this->auths && !$user->auth($this->auths)){
           throw new IGKException("Resource access not allowed");
        }
        Route::LoadConfig($this->ctrl);

        $this->user = $user;
        $route = Route::GetMatchAll();
        $path = "/".implode("/", $arguments); 
        $routes = Route::GetAction(static::class);
        if (!empty($routes)){
            // must use the route technique to validate the path
            foreach($routes as $v){
                
                if ($v->match($path, igk_server()->REQUEST_METHOD)){
                    array_shift($arguments);
                    array_unshift($arguments, $this->ctrl);
                    return $v->process(...$arguments);
                }
                 
            }
            throw new IGKException("Route not resolved", 404);
        }
        return $this->invoke($route, ...$arguments); 
    }
    abstract protected function invoke($route, ...$args);
}
