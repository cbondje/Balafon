<?php
// @file: igk.security.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>represent a controller to manage security</summary>
/**
* represent a controller to manage security
*/
class IGKSecurityCtrl extends IGKConfigCtrlBase{
    ///<summary>Represente getConfigGroup function</summary>
    /**
    * Represente getConfigGroup function
    */
    public function getConfigGroup(){
        return "administration";
    }
    ///<summary>Represente getConfigImageKey function</summary>
    /**
    * Represente getConfigImageKey function
    */
    public function getConfigImageKey(){
        return "";
    }
    ///<summary>Represente getConfigPage function</summary>
    /**
    * Represente getConfigPage function
    */
    public function getConfigPage(){
        return "security";
    }
    ///<summary>Represente getIsConfigPageAvailable function</summary>
    /**
    * Represente getIsConfigPageAvailable function
    */
    public function getIsConfigPageAvailable(){
        return false;
    }
}
