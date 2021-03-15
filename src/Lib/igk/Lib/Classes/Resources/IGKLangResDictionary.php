<?php

namespace IGK\Resources;

use ArrayAccess; 

///<summary> use for key's language operation</summary>
/**
*  use for key's language operation
*/
final class IGKLangResDictionary implements ArrayAccess{
    private $_f;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){}
    ///<summary>Represente OffsetExists function</summary>
    ///<param name="i"></param>
    /**
    * Represente OffsetExists function
    * @param mixed $i
    */
    public function OffsetExists($i){
        return isset($this->_f[strtolower($i)]);
    }
    ///<summary>Represente offsetGet function</summary>
    ///<param name="i"></param>
    /**
    * Represente offsetGet function
    * @param mixed $i
    */
    public function offsetGet($i){
        return $this->_f[strtolower($i)];
    }
    ///<summary>Represente offsetSet function</summary>
    ///<param name="i"></param>
    ///<param name="v"></param>
    /**
    * Represente offsetSet function
    * @param mixed $i
    * @param mixed $v
    */
    public function offsetSet($i, $v){
        $this->_f[strtolower($i)]=$v;
    }
    ///<summary>Represente offsetUnset function</summary>
    ///<param name="i"></param>
    /**
    * Represente offsetUnset function
    * @param mixed $i
    */
    public function offsetUnset($i){
        unset($this->_f[strtolower($i)]);
    }
    ///<summary> get sorted keys</summary>
    /**
    *  get sorted keys
    */
    public function sortKeys(){
        if(($this->_f == null) || (igk_count($this->_f) == 0)){
            return false;
        }
        $keys=array_keys($this->_f);
        igk_usort($keys, "igk_key_sort");
        return $keys;
    }
}