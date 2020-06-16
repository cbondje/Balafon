<?php
// @file: class.IGKPageZoneCtrl.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKPageZoneCtrl</summary>
/**
* Represente IGKPageZoneCtrl class
*/
abstract class IGKPageZoneCtrl extends IGKCtrlTypeBase {
    private $m_viewZone;
    ///<summary>Represente _showChild function</summary>
    ///<param name="targetnode" default="null"></param>
    /**
    * Represente _showChild function
    * @param  $targetnode the default value is null
    */
    protected function _showChild($targetnode=null){
        $t=$targetnode ? $targetnode: $this->TargetNode;
        igk_html_add($this->m_viewZone, $t, 1000);
        if($this->hasChild){
            foreach($this->getChilds() as $k=>$v){
                if($v->isVisible){
                    igk_html_add($v->TargetNode, $this->m_viewZone);
                    $v->View();
                }
                else{
                    igk_html_rm($v->TargetNode);
                }
            }
        }
    }
    ///<summary>Represente _showViewFile function</summary>
    /**
    * Represente _showViewFile function
    */
    protected function _showViewFile(){
        parent::_showViewFile();
    }
    ///<summary>Represente GetAdditionalConfigInfo function</summary>
    /**
    * Represente GetAdditionalConfigInfo function
    */
    public static function GetAdditionalConfigInfo(){
        return null;
    }
    ///<summary>Represente getCanAddChild function</summary>
    /**
    * Represente getCanAddChild function
    */
    public function getCanAddChild(){
        return true;
    }
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    public function getName(){
        return get_class($this);
    }
    ///<summary>Represente getViewZone function</summary>
    /**
    * Represente getViewZone function
    */
    public function getViewZone(){
        return $this->m_viewZone;
    }
    ///<summary>Represente InitComplete function</summary>
    /**
    * Represente InitComplete function
    */
    protected function InitComplete(){
        parent::InitComplete();
    }
    ///<summary>Represente initTargetNode function</summary>
    //@@@ init target node
    /**
    * Represente initTargetNode function
    */
    protected function initTargetNode(){
        $node=parent::initTargetNode();
        $node["class"]="alignc alignt dispb";
        $this->m_viewZone=$node->addDiv();
        $this->m_viewZone["class"]="page_zone";
        return $node;
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