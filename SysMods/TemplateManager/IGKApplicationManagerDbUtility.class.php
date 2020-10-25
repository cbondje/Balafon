<?php
// @file: IGKApplicationManagerDbUtility.class.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKApplicationManagerDbUtility</summary>
/**
* Represente IGKApplicationManagerDbUtility class
*/
final class IGKApplicationManagerDbUtility extends IGKDbUtility{
    ///<summary>Represente __construct function</summary>
    ///<param name="app"></param>
    /**
    * Represente __construct function
    * @param mixed $app
    */
    public function __construct($app){
        parent::__construct($app);
    }
    ///<summary>Represente addInstalledTemplate function</summary>
    ///<param name="manifest"></param>
    ///<param name="outdir"></param>
    /**
    * Represente addInstalledTemplate function
    * @param mixed $manifest
    * @param mixed $outdir
    */
    public function addInstalledTemplate($manifest, $outdir){
        if($this->connect()){
            $tb_a="tbigk_templates";
            if(!$this->selectSingleRow($tb_a, array("clPackageName"=>$manifest->clPackageName))){
                $row=igk_db_create_row($tb_a, $manifest);
                $row->clInstallDate=igk_db_create_expression("Now()");
                $row->clVersion=1;
                $row->clPath=$outdir;
                $this->insert($tb_a, $row);
            }
            $this->close();
        }
    }
    ///<summary>Represente dropTemplate function</summary>
    ///<param name="id"></param>
    /**
    * Represente dropTemplate function
    * @param mixed $id
    */
    public function dropTemplate($id){
        $this->delete(TBIGK_TEMPLATES, $id);
    }
    ///<summary>Represente getInstallTemplates function</summary>
    /**
    * Represente getInstallTemplates function
    */
    public function getInstallTemplates(){
        igk_set_env("sys://db/constraint_key", "tmplate_");
        $h=null;
        if($this->connect()){
            $h=$this->select("tbigk_templates");
            $this->close();
        }
        return $h;
    }
    ///<summary>Represente getPackageRow function</summary>
    ///<param name="id"></param>
    /**
    * Represente getPackageRow function
    * @param mixed $id
    */
    public function getPackageRow($id){
        $row=null;
        if($this->connect()){
            $row=$this->selectSingleRow(TBIGK_TEMPLATES, $id);
            $this->close();
        }
        return $row;
    }
    ///<summary>Represente getTemplateNames function</summary>
    /**
    * Represente getTemplateNames function
    */
    public function getTemplateNames(){
        $h=null;
        if($this->connect()){
            $h=$this->select("tbigk_templates", null, array("columns"=>array("clPackageName")));
            $this->close();
        }
        return $h;
    }
    ///<summary>Represente insertTemplate function</summary>
    ///<param name="inf"></param>
    /**
    * Represente insertTemplate function
    * @param mixed $inf
    */
    public function insertTemplate($inf){
        if($this->connect()){
            $tb_a="tbigk_templates_authors";
            $row=igk_db_create_row($tb_a);
            $row->clUser_Id=1;
            $id=-1;
            if(($r=$this->selectSingleRow($tb_a, $row->clUser_Id)) == null){
                $row->clGuid="C4DF3C06-33E4-4A78-A31B-57E958F47230";
                $this->insert($tb_a, $row);
                $id=$this->LastId;
            }
            else{
                $id=$r->clId;
            }
            $tb_a="tbigk_templates";
            if(!$this->selectSingleRow($tb_a, array("clPackageName"=>$inf->Name))){
                $row=igk_db_create_row($tb_a);
                $row->clInstallDate=igk_db_create_expression("Now()");
                $row->clPackageName=$inf->Name;
                $row->clVersion=1;
                $row->clPath="";
                $row->clTitle=$inf->Display;
                $this->insert($tb_a, $row);
            }
            $this->close();
        }
    }
    ///<summary>Represente updateTemplate function</summary>
    ///<param name="row"></param>
    /**
    * Represente updateTemplate function
    * @param mixed $row
    */
    public function updateTemplate($row){
        $r=0;
        if($this->connect()){
            $r=$this->update(TBIGK_TEMPLATES, $row, $row->clId);
            $this->close();
        }
        return $r;
    }
}
