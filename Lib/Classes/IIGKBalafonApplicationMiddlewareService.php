<?php
// @file: IIGKBalafonApplicationMiddlewareService.php
// @author: C.A.D. BONDJE DOUE
// @copyright: igkdev © 2019
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente interface: IIGKBalafonApplicationMiddlewareService</summary>
/**
* Represente IIGKBalafonApplicationMiddlewareService interface
*/
interface IIGKBalafonApplicationMiddlewareService extends ArrayAccess{
    ///<summary>Represente GetLastMiddleware function</summary>
    /**
    * Represente GetLastMiddleware function
    */
    function GetLastMiddleware();
    ///<summary>Represente Run function</summary>
    ///<param name="callback"></param>
    /**
    * Represente Run function
    * @param callback 
    */
    function Run($callback);
    ///<summary>Represente UseMiddleware function</summary>
    ///<param name="instance"></param>
    /**
    * Represente UseMiddleware function
    * @param instance 
    */
    function UseMiddleware($instance);
}
