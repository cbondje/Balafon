<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019

///<summary>Represente class: IGKPlateformManagement</summary>
/**
* Represente IGKPlateformManagement class
*/
class IGKPlateformManagement extends IGKObject {
    public $bbox;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){}
    ///<summary>Represente clearcache function</summary>
    /**
    * Represente clearcache function
    */
    public function clearcache(){
        IGKControllerManagerObject::ClearCache();
        $this->bbox->addNotifyBox("danger")->Content="cache clear";
    }
    ///<summary>Represente connect function</summary>
    /**
    * Represente connect function
    */
    public function connect(){
        igk_wln("connect");
    }
    ///<summary>Represente invoke function</summary>
    ///<param name="m"></param>
    ///<param name="args" default="null"></param>
    /**
    * Represente invoke function
    * @param  $m
    * @param  $args the default value is null
    */
    public function invoke($m, $args=null){
        if(method_exists(__CLASS__, $m)){
            if(empty($args))
                $args=array();
            call_user_func_array(array($this, $m), $args);
        }
        else
            $this->bbox->addNotifyBox("danger")->Content="method not found";
    }
    ///<summary>Represente logout function</summary>
    /**
    * Represente logout function
    */
    public function logout(){}
}
$dir=dirname(__FILE__);
require_once($dir."/igk_framework.php");
IGKApp::
$BASEDIR=realpath($dir."/../../");
session_start();
$pman=new IGKPlateformManagement();
$doc=new IGKHtmlDoc(IGKApp::getInstance(), true);
$bbox=$doc->body->addBodyBox();
$pman->bbox=$bbox;
$cm=new IGKUriPatternMatcher();
$ca="^/(:function(/:params+)?)?";
$p=igk_getv($_SERVER, "PATH_INFO");
$muri=new IGKSystemUriActionPatternInfo(array(
        "action"=>$ca,
        "value"=>null,
        "pattern"=>$cm->getPattern($ca),
        "uri"=>$p,
        "keys"=>igk_str_get_pattern_keys($ca)
    ));
if($muri->matche($p)){
    $k=$muri->getParams();
    $cm=igk_getv($k, "function");
    $pm=igk_getv($k, "params");
    $pman->invoke($cm, $pm);
}
switch(igk_getv($_SERVER, 'REQUEST_METHOD')){
    case "POST":
    break;
    case "GET":
    $bbox->addDiv()->addContainer()->add("blockquote")->Content="Get operation not ALLOWED";
    break;
}
$doc->RenderAJX();
igk_exit();