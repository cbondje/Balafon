<?php
// @file: class.IGKGoogleMapCtrl.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKGoogleMapCtrl</summary>
/**
* Represente IGKGoogleMapCtrl class
*/
abstract class IGKGoogleMapCtrl extends IGKCtrlTypeBase {
    ///<summary>Represente GetAdditionalConfigInfo function</summary>
    /**
    * Represente GetAdditionalConfigInfo function
    */
    public static function GetAdditionalConfigInfo(){
        return array(
            "clGoogleMapUrl",
            igk_createAdditionalConfigInfo(array("clRequire"=>1))
        );
    }
    ///<summary>Represente getcanAddChild function</summary>
    /**
    * Represente getcanAddChild function
    */
    public function getcanAddChild(){
        return false;
    }
    ///<summary>Represente SetAdditionalConfigInfo function</summary>
    ///<param name="t" ref="true"></param>
    /**
    * Represente SetAdditionalConfigInfo function
    * @param  * $t
    */
    public static function SetAdditionalConfigInfo(& $t){
        $t["clGoogleMapUrl"]=igk_getr("clGoogleMapUrl");
    }
    ///<summary>Represente View function</summary>
    /**
    * Represente View function
    */
    public function View(){
        $t=$this->TargetNode;
        $t->ClearChilds();
        $lnk=igk_getv($this->Configs, "clGoogleMapUrl", "http://www.google.fr");
        $s=<<<EOF
<iframe class="noborder googlemap_map" src="{$lnk}"></iframe>
EOF;
        $t->Load($s);
    }
}
///<summary>Represente class: IGKHtmlGoogleMapNodeItem</summary>
/**
* Represente IGKHtmlGoogleMapNodeItem class
*/
final class IGKHtmlGoogleMapNodeItem extends IGKHtmlItem{
    private $m_key;
    private $m_location;
    private $m_query;
    private $m_type;
    ///<summary>Represente __acceptRender function</summary>
    ///<param name="opt" default="null"></param>
    /**
    * Represente __acceptRender function
    * @param mixed $opt the default value is null
    */
    protected function __acceptRender($opt=null){
        $this->initView();
        return parent::__AcceptRender($opt);
    }
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        parent::__construct("div");
        $this["class"]="igk-winui-google-map";
        $this->m_type="place";
        $this->m_key="AIzaSyDDOfGXjfMVZOFoAESJ3ON0bZyiJpnXBqc";
    }
    ///<summary>Represente getKey function</summary>
    /**
    * Represente getKey function
    */
    public function getKey(){
        return $this->m_key;
    }
    ///<summary>Represente getLocation function</summary>
    /**
    * Represente getLocation function
    */
    public function getLocation(){
        return $this->m_location;
    }
    ///<summary>Represente getQuery function</summary>
    /**
    * Represente getQuery function
    */
    public function getQuery(){
        return $this->m_query;
    }
    ///<summary>Represente getType function</summary>
    /**
    * Represente getType function
    */
    public function getType(){
        return $this->m_type;
    }
    ///<summary>Represente initView function</summary>
    /**
    * Represente initView function
    */
    public function initView(){
        $this->ClearChilds();
        $key=$this->getKey();
        $t=$this->getType();
        $q=$this->Location;
        $lnk="https://www.google.com/maps/embed/v1/{$t}?key={$key}&q={$q}";
        if(igk_sys_env_production() && $lnk){
            $s=<<<EOF
<iframe class="no-border1 googlemap_map fitw" src="{$lnk}" frameborder="0" ></iframe>
EOF;
            $this->Load($s);
        }
    }
    ///<summary>Represente setKey function</summary>
    ///<param name="v"></param>
    /**
    * Represente setKey function
    * @param mixed $v
    */
    public function setKey($v){
        $this->m_key=$v;
        return $this;
    }
    ///<summary>Represente setLocation function</summary>
    ///<param name="v"></param>
    /**
    * Represente setLocation function
    * @param mixed $v
    */
    public function setLocation($v){
        $this->m_location=$v;
        return $this;
    }
    ///<summary>Represente setQuery function</summary>
    ///<param name="v"></param>
    /**
    * Represente setQuery function
    * @param mixed $v
    */
    public function setQuery($v){
        $this->m_query=$v;
        return $this;
    }
    ///<summary>Represente setType function</summary>
    ///<param name="v"></param>
    /**
    * Represente setType function
    * @param mixed $v
    */
    public function setType($v){
        $this->m_type=$v;
        return $this;
    }
}
?>