<?php

if (defined("IGK_TEST_INIT"))
{
    return;
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
    return 0;
});


if (!defined("PHPUNIT_COMPOSER_INSTALL")){
    die("phpunit not installed");
}
if ($_SERVER["argc"]>0){
    // initize entry directory
}