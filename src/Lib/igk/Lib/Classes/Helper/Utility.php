<?php
namespace IGK\Helper;

use Exception;
use IGK\System\Http\Request;

abstract class Utility {
    public static function PostCref(callable $callback, $valid=1, $method="POST"){
        if (igk_server()->method($method) && igk_valid_cref($valid)){
            return $callback();
        }
        return false;
    }
    public static function RequestGet($paramHandler, $requestName, $paramName, $update=true){
        $c = Request::getInstance()->have($requestName, $paramHandler->getParam($paramName));
        if ($update){
            if (!empty($c)){
                $paramHandler->setParam($paramName, $c);
            } else {
                $paramHandler->setParam($paramName, null);
            }
        }
        return $c;
    }
    /**
     * get the email display
     * @param mixed $r 
     * @return string 
     */
    public static function GetUserEmailDisplay($r){
        return implode(" ",array_filter([
            strtoupper($r->clLastName), ucfirst($r->clFirstName),
            "&lt;".$r->clLogin."&gt;"]));
    }
    /**
     * get the user fullname display
     * @param mixed $r 
     * @return string 
     */
    public static function GetFullName($r){
        return implode(" ", array_filter([ strtoupper($r->clLastName), ucfirst($r->clFirstName)]));
    }
    /**
     * convert raw to json.
     * @param mixed $raw 
     * @param mixed|null $options , ignore_empty=1|0 , default_ouput='{}'
     * @return mixed 
     * @throws Exception 
     */
    public static function To_JSON($raw , $options=null){
        $ignoreempty = igk_getv($options, "ignore_empty", 0);
        $default_output = igk_getv($options, "default_ouput", "{}");
        if(is_string($raw)){
            $sraw = json_decode($raw);
            if (json_last_error() === JSON_ERROR_NONE){
                if (!$ignoreempty){
                    return $raw;
                }
                $raw = $sraw;
            }else 
            return $default_output;
        }    
        $c = new \stdClass();
        if (is_object($raw) || is_array($raw)){
            foreach($raw as $k=>$v){

                if ($ignoreempty &&  (($v === null) || ($v =="")))
                    continue;
                $c->$k = $v;
            } 
        }
        return json_encode($c);
    }
}