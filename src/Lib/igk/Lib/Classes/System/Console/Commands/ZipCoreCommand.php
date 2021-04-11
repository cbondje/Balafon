<?php
namespace IGK\System\Console\Commands;

use IGK\System\Console\AppExecCommand;
use IGK\System\Console\Logger;

class ZipCoreCommand extends AppExecCommand{

    var $command = "--zipcore";

    var $description = "zip balafon core";


    public function exec($command, $path=null){
       
        if (!extension_loaded("zip") && !function_exists('zip_open')){
            Logger::danger("zip utility function not found");
            return -1;
        }

        if ($path == null){
            $path = getcwd()."/balafon.".IGK_VERSION.".zip";
        } else if (is_dir($path)){
            $path = $path."/balafon.".IGK_VERSION.".zip"; 
        }
        if (igk_sys_zip_core($path)){
            Logger::print("out file : ".$path);
            Logger::success("zip complete");
        }
    }
}