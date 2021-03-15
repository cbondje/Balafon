<?php

///<summary>Represente class: IGKInvalidXmlReadException</summary>
/**
* Represente IGKInvalidXmlReadException class
*/
class IGKInvalidXmlReadException extends IGKException{
    var $offset;
    ///<summary>Represente __construct function</summary>
    ///<param name="msg"></param>
    ///<param name="offset"></param>
    /**
    * Represente __construct function
    * @param mixed $msg
    * @param mixed $offset the default value is 0
    */
    public function __construct($msg, $offset=0){
        parent::__construct($msg);
        $this->offset=$offset;
    }
}