<?php

namespace IGK\System\Console;

use IGK\System\Configuration\XPathConfig;
use Closure;
use Exception;
use IGKXmlNode;

///<summary>represent Balafon CLI console Application</summary>
class App{
    const GREEN = "\e[1;32m";
    const YELLOW = "\e[3;33m";

    /**
     * application version
     * @var string
     */
    public $version = "0.1.0";
    /**
     * available command
     * @var mixed
     */
    public $command = [];
    /**
     * setup the base command
     * @var mixed
     */
    protected $basePath;

    /**
     * store application configuration
     */
    protected $configs;
    /**
     * run application command line
     * @param array $command 
     * @return void 
     * @throws Exception 
     */
    public static function Run($command=[], $basePath=null){ 
        $app = (new static);
        $app->command = $command;
        if ($basePath === null){
            $basePath = getcwd();
        }
        $app->basePath = $basePath;
        $app->boot();
        $app->showHelp();
    }
    protected function boot(){
        if (file_exists($configFile = $this->basePath."/balafon.config.xml")){
            $c = igk_conf_load_file($configFile, "balafon");
            $this->configs= new XPathConfig($c); 
            // $this->print_debug("configuration loaded: ".$configFile);   
            // $this->print_debug($this->getLogFolder());                   
        }
        // setup the log folder
        if (!defined('IGK_LOG_FILE') && ($logFolder  = $this->getLogFolder())){
            define('IGK_LOG_FILE', $logFolder."/.".IGK_TODAY.".cons.log");
        }
    }
    private function print($text){
        echo $text. PHP_EOL;
    }
    private function print_debug($text){        
        echo $text. PHP_EOL;
    }
    public function showHelp(){
        $this->print("BALAFON CLI-UTILITY");;
        $this->print("Author: C.A.D BONDJE DOUE");
        $this->print(sprintf("Version:  %s", self::gets(self::GREEN, $this->version)));
        $this->print(""); 
        $this->print(self::gets(self::YELLOW, "Usage:"));
        $this->print("\tbalafon [command] [options] [arguments]");
        $this->print("");
        $this->print("");
        foreach($this->command as $n=>$c){
            $s = " ".self::GREEN.$n."\e[0m: \t";
            if (! ($c instanceof Closure)){
                $s.= igk_getv($c, 1);
            }
            $this->print($s);
        }

    }
    public function getLogFolder(){
        if($this->configs){
            return $this->configs->get("logFolder");
        }
    }
    public static function gets($color, $s){
        return $color.$s."\e[0m";
    }
}