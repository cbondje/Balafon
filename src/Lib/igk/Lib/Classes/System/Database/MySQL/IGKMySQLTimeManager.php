<?php

namespace IGK\System\Database\MySQL;
use \IGKObject;

///<summary>Represente class: IGKMySQLTimeManager</summary>
/**
* Represente IGKMySQLTimeManager class
*/
final class IGKMySQLTimeManager extends IGKObject{
    var $ad;
    ///<summary>Represente __construct function</summary>
    ///<param name="ad"></param>
    /**
    * Represente __construct function
    * @param mixed $ad
    */
    public function __construct($ad){
        $this->ad=$ad;
    }
    ///<summary>Represente Now function</summary>
    /**
    * Represente Now function
    */
    public function Now(){
        return date($this->ad->getFormat("datetime"));
    }
}