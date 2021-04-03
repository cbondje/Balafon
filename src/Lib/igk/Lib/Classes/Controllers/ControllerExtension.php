<?php

namespace IGK\Controllers;

use Exception;
use IGK\Models\Migrations;
use IGK\Models\ModelBase;
use IGK\System\Console\Logger;
use IGKResourceUriResolver;
use Throwable;

abstract class ControllerExtension{

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
        if ($classname === null){
            $classname = "Database/Seeds/DataBaseSeeder";
        }
         $g = self::ns($ctrl, $classname );
        if (class_exists($g)){
            $o = new $g();
            return $o->run();
        } 
    }
    public static function migrate(BaseController $ctrl, $classname=null){
        
        $rgx = "/^[0-9]{8}_[0-9]{4}_(?P<name>(".IGK_IDENTIFIER_PATTERN."))/i";

        //get all seed class and run theme
        $dir = $ctrl->getSourceClassDir()."/Database/Migrations";
        $runbatch = 1;
        $tab = igk_io_getfiles($dir, "/\.php/");
        sort($tab);
        // igk_environment()->querydebug = 1;
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
            $cl = $ns."/".$cl;
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
        $ns =  self::ns($ctrl, "");
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

    public static function login(BaseController $ctrl, $user=null, $pwd=null, $nav=true) {
       
            $u = $user;
            if (!igk_environment()->viewfile && igk_app_is_uri_demand($ctrl, __FUNCTION__) && file_exists($file = $ctrl->getViewFile(__FUNCTION__, false))){
                $ctrl->loader->view($file, compact("u", "pwd", "nav"));
                return;
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
}