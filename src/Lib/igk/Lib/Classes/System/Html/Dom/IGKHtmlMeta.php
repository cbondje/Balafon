<?php

namespace IGK\System\Html\Dom; 

use IGKHtmlItem;

///<summary>Represente class: IGKHtmlMeta</summary>
/**
* Represente IGKHtmlMeta class
*/
class IGKHtmlMeta extends IGKHtmlItem  {
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        parent::__construct("meta");
    }
    ///<summary>Represente _AddChild function</summary>
    ///<param name="item"></param>
    ///<param name="index" default="null"></param>
    /**
    * Represente _AddChild function
    * @param mixed $item
    * @param mixed $index the default value is null
    */
    protected function _AddChild($item, $index=null){
        return false;
    }
    ///<summary>Represente serialize function</summary>
    /**
    * Represente serialize function
    */
    public function serialize(){
        return "{'a>>>>>>>>':'b>>>>>>>>>>>>}";
    }
    ///<summary>Represente setContent function</summary>
    ///<param name="v"></param>
    /**
    * Represente setContent function
    * @param mixed $v
    */
    public function setContent($v){
        return $this;
    }
    ///<summary>Represente unserialize function</summary>
    ///<param name="v"></param>
    /**
    * Represente unserialize function
    * @param mixed $v
    */
    public function unserialize($v){}
}