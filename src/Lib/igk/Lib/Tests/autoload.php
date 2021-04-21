<?php

use SebastianBergmann\CodeCoverage\Report\PHP;


if (!version_compare(PHP_VERSION, "7.2", ">")){
    die ("php require version must be greather that 7.2");
}
if (defined("IGK_TEST_INIT")){
    return;
}
if (!defined("PHPUNIT_COMPOSER_INSTALL")){
    die("phpunit not installed");
}
define("IGK_TEST_INIT", __FILE__);
if (!defined("IGK_LIB_DIR")){
    require_once(__DIR__."/../../igk_framework.php");
} 

spl_autoload_register(function($n){    
    $fix_path = function($p, $sep=DIRECTORY_SEPARATOR){
        if ($sep=="/"){
            return str_replace("\\", "/", $p);
        }  
        return str_replace("/", "\\", $p);
    };
    if (strpos($n, $ns= IGK\Tests::class)===0){
        $cl = substr($n, strlen($ns));
        $f = $fix_path(__DIR__.$cl.".php");       
        if (file_exists($f)){
            include($f);
            if (!class_exists($n, false)){
                throw new Exception("File exists but class not present");
            }
            return 1;
        }
    }
    igk_wln("autoload try loading autoload.....".$n);
    return 0;
});


foreach(["IGK_APP_DIR", "IGK_SESS_DIR", "IGK_BASE_DIR"] as $k){
    if (!defined($k)){
        if (($appdir = igk_getv($_ENV, $k)) && is_dir($appdir)){
            define($k, realpath($appdir));   
        }
    }
} 
$_SERVER["DOCUMENT_ROOT"] = IGK_BASE_DIR;
$_SERVER["SERVER_NAME"] = "local.test.com";
$_SERVER["SERVER_PORT"] = "8801";
igk_server()->prepareServerInfo();

foreach(["IGK_NO_DBCACHE"] as $k){
    if (!defined($k) && ($t = igk_getv($_ENV, $k))){
        define($k, $t);                
    }
}
defined("IGK_PROJECT_DIR") || define("IGK_PROJECT_DIR", IGK_APP_DIR."/Projects");           
include(IGK_LIB_DIR."/igk_extensions.phtml");

//
igk_loadlib(IGK_PROJECT_DIR);
// //.session start for testing
// $s = session_start();
// // initialize application static folder 
IGKApp::InitAtomic();

// IGKApp::InitSingle();

///<summary>return a list of project installed controllers</summary>
function igk_sys_project_controllers(){
    if (!IGKApp::IsInit()){
        return null;
    }
    $c = igk_app()->getControllerManager()->getControllers();
    $dir = igk_io_projectdir();
    $projects_ctrl = [];
    foreach($c as $k){
        if (strstr($k->getDeclaredDir(), $dir)){
            $projects_ctrl[] = $k;
        }
    }
    return $projects_ctrl;
}

$c = igk_sys_project_controllers();
foreach($c as $m){
    $m::register_autoload();
    igk_wln("reigster".$m);
}
igk_wln_e("done");