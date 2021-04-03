<?php
namespace IGK\System\Http;

class Route{
    static $sm_actions = []; 

    protected $verb= ["GET", "POST"];

    protected $path = "";

    public static function LoadConfig($controller){
        if (file_exists($cf = $controller::configFile("routes"))){
            $inc = function (){
                include_once(func_get_arg(0));
            };
            $inc($cf);
        }
    }
    public static function Uri_List($controller, $classpath){
        self::LoadConfig($controller);
        $t = self::GetAction($classpath);
        return $t;
    }

    public static function GetMatchAll(): Route{
        static $sm_route;
        if ($sm_route === null){
            $sm_route = new Route();
            $sm_route->path = "*";
            $sm_route->verb= ["*"];
        }
        return $sm_route;
    }

    ///<summary>register action provider</summary>
    public static function RegisterAction($actionClass, $path, $handleClass){
        if (!isset(self::$sm_actions[$actionClass])){
            self::$sm_actions[$actionClass] = [];
        }
        $c = new RouteActionHandler($path, $handleClass);
        self::$sm_actions[$actionClass][] = $c;
        return $c;
    }
    ///<summary>get action Provider</summary>
    public static function GetAction($actionClass){
        return igk_getv(self::$sm_actions, $actionClass);
    }
    public static function __callStatic($name, $arguments)
    {
        $verbs = explode('|', 'POST|GET|STORE|HEAD|PUT');
        
        if (in_array($v = strtoupper($name), $verbs)){
            $fc = static::RegisterAction(...$arguments);
            $fc->setVerb([$v]);
            return $fc;
        }

    }
}