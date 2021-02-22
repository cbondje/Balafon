<?php
// @file: IGKGkdsFile.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

define("IGK_GKDS_LAYERDOCUMENT", "LayerDocument");
///<summary>Represente class: IGKGkdsFile</summary>
/**
* Represente IGKGkdsFile class
*/
final class IGKGkdsFile extends IGKObject {
    private $m_document;
    private $m_gd;
    private $m_source;
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    private function __construct(){}
    ///<summary>Represente _restore function</summary>
    /**
    * Represente _restore function
    */
    private function _restore(){}
    ///<summary>Represente _save function</summary>
    /**
    * Represente _save function
    */
    private function _save(){}
    ///<summary>Represente _visit function</summary>
    /**
    * Represente _visit function
    */
    private function _visit(){
        foreach($this->m_document->Childs as  $v){
            $m="Visit".$v->TagName;
            if(method_exists(__CLASS__, $m))
                $this->$m($v);
        }
    }
    ///<summary>Represente Dispose function</summary>
    /**
    * Represente Dispose function
    */
    public function Dispose(){
        $this->GD->Dispose();
        unset($this->m_gd);
    }
    ///<summary>Represente getDocument function</summary>
    /**
    * Represente getDocument function
    */
    public function getDocument(){
        return $this->m_document;
    }
    ///<summary>Represente getGD function</summary>
    /**
    * Represente getGD function
    */
    public function getGD(){
        return $this->m_gd;
    }
    ///<summary>Represente ParseToGD function</summary>
    ///<param name="filename"></param>
    ///<param name="index"></param>
    /**
    * Represente ParseToGD function
    * @param mixed $filename
    * @param mixed $index the default value is 0
    */
    public static function ParseToGD($filename, $index=0){
        if(!defined("IGK_GD_SUPPORT") || !file_exists($filename))
            return null;
        $doc=IGKHtmlReader::LoadFile($filename);
        if($doc == null)
            return null;
        $t=igk_getv($doc->getElementsByTagName(IGK_GKDS_LAYERDOCUMENT), $index);
        if($t == null)
            return null;
        $f=new IGKGkdsFile();
        $f->m_document=$t;
        $f->m_gd=IGKGD::Create($t["Width"], $t["Height"]);
        $f->m_gd->Clearf("white");
        $f->_visit();
        return $f;
    }
    ///<summary>Represente RenderPicture function</summary>
    /**
    * Represente RenderPicture function
    */
    public function RenderPicture(){
        header("Content-Type: image/png");
        $this->GD->Render();
    }
    ///<summary>Represente VisitCircle function</summary>
    ///<param name="i"></param>
    /**
    * Represente VisitCircle function
    * @param mixed $i
    */
    public function VisitCircle($i){
        $c=IGKVector2f::FromString($i["Center"]);
        $t=explode(" ", $i["Radius"]);
        $r=0;
        if(count($t) == 1){
            $r=IGKVector2f::FromString($i["Radius"]);
        }
        else{
            $r= IGKVector2f::FromString($t[0]);
        }
        $this->GD->FillEllipse(IGKColorf::FromString("red")->toByte(), $c, $r);
        $this->GD->DrawEllipse(IGKColorf::FromString("black"), $c, $r);
    }
    ///<summary>Represente VisitLayer function</summary>
    ///<param name="layer"></param>
    /**
    * Represente VisitLayer function
    * @param mixed $layer
    */
    public function VisitLayer($layer){
        foreach($layer->Childs as  $v){
            $m="Visit".$v->TagName;
            if(method_exists(__CLASS__, $m))
                $this->$m($v);
        }
    }
}
