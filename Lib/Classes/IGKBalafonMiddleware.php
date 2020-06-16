<?php
// @file: IGKBalafonMiddleware.php
// @author: C.A.D. BONDJE DOUE
// @copyright: igkdev © 2019
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKBalafonMiddleware</summary>
/**
* Represente IGKBalafonMiddleware class
*/
abstract class IGKBalafonMiddleware{
    private $_next;
    private static $sm_manager;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    protected function __construct(){}
    ///<summary> attach the middleware</summary>
    ///<param name="middle">the middleware to attach</summary>
    ///<param name="service">application service to initialize</param>
    ///<param name="wherelist"> list that store the all middleware for chain list</param>
    /**
    *  attach the middleware
    * @param middle the middleware to attach
    * @param service application service to initialize
    * @param wherelist  list that store the all middleware for chain list
    */
    public static function Attach($middle, $service){
        if($c=$service->GetLastMiddleware()){
            $c->_next=$middle;
        }
        $service->Attach($middle);
        $middle->initialize($middle);
    }
    ///<summary>Represente CreateMiddleware function</summary>
    ///<param name="name"></param>
    ///<param name="args" default="null"></param>
    ///<param name="service" default="null"></param>
    /**
    * Represente CreateMiddleware function
    * @param name 
    * @param args 
    * @param service 
    */
    public static function CreateMiddleware($name, $args=null, $service=null){
        if($name === __CLASS__)
            return null;
        if(class_exists($cl=$name) || (class_exists($cl="IGK".$name."Middleware"))){
            if(is_subclass_of($cl, __CLASS__)){
                $_ref=new ReflectionClass($cl);
                $cp=0;
                $middle=null;
                if(($ctr=$_ref->getConstructor()) && (($cp=$ctr->getNumberOfRequiredParameters()) > 0)){
                    $middle=$_ref->newInstanceArgs($args);
                }
                else
                    $middle=new $cl();
                self::Attach($middle, $service);
                return $middle;
            }
        }
        return null;
    }
    ///<summary>Represente GetManager function</summary>
    /**
    * Represente GetManager function
    */
    public static function GetManager(){
        if(count($c=self::$sm_manager) > 0){
            return self::$sm_manager[0];
        }
        return null;
    }
    ///<summary>Represente getService function</summary>
    /**
    * Represente getService function
    */
    public function getService(){
        return self::GetManager();
    }
    ///<summary>initialize the middleware </summary>
    ///<param name="service">IIGKBalafonApplicationMiddlewareService instance</summary>
    /**
    * initialize the middleware 
    * @param service IIGKBalafonApplicationMiddlewareService instance
    */
    protected function initialize($service){}
    ///<summary>Represente invoke function</summary>
    /**
    * Represente invoke function
    */
    public function invoke(){
        $this->next();
    }
    ///<summary>Represente next function</summary>
    /**
    * Represente next function
    */
    protected function next(){
        if($this->_next){
            $this->_next->invoke();
        }
    }
    ///<summary>Represente Process function</summary>
    ///<param name="service"></param>
    ///<param name="wherelist"></param>
    /**
    * Represente Process function
    * @param service 
    * @param wherelist 
    */
    public static function Process($service, $wherelist){
        if(self::$sm_manager == null)
            self::
        $sm_manager=array();
        array_unshift(self::$sm_manager, $service);
        if(count($wherelist) > 0){
            $wherelist[0]->invoke();
        }
        array_shift(self::$sm_manager);
    }
    ///<summary>Represente stopChain function</summary>
    /**
    * Represente stopChain function
    */
    protected function stopChain(){
        $this->chainFlag=1;
    }
}
