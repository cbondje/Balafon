<?php

namespace IGK\Controllers;

use IGK\Models\Migration;
use IGK\Models\ModelBase;
use IGKEvents;
use IGKResourceUriResolver;

abstract class ControllerExtension{

    public static function asset(BaseController $ctrl, $path){
        $f = $ctrl->getDataDir()."/assets/".$path;
        $t =  IGKResourceUriResolver::getInstance()->resolve($f); 
        return $t;
    }
    public static function resetDb(BaseController $ctrl, $navigate=false){
        $s_d=igk_app_is_uri_demand($ctrl, __FUNCTION__);
        if(!$s_d){
            $s=igk_is_conf_connected() || $ctrl->IsUserAllowedTo($ctrl->Name.":".__FUNCTION__);
            if(!$s){
                igk_notifyctrl()->addError("Operation not allowed");
                igk_navto($ctrl->getAppUri());
                return;
            }
        }
        else{
            $s=igk_is_conf_connected() || $ctrl->IsUserAllowedTo($ctrl->Name.":".__FUNCTION__);
        }
        if(!$s){
            if($s_d && $navigate){
                igk_navto($ctrl->getAppUri());
            }
            return;
        }
        $ctrl->dropdb();
        $ad=igk_get_data_adapter($ctrl);
        $ad->initForInitDb();
        igk_set_env("sys://db_init_table/ctrl", $ctrl);
        $ctrl->initDb();
        $ad->flushForInitDb();
        igk_hook(IGKEvents::HOOK_DB_INIT_ENTRIES, array($ctrl));
        igk_hook(IGKEvents::HOOK_DB_INIT_COMPLETE); 
        $ctrl->logout(0);
        if(igk_uri_is_match(igk_io_currentUri(), $ctrl->getAppUri(__FUNCTION__))){
            igk_notification_push_event(IGK_HOOK_DB_CHANGED, $ctrl, null);
            if($navigate){
                igk_navto($ctrl->getAppUri());
            }
        }
        else{
            igk_wln_e("no matching.... uri "
            , "appuri : ".$ctrl->getAppUri(__FUNCTION__)
            , "currenturi: ".igk_io_currentUri()); 
        }
    }

    /**
     * resolv controller name key
     * @param BaseController $ctrl 
     * @param mixed $name 
     * @return void 
     */
    public static function name(BaseController $ctrl, $name){
        return implode("/", [get_class($ctrl), $name]);
    }

    /**
     * return notify key name
     */
    public static function notifyKey(BaseController $ctrl, $name=null){
        return static::name($ctrl, "notify".($name ? "/".$name: ""));
    }

    public static function seed(BaseController $ctrl, $classname=null){
        //get all seed class and run theme        
        if ($classname === null){
            $classname = "Database/Seeds/DataBaseSeeder";
        }
        $g = str_replace("/", "\\", implode("/", array_filter([ $ctrl->getEntryNamespace(), $classname] )));
        if (class_exists($g)){
            $o = new $g();
            return $o->run();
        } 
    }
    public static function migrate(BaseController $ctrl, $classname=null){
        //get all seed class and run theme
        $dir = $ctrl->getSourceClassDir()."/Database/Migrations";
        $runbatch = 1;
        $tab = igk_io_getfiles($dir, "/\.php/");
        sort($tab);
        foreach($tab as $file){
            $t = igk_io_basenamewithoutext($file);
            preg_match_all("/^[0-9]{6}_[0-9]{0}_(?P<name>".IGK_IDENTIFIER_PATTERN.")$/", $t, $tinf);
            $name = $tinf["name"][0];
            Migration::create([
                "migration_name"=>$name,
                "migration_batch"=>$runbatch
                ]); 
        }
    }
    public static function InitDataBaseModel(BaseController $ctrl){
        $c = $ctrl->getSourceClassDir()."/Models/";
        $tb=$ctrl->getDataTableInfo();
        $ns = igk_db_get_table_name("%prefix%", $ctrl);

        if (!file_exists($base_f = $c."ModelBase8.php")){
            igk_io_w2file($base_f, self::GetDefaultModelBaseSource($ctrl));
        }


        foreach($tb as $k=>$v){
            //remove prefix
            $gs = !empty($ns) && strpos($k, $ns) === 0;
            $t =  $gs ? str_replace($ns, "", $k) : $k;
            $name = preg_replace("/\\s/", "_", $t);
            $name = implode("", array_map("ucfirst", array_filter(explode("_",$name))));
            //generate class name 
            
            $file = $c.$name.".php";
            if (file_exists($file)){
                continue;
            }
            $table = $k;
            if ($gs){
                $table = "%prefix%".$t;
            }
            igk_io_w2file($file, self::GetModelDefaultSourceDeclaration($name, $table, $v , $ctrl));
        }
    }

    private static function GetModelDefaultSourceDeclaration($name, $table, $v, $ctrl){
        $ns =  $ctrl ? $ctrl->getEntryNamespace() : 0;
        // igk_wln_e("ns ".$ns);
        $o = "<?php ".PHP_EOL;
        if ($ns){
            $o .= "namespace $ns\\Models; ".PHP_EOL;
        } 
        $c = $ctrl->getSourceClassDir()."/Models/";
        $gc = 0;
        if( ($name!="ModelBase") && file_exists($c."/ModelBase.php")){
            $o .=  "use $ns\\Models\\ModelBase;".PHP_EOL;    
            $gc = 1;
        }else {
            $o .=  "use ".ModelBase::class.";".PHP_EOL;
        }
        
        $o .= "\n\n/** \n */\n";
        $o .= "class $name extends ModelBase {".PHP_EOL;
        $o .= "\t/** \n\t */\n";
        $o .= "\tprotected \$table = \"{$table}\"; ".PHP_EOL;

        if (!$gc && $ctrl){
            $cl = get_class($ctrl);
            $o .= "\t/**\n\t */\n";
            $o.= "\tprotected \$controller = {$cl}::class; ".PHP_EOL;
        }
        $o .= "}".PHP_EOL;

        return $o;
    }
    private static function GetDefaultModelBaseSource(BaseController $ctrl){
        $o = "";
        $ns =  $ctrl ? $ctrl->getEntryNamespace() : 0;
        // igk_wln_e("ns ".$ns);
        $o = "<?php ".PHP_EOL;
        if ($ns){
            $o .= "namespace $ns\\Models; ".PHP_EOL;
        }                
        $o .=  "use ".ModelBase::class." as Model;".PHP_EOL;

        $o .= "\n\n/** \n */\n";
        $o .= "class ModelBase extends Model {".PHP_EOL;
         
        if ($ctrl){
            $cl = get_class($ctrl);
            $o .= "\t/**\n\t * Base source controller \n\t */\n";
            $o.= "\tprotected \$controller = {$cl}::class; ".PHP_EOL;
        }
        $o .= "}".PHP_EOL; 
        return $o;
    }
}