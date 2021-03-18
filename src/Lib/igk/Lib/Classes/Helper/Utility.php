<?php
namespace IGK\Helper;

abstract class Utility {
    public static function To_JSON($raw , $options=null){
        $c = new \stdClass();
        $ignoreempty = igk_getv($options, "ignorempty", 0);
    
        foreach($raw as $k=>$v){

            if ($ignoreempty &&  (($v === null) || ($v =="")))
                continue;
            $c->$k = $v;
        } 
        return json_encode($c);
    }
}