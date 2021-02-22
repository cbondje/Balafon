<?php
// @file: IGKApplicationBase.class.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>represent a template application base class</summary>
/**
* represent a template application base class
*/
abstract class IGKApplicationBase extends IGKApplicationController{
    private $m_manifest;
    ///<summary>Represente __toString function</summary>
    /**
    * Represente __toString function
    */
    public function __toString(){
        return strtolower("IGKTemplateApplication://".$this->getName());
    }
    ///<summary>Represente getDataDir function</summary>
    /**
    * Represente getDataDir function
    */
    public function getDataDir(){
        return igk_io_dir(dirname($this->getDeclaredFileName()).DIRECTORY_SEPARATOR.IGK_DATA_FOLDER);
    }
    ///<summary>Represente getDeclaredDir function</summary>
    /**
    * Represente getDeclaredDir function
    */
    public function getDeclaredDir(){
        return igk_io_dir(dirname($this->getDeclaredFileName()));
    }
    ///template entries folder
    /**
    */
    public function getDeclaredFileName(){
        return igk_get_reg_class_file(get_class($this));
    }
    ///<summary></summary>
    /**
    * 
    */
    public final function getManifest(){
        if($this->m_manifest == null){
            $this->m_manifest=igk_createOBJ();
            $this->m_manifest->clTitle="";
            $f=$this->getDataDir()."/.manifest";
            if(file_exists($f)){
                $o=IGKHtmlReader::LoadXmlFile($f);
                igk_wln($o);
                igk_exit();
            }
        }
        return $this->m_manifest;
    }
    ///<summary>Represente getScriptDir function</summary>
    /**
    * Represente getScriptDir function
    */
    public function getScriptDir(){
        return igk_io_dir(dirname($this->getDeclaredFileName()).DIRECTORY_SEPARATOR.IGK_SCRIPT_FOLDER);
    }
    ///<summary>Represente getStylesDir function</summary>
    /**
    * Represente getStylesDir function
    */
    public function getStylesDir(){
        return igk_io_dir(dirname($this->getDeclaredFileName()).DIRECTORY_SEPARATOR.IGK_STYLE_FOLDER);
    }
    ///<summary>Represente getViewDir function</summary>
    /**
    * Represente getViewDir function
    */
    public function getViewDir(){
        return igk_io_dir(dirname($this->getDeclaredFileName()).DIRECTORY_SEPARATOR.IGK_VIEW_FOLDER);
    }
    ///<summary>return an array of templates view</summary>
    /**
    * return an array of templates view
    */
    public function getViews(){
        return igk_io_getfiles($this->getViewDir(), "/\.xtphtml$/");
    }
    ///<summary>Represente InitComplete function</summary>
    /**
    * Represente InitComplete function
    */
    protected function InitComplete(){
        parent::InitComplete();
        igk_notification_reg_event(IGK_FORCEVIEW_EVENT, array($this, "notify_view"));
    }
    ///<summary>Represente notify_view function</summary>
    /**
    * Represente notify_view function
    */
    public function notify_view(){
        if($this->isVisible){
            $this->View();
        }
    }
    ///<summary>Represente onInstall function</summary>
    ///<param name="context" default="null"></param>
    /**
    * Represente onInstall function
    * @param  $context the default value is null
    */
    protected function onInstall($context=null){
        igk_die(__METHOD__." not implement");
    }
    ///<summary>Represente onUninstal function</summary>
    ///<param name="context"></param>
    /**
    * Represente onUninstal function
    * @param  $context
    */
    protected function onUninstal($context){
        igk_die(__METHOD__." not implement");
    }
    ///<summary>override this method to uninstall this package</summary>
    /**
    * override this method to uninstall this package
    */
    public function uninstall(){
        $this->_unregisterEvents();
    }
    ///<summary>Represente View function</summary>
    /**
    * Represente View function
    */
    public function View(){
        parent::View();
    }
}
?>