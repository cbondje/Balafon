<?php
// @file: IGKBalafonFrameworkManager.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

namespace IGK\Manager;

///<summary>Framework manager</summary>
/**
* Framework manager
*/
class IGKBalafonFrameworkManager{
    var $handleAllAction;
    ///<summary>Represente __call function</summary>
    ///<param name="name"></param>
    ///<param name="args"></param>
    /**
    * Represente __call function
    * @param mixed $name
    * @param mixed $args
    */
    public function __call($name, $args){
        $f="igk_".$name;
        if(function_exists($f)){
            igk_wl(call_user_func_array($f, $args));
        }
        else{
            echo "command [{$name}] not found";
        }
    }
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        $this->handleAllAction=1;
    }
    ///<summary>Represente clear_cache function</summary>
    /**
    * Represente clear_cache function
    */
    public function clear_cache(){
        igk_clear_cache();
    }
    ///<summary>Represente help function</summary>
    /**
    * Represente help function
    */
    public function help(){
        echo "help ";
    }
    ///<summary>Represente install function</summary>
    /**
    * Represente install function
    */
    public function install(){
        echo "running install";
    }
    ///<summary>Represente test function</summary>
    /**
    * Represente test function
    */
    public function test(){
        echo "run test";
    }
}
