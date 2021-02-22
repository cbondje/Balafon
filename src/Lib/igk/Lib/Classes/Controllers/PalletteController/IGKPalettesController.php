<?php
// @file: IGKPalettesController.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>
///represent a Palette controller Model
///</summary>
/**
* 
*represent a Palette controller Model
*
*/
final class IGKPaletteCtrl extends IGKNonVisibleControllerBase {
    private $m_palettes;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        parent::__construct();
        $this->m_palettes=array();
    }
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    public function getName(){
        return IGK_PALETTE_CTRL;
    }
    ///<summary>Represente getPaletteDir function</summary>
    /**
    * Represente getPaletteDir function
    */
    public function getPaletteDir(){
        return $this->Configs->Location;
    }
    ///<summary>Represente getPalettes function</summary>
    /**
    * Represente getPalettes function
    */
    public function getPalettes(){
        return $this->m_palettes;
    }
    ///<summary>Represente InitComplete function</summary>
    /**
    * Represente InitComplete function
    */
    protected function InitComplete(){
        parent::InitComplete();
        $this->loadPalette();
    }
    ///<summary>Represente loadFile function</summary>
    ///<param name="fname"></param>
    /**
    * Represente loadFile function
    * @param  $fname
    */
    public function loadFile($fname){
        if(!file_exists($fname))
            return;
        $v_name=igk_io_basenamewithoutext($fname);
        $v_t=null;
        if(isset($this->m_palettes[$v_name])){
            $v_t=$this->m_palettes[$v_name];
        }
        else
            $v_t=array();
        $e=igk_createnode("pal");
        try {
            $e->Load(IGKIO::ReadAllText($fname));
            $e=igk_getv($e->getElementsByTagName("palette"), 0);
            if($e){
                foreach($e->Childs as $k){
                    if(strtolower($k->TagName) == "item"){
                        $v=$k["color"];
                        $n=$k["name"];
                        $v_t[$n]=$v;
                    }
                }
                $this->m_palettes[$v_name]=$v_t;
            }
        }
        catch(Exception $ex){}
    }
    ///<summary>Represente loadPalette function</summary>
    /**
    * Represente loadPalette function
    */
    public function loadPalette(){
        $dir=$this->getPaletteDir();
        if(is_dir($dir)){
            $v_tfiles=IGKIO::GetFiles($dir, "/\.gkpal$/i", false);
            foreach($v_tfiles as $f){
                $this->loadFile($f);
            }
        }
    }
    ///<summary>Represente RemovePalette function</summary>
    ///<param name="id"></param>
    /**
    * Represente RemovePalette function
    * @param  $id
    */
    public function RemovePalette($id){
        $s=$this->getPaletteDir()."/".$id.".gkpal";
        if(file_exists($s)){
            unlink($s);
            $this->m_palettes=array();
            $this->loadPalette();
        }
    }
}
