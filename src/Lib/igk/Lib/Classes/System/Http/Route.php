<?php
namespace IGK\System\Http;

class Route{
    static $sm_actions = []; 

    protected $verb= ["GET", "POST"];

    protected $path = "";

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
}