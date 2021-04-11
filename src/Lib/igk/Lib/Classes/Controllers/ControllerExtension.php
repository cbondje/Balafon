<?php

namespace IGK\Controllers;

use Exception;
use Faker\Provider\Base;
use IGK\Models\Migrations;
use IGK\Models\ModelBase;
use IGK\System\Console\Logger;
use IGK\System\IO\File\PHPScriptBuilder;
use IGKResourceUriResolver;
use Throwable;

abstract class ControllerExtension{
    /**
     * extends to get the base controller from class
     * @param BaseController $ctrl 
     * @return BaseController 
     */
    public static function ctrl(BaseController $ctrl){
        return $ctrl;
    }
    public static function asset(BaseController $ctrl, $path){
        $f = $ctrl->getDataDir()."/assets/".$path;
        $t =  IGKResourceUriResolver::getInstance()->resolve($f); 
        return $t;
    }
    public static function configFile(BaseController $ctrl, $name){
        return $ctrl->getDeclaredDir()."/Configs/$name.php";
    }
  
    public static function uri(BaseController $ctrl, $name){
        return $ctrl->getAppUri($name);
    }

    public static function db_query(BaseController $ctrl, $query){
        $ad = igk_get_data_adapter($ctrl);
        return $ad->sendQuery($query);
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
    /**
     * return system controller hook name
     */
    public static function hookName(BaseController $ctrl, $name=null){
        return static::name($ctrl, "hook".($name ? "/".$name: ""));
    }

    public static function seed(BaseController $ctrl, $classname=null){
        //get all seed class and run theme        
        if (igk_is_null_or_empty($classname)){
            $classname = "Database/Seeds/DataBaseSeeder";
        }
        $ctrl::register_autoload();
        $g = self::ns($ctrl, $classname ); 
        if (class_exists($g)){
            Logger::info("run seed ".$classname);
            $o = new $g();
            return $o->run();
        } 
    }
    public static function migrate(BaseController $ctrl, $classname=null){
        
        $rgx = "/^[0-9]{8}_[0-9]{4}_(?P<name>(".IGK_IDENTIFIER_PATTERN."))/i";

        //get all seed class and run theme
        $dir = $ctrl->getSourceClassDir()."/Database/Migrations";
        $runbatch = 1;
        if (!$tab = igk_io_getfiles($dir, "/\.php/")){
            return 0;
        }
        sort($tab); 
        if ($m = Migrations::select_query(null,[
            "Columns"=>[
                ["Max(`migration_batch`) as max"]
            ]
        ])){
            $m = $m->getRows()[0]; 
            $runbatch = $m->max + 1;
        }
        foreach($tab as $file){
            $t = igk_io_basenamewithoutext($file);
            if (preg_match_all($rgx, $t, $tinf)){

                $name = $tinf["name"][0];
                $cb = $ctrl::ns("Database/Migrations/{$name}");
                include_once($file); 
                Logger::info("init:".$t);
                try{

                    (new $cb())->up();
                    
                    ($r = Migrations::create([
                        "migration_name"=>$t,
                        "migration_batch"=>$runbatch
                        ]) )?  
                        Logger::success("complete:".$t):
                        Logger::danger("failed to init:".$t);
 
                    if (!$r){
                        return false;
                    }
                    
                } catch( Throwable $tex){
                    Logger::print($tex->getMessage());
                    Logger::danger("failed to init: ".$t);
                }
            }

        }
    
    }
    public static function InitDataBaseModel(BaseController $ctrl){
        $c = $ctrl->getSourceClassDir()."/Models/";
        $tb = $ctrl->getDataTableInfo();
        $ns = igk_db_get_table_name("%prefix%", $ctrl);

        if (!file_exists($base_f = $c."ModelBase.php")){
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
            if (($name != "Logginattempts") && file_exists($file)){
                continue;
            }
            $table = $k;
            if ($gs){
                $table = "%prefix%".$t;
            }

            igk_io_w2file($file, self::GetModelDefaultSourceDeclaration($name, $table, $v , $ctrl));
        }
    }

    public static function register_autoload(BaseController $ctrl){
        $k="sys://autoloading/".igk_base_uri_name($ctrl->getDeclaredDir());
        if(igk_get_env($k))
            return;
        igk_set_env($k, 1);
        $fc = function(){
            $args = func_get_args();
            // igk_wln_e($args);
            return BaseController::Invoke($this, "auto_load_class", $args);

            //return call_user_func_array(array($this, "auto_load_class"), func_get_args());
        };
        $fc = $fc->bindTo($ctrl);
        igk_register_autoload_class($fc);
    }
    public static function ns(BaseController $ctrl, $path){
        $cl = $path;
        if ($ns = $ctrl::Invoke($ctrl, "getEntryNamespace")){
            $cl = implode("/", array_filter([$ns,$cl]));
        }
        $cl = str_replace("/", "\\", $cl);
        return $cl;
    }
    /**
     * resolv class from controller entry namespace
     * @param BaseController $ctrl 
     * @param mixed $path 
     * @return string|string[]|null 
     */
    public static function resolvClass(BaseController $ctrl, $path){
        $cl = $ctrl::ns($path);
        $ctrl::register_autoload();    
        if (class_exists($cl)){
            return $cl;
        }
        return null;
    }
    private static function GetModelDefaultSourceDeclaration($name, $table, $v, $ctrl){
        $ns =  self::ns($ctrl, "");
 
        $uses = [];
        $gc = 0;
        $extends = "$ns\\Models\\ModelBase";
        $c = $ctrl->getSourceClassDir()."/Models/";
        if( ($name!="ModelBase") && file_exists($c."/ModelBase.php")){
            $uses[] = "$ns\\Models\\ModelBase";
            $gc = 1;
        }else {
            $uses[] = ModelBase::class;
        }
        $o = "\t/** \n\t */\n";
        $o .= "\tprotected \$table = \"{$table}\"; ".PHP_EOL;

        if (!$gc && $ctrl){
            $cl = get_class($ctrl);
            $o .= "\t/**\n\t */\n";
            $o.= "\tprotected \$controller = {$cl}::class; ".PHP_EOL;
        }


        $builder = new PHPScriptBuilder();
        $builder->type("class")
        ->author(IGK_AUTHOR)
        ->extends($extends)
        ->name($name)
        ->namespace($ns."\\Models")
        ->defs($o)
        ->uses($uses);

        return $builder->render(); 
    }
    private static function GetDefaultModelBaseSource(BaseController $ctrl){
        $o = "";
        $ns =  self::ns($ctrl, ""); 
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

   

    public static function login(BaseController $ctrl, $user=null, $pwd=null, $nav=true) {
     
            $u = $user;
       
            // igk_wln_e("login, $user, $pwd" , $ctrl->User, "uri?".igk_app_is_uri_demand($ctrl, __FUNCTION__));

            if (!igk_environment()->viewfile && igk_app_is_uri_demand($ctrl, __FUNCTION__) && file_exists($file = $ctrl->getViewFile(__FUNCTION__, false))){
                $ctrl->loader->view($file, compact("u", "pwd", "nav"));
                return false;
            }  
            $c=igk_getctrl(IGK_USER_CTRL);
            $f=0; 
            if($ctrl->User === null){
                if(is_object($u)){
                    if(igk_is_array_key_present($u, array("clLogin", "clPwd"))){
                        $c->setUser($u);                 
                        $ctrl->checkUser(false);
                        $f=1;
                    } 
                }
                else{  
                    if($c->connect($u, $pwd)){
                        $ctrl->checkUser(false);
                        $f=1;
                    } 
                    if(!$f){
                        igk_notifyctrl("notify/app/login")->addErrorr("e.loginfailed");
                    }
                }
            }
            if($nav){
                if($f){
                    ($b=igk_getr("goodUri")) || ($b=$ctrl->getAppUri());
                    igk_navto($b);
                }
                else{
                    $b=igk_getr("badUri") ?? $ctrl->getAppUri();
                    if($b){
                        igk_navto($b);
                        igk_exit();
                    }
                }
            } 
            return $ctrl->User !== null;
    }
    public static function classdir(BaseController $controller){
        return BaseController::Invoke($controller, "getClassesDir");
    }

     ///<summary>check user auth demand level</summary>
    /**
    * check user auth demand level
    */
    public static function IsUserAllowedTo(BaseController $controller, $authDemand=null){
        $user = $controller->getUser();
        if($user === null){
            return false;
        }
        if($user->clLevel == -1)
            return true;
        return igk_sys_isuser_authorize($user, $authDemand);
    }
    public static function getUser(BaseController $controller, $uid=null){
        $u = $uid === null ? igk_app()->session->getUser() : 
         igk_get_user($uid);
        return $u;
    }
   ///<summary></summary>
    /**
    * 
    */
    public static function dropDb(BaseController $controller, $navigate=1, $force=false){
    
        $ctrl=$controller;
        $func=function() use ($ctrl){
            $rdb=$ctrl->getDb();
            if($rdb && method_exists($rdb, "onStartDropTable")){
                $rdb->onStartDropTable();
            }
            igk_raise_event("sys://db/startdroptable", $ctrl);
        };
        if(!igk_getv($ctrl->getConfigs(), "clDataSchema")){
            $db=igk_get_data_adapter($ctrl, true);
            if($db && $db->connect()){
                $func();
                $db->dropTable($ctrl->getDataTableName());
                $db->close();
            }
        }
        else{
            $tb=$ctrl::Invoke($ctrl, "loadDataFromSchemas");
            $db=igk_get_data_adapter($ctrl, true);
            if($db){
                if($db->connect()){
                    $v_tblist=array();
                    foreach($tb as $k=>$v){
                        $v_tblist [$k]=$k;
                    }
                    $func(); 
				    $db->dropTable($v_tblist);
                    $db->close();
                }
            }
        }
        if ($navigate){
            $controller->View();
            igk_navtocurrent();
        }
        return 1;
        

        // $n=igk_getr("n");
        // if($n != null){
        //     $ad =igk_get_data_adapter($controller, true); 
        //     $r =  $ad->sendQuery("Drop DataBase `".$n."`;"); 
        // }
        // if ($navigate){
        //     $controller->View();
        //     igk_navtocurrent();
        // } 
    }

     
    public static function logout(BaseController $ctrl,$navigate=1){
        igk_app_is_uri_demand($ctrl, __FUNCTION__);
        $ctrl->setUser(null);
        igk_getctrl(IGK_USER_CTRL)->logout();
        if($navigate)
            igk_navto($ctrl->getAppUri());
    }
    /**
     * init controller from function definition
     */
    public static function initDbFromFunctions(BaseController $controller){
        $tbname = igk_db_get_table_name($controller->getDataTableName(), $controller);
        if (empty($tbname)){
            return false;
        }
        $v_tab= $controller->getDataTableInfo();// ?? igk_db_get_table_info($tbname);
        
        if(!$v_tab)
            return; 
        $db=igk_get_data_adapter($controller, true);
        igk_hook(IGK_NOTIFICATION_INITTABLE, [$controller, $tbname, $v_tab]);
        try {
            $s=$db->createTable($tbname, $v_tab, null, null, $db->DbName);
            $controller::Invoke($controller, "initDataEntry", [$db, $tbname]);
        }
        catch(Exception $ex){
            $db->close();
            igk_wln($ex->xdebug_message ?? $ex->getMessage());
            igk_wln_e("failed to create dbtable. ".get_class($controller)." : ".$controller->getDeclaredFileName());
        }   
    }

    
    public static function getInitDbConstraintKey(BaseController $controller){
        $cl= str_replace("_", "",  str_replace("\\", "_", get_class($controller)));
        return $cl."_ck_";// constraint key
    }

    public static function getComponentsDir(BaseController $controller){
        return $controller::classdir()."/Components";
    }
}