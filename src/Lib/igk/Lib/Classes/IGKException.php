<?php

///<summary>represent a base IGK Framework exception</summary>
/**
* represent a base IGK Framework exception
*/
class IGKException extends Exception {
   
    ///<summary>Represente __construct function</summary>
    ///<param name="msg"></param>
    ///<param name="status" default="404"></param>
    /**
    * Represente __construct function
    * @param mixed $msg
    * @param mixed $status the default value is 404
    */
    public function __construct($msg, $code=500, ?\Throwable $throwable=null){
        parent::__construct($msg, $code, $throwable);        
    }
    ///<summary>Represente __toString function</summary>
    /**
    * Represente __toString function
    */
    public function __toString(){
        return get_class($this);
    }
    ///<summary>Represente GetCallingFunction function</summary>
    ///<param name="level" default="1"></param>
    /**
    * Represente GetCallingFunction function
    * @param mixed $level the default value is 1
    */
    public static function GetCallingFunction($level=1){
        $e=new Exception();
        $trace=$e->getTrace();
        $last_call=$trace[$level];
        return (object)$last_call;
    }
}