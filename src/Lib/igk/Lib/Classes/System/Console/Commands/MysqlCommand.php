<?php
namespace IGK\System\Console\Commands;

use IGK\System\Console\AppExecCommand;
use IGK\System\Console\Logger;

class MySQLCommand extends AppExecCommand{
    var $command = "--db:mysql";

    var $desc = "mysql db managment command"; 

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
        $c = igk_app()->getControllerManager()->getControllers(); 
 

        switch(igk_getv($command->options, "--action")){
            case null: 
                return;
            case "initdb":
                foreach ($c as $m) {
                    if ($m->getCanInitDb() && ($m->getDataAdapterName() == IGK_MYSQL_DATAADAPTER)) {
                        Logger::info("initdb: ".get_class($m)); 
                        $m::register_autoload();
                        if ($m::initDb(false, true)){
                            Logger::success("initdb: ".get_class($m));
                        }
                    }
                }
                return 1;
            case "dropdb":
                foreach ($c as $m) {
                    if ($m->getCanInitDb() && ($m->getDataAdapterName() == IGK_MYSQL_DATAADAPTER)) {
                        Logger::info("drop: ".get_class($m)); 
                        $m::register_autoload();
                        if ($m::dropdb(false, true)){
                            Logger::success("drop: ".get_class($m));
                        }
                    }
                }
                return 1;
            case "migrate":
                foreach ($c as $m) {
                    if ($m->getCanInitDb() && ($m->getDataAdapterName() == IGK_MYSQL_DATAADAPTER)) {
                        Logger::info("migrate: ".get_class($m));
                        $m::register_autoload();
                        if ($m::migrate(false, true)){
                            Logger::success("migrate: ".get_class($m));
                        }
                    }
                }
                return 1;
            case "seed":
                foreach ($c as $m) {
                    if ($m->getCanInitDb() && ($m->getDataAdapterName() == IGK_MYSQL_DATAADAPTER)) {
                        Logger::info("seed: ".get_class($m));
                        $m::register_autoload();
                        if ($m::seed(false, true)){
                            Logger::success("seed: ".get_class($m));
                        }
                    }
                }
                return 1;
        }


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