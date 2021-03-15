<?php

namespace IGK\System\Configuration;

use IGKCSVDataAdapter;

///<summary>represent system config data - </summary>
/**
* represent system config data -
*/
final class ConfigData {
    private $m_configCtrl;
    private $m_configEntries;
    private $m_confile;
    ///full path to
    ///conffile : configuration file
    ///configctrl : hosted controller
    ///entries: default entry
    /**
    */
    public function __construct($conffile, $configCtrl, $entries){
        $this->m_confile=$conffile;
        $this->m_configCtrl=$configCtrl;
        $this->m_configEntries=$entries;
    }
    ///<summary>Represente __get function</summary>
    ///<param name="key"></param>
    /**
    * Represente __get function
    * @param mixed $key
    */
    public function __get($key){
        return igk_getv($this->m_configEntries, $key);
    }
    ///<summary>Represente __isset function</summary>
    ///<param name="key"></param>
    /**
    * Represente __isset function
    * @param mixed $key
    */
    public function __isset($key){
        return isset($this->m_configEntries[$key]);
    }
    ///<summary>Represente __set function</summary>
    ///<param name="key"></param>
    ///<param name="value"></param>
    /**
    * Represente __set function
    * @param mixed $key
    * @param mixed $value
    */
    public function __set($key, $value){ 
        if(isset($this->m_configEntries[$key])){
            if($value === null){
                unset($this->m_configEntries[$key]);
            }
            else{
                $this->m_configEntries[$key]=$value;
            }
        }
        else {
            if (($value !== null) && !(is_string($value)&& empty($value))){
                $this->m_configEntries[$key]=$value;
            } 
        } 
    }
    ///<summary>Represente __toString function</summary>
    /**
    * Represente __toString function
    */
    public function __toString(){
        return "IGKConfigurationData [Count: ".count($this->m_configEntries)."]";
    }
    ///<summary>Represente getConfig function</summary>
    ///<param name="name"></param>
    ///<param name="default" default="null"></param>
    /**
    * Represente getConfig function
    * @param mixed $name
    * @param mixed $default the default value is null
    */
    public function getConfig($name, $default=null){
        return igk_getv($this->m_configEntries, $name, $default);
    }
    public function get($xpath, $default= null){
        return igk_conf_get($this->m_configEntries, $xpath, $default);
    }
    ///<summary>Represente getEntries function</summary>
    /**
    * Represente getEntries function
    */
    public function getEntries(){
        return $this->m_configEntries;
    }
    ///<summary>Represente getEntriesKeys function</summary>
    /**
    * Represente getEntriesKeys function
    */
    public function getEntriesKeys(){
        return array_keys($this->m_configEntries);
    }
    ///<summary>Represente saveData function</summary>
    /**
    * Represente saveData function
    */
    public function saveData(){
        if(defined("IGK_FRAMEWORK_ATOMIC"))
            return;
        $file=$this->m_confile;
        $out=IGK_STR_EMPTY;
        $v_ln=false;
        foreach($this->m_configEntries as $k=>$v){
            if($v_ln){
                $out .= IGK_LF;
            }
            else{
                $v_ln=true;
            }
            $out .= IGKCSVDataAdapter::GetValue($k).igk_csv_sep().IGKCSVDataAdapter::GetValue($v);
        }
        return igk_io_save_file_as_utf8_wbom($file, $out, true);
    }
    public function set($name, $entries){
        $k = key($entries);
        $v = array_unshift($entries);
        
        while( count($entries)>0){           
            $k = key($entries);
            $v = array_shift($entries);
            $key = implode(".", [$name, $k]);           
            if (is_array($v)){
                die("not allowed");
            }else{
                $this->m_configEntries[$key] = $v;
            }  
        }
        $this->saveData();
    }
    ///<summary>Represente setConfig function</summary>
    ///<param name="name"></param>
    ///<param name="value"></param>
    /**
    * Represente setConfig function
    * @param mixed $name
    * @param mixed $value
    */
    public function setConfig($name, $value){
        if($name)
            $this->m_configEntries[$name]=$value;
    }
    ///<summary>Represente SortByKeys function</summary>
    /**
    * Represente SortByKeys function
    */
    public function SortByKeys(){
        $keys=array_keys($this->m_configEntries);
        sort($keys);
        $t=array();
        foreach($keys as $k){
            $t[$k]=$this->m_configEntries[$k];
        }
        $this->m_configEntries=$t;
    }
}