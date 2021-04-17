<?php
namespace IGK\System\Console\Commands;

use IGK\System\Console\AppExecCommand;
use IGK\System\Console\Logger;

class ResetDbCommand extends AppExecCommand{
    var $command = "--db:resetdb";

    var $desc = "reset database"; 

    public function exec($command, $ctrl=null)
    {   
        igk_environment()->querydebug = property_exists($command->options, "--querydebug");
        
        if ($ctrl && ($c = igk_getctrl($ctrl, false))){
            $c = [$c];
        } else {
            $c = igk_app()->getControllerManager()->getControllers(); 
        }
        if ($c) {
            foreach ($c as $m) {
                if ($m->getCanInitDb()) {
                    $command->app->print("resetdb : " . get_class($m));
                    $m::resetDb(false, true);
                    Logger::success("complete: ".get_class($m));
                }
            }
            Logger::print("");
            return 1;
        }
        return -1;
    }
}