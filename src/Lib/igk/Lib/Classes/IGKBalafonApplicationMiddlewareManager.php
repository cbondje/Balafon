<?php
// @file: IGKBalafonApplicationMiddlewareManager.php
// @author: C.A.D. BONDJE DOUE
// @copyright: igkdev © 2019
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKBalafonApplicationMiddlewareManager</summary>
/**
* Represente IGKBalafonApplicationMiddlewareManager class
*/
class IGKBalafonApplicationMiddlewareManager implements IIGKBalafonApplicationMiddlewareService{
    private $_properties;
    private $_whereList;
    ///<summary>Represente __call function</summary>
    ///<param name="n"></param>
    ///<param name="args"></param>
    /**
    * Represente __call function
    * @param mixed $n
    * @param mixed $args
    */
    public function __call($n, $args){
        if(strpos(strtolower($n), "use") === 0){
            ($middle=IGKBalafonMiddleware::CreateMiddleware($t=substr($n, 3), $args, $this)) || igk_die("failed to get middleware $t");
            return $this;
        }
        return null;
    }
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    function __construct(){
        $this->_whereList=array();
        $this->_properties=array();
    }
    ///<summary>Represente Attach function</summary>
    ///<param name="middleware"></param>
    /**
    * Represente Attach function
    * @param mixed $middleware
    */
    public function Attach($middleware){
        $w=& $this->_whereList;
        $w[]=$middleware;
    }
    ///<summary>Represente GetLastMiddleware function</summary>
    /**
    * Represente GetLastMiddleware function
    */
    public function GetLastMiddleware(){
        $w=& $this->_whereList;
        if(($c=count($w)) > 0){
            return $w[$c-1];
        }
        return null;
    }
    ///<summary>Represente offsetExists function</summary>
    ///<param name="i"></param>
    /**
    * Represente offsetExists function
    * @param mixed $i
    */
    public function offsetExists($i){
        return isset($this->_properties[$i]);
    }
    ///<summary>Represente offsetGet function</summary>
    ///<param name="i"></param>
    /**
    * Represente offsetGet function
    * @param mixed $i
    */
    public function offsetGet($i){
        return isset($this->_properties[$i]) ? $this->_properties[$i]: null;
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
        if($v == null)
            unset($this->_properties[$i]);
        else
            $this->_properties[$i]=$v;
    }
    ///<summary>Represente offsetUnset function</summary>
    ///<param name="i"></param>
    /**
    * Represente offsetUnset function
    * @param mixed $i
    */
    public function offsetUnset($i){
        unset($this->_properties[$i]);
    }
    ///<summary>Represente Process function</summary>
    /**
    * Represente Process function
    */
    public function Process(){
        IGKBalafonMiddleware::Process($this, $this->_whereList);
    }
    ///<summary>Represente Run function</summary>
    ///<param name="callback"></param>
    /**
    * Represente Run function
    * @param mixed $closurecallback
    */
    public function Run($callback){
        IGKBalafonMiddleware::Attach(new IGKRunCallbackMiddleware($callback), $this);
        return $this;
    }
    ///<summary>Represente UseMiddleWare function</summary>
    ///<param name="middle"></param>
    /**
    * Represente UseMiddleWare function
    * @param mixed $middle
    */
    public function UseMiddleWare($middle){
        if(is_object($middle) && is_subclass_of(get_class($middle), IGKBalafonMiddleware::class))
            IGKBalafonMiddleware::Attach($middle, $this);
        return $this;
    }
}
