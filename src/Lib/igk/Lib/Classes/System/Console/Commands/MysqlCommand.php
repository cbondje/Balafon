<?php
namespace IGK\System\Console\Commands;

use IGK\System\Console\AppExecCommand;
use IGK\System\Console\Logger;

class MySQLCommand extends AppExecCommand{
    var $command = "--db:mysql";

    var $description = "reset database"; 

    public function sendQuery($query){
        if (preg_match("/^(CREATE|INSERT|ALTER)/i", $query)){
            Logger::print($query);
        }
        if (preg_match("/^SELECT Count\(\*\) /i", $query)){
            // force table creation query igk_wln($query);
            // igk_wln_e("-----"); 
            return null;
        }
        return true;
    }
    public function exec($command, $ctrl=null)
    {   
        igk_environment()->mysql_query_filter = 1;
        $ad = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $ad->setSendDbQueryListener($this);

        if ($ctrl && ($c = igk_getctrl($ctrl, false))){
            $c = [$c];
        } else {
            $c = igk_app()->getControllerManager()->getControllers(); 
        }
        if ($c) {
            ob_start();
            foreach ($c as $m) {
                if ($m->getCanInitDb() && ($m->getDataAdapterName() == IGK_MYSQL_DATAADAPTER)) {
                    // Logger::print("build : " . get_class($m));
                    $m::resetDb(false, true);
                    //Logger::success("complete: ".get_class($m));
                }
            }
            Logger::print("");
            echo "#Query: \n".ob_get_clean();
            $ad->setSendDbQueryListener(null);
            return 1;
        }
        return -1;
    }
}