<?php
namespace IGK\Helper;

abstract class Utility {
    public static function GetFullName($r){
        return implode(" ", array_filter([ strtoupper($r->clLastName), ucfirst($r->clFirstName)]));
    }
    public static function To_JSON($raw , $options=null){
        $ignoreempty = igk_getv($options, "ignore_empty", 0);
        $default_output = igk_getv($options, "defaut_output", "{}");
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