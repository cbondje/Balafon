<?php

namespace IGK\Helper;


class MacrosHelper{
    private static $macros;

    public static function Get($name){
        return self::__callStatic($name, null);
    }
    public static function __callStatic($name, $arguments)
    {
        if (self::$macros==null){
            //init global macros function 
            self::$macros = [
                "auth"=> function($auths){ 
                    if (!is_array($auths)){
                        if (!is_string($auths)){
                            return false;
                        }
                        $auths= [$auths];
                    }
                    $data = $this->to_array();
                    $g = $this->{"::auth"} ?? [];
                    igk_wln("check ", $data);
                    while($auth = array_shift($auths)){
                        if (in_array($auth , $g))
                        {
                            return true;
                        }
                        if (!igk_sys_isuser_authorize($data, $auth)){
                            igk_wln("not defined : ".$auth);
                            return false;
                        }
                        $g[] = $auth;
                    } 
                    $this->set("::auth", $g);
                    //igk_wln_e("auths,", $g, $this->to_json(), in_array("admin",  $this->{"::auth"}));
                    return true; 
                }        
            ];

        }
        return igk_getv(self::$macros,$name);
    }

}