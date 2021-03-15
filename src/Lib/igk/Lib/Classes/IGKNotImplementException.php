<?php

use function igk_resources_gets as __; 

///<summary>represent a igk not implement exception</summary>
/**
* represent a igk not implement exception
*/
class IGKNotImplementException extends IGKException{
    ///<summary>Represente __construct function</summary>
    ///<param name="func"></param>
    /**
    * Represente __construct function
    * @param mixed $func
    */
    public function __construct($func){
        parent::__construct(__("Not Implement [0]", $func));
    }
}