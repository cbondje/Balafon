<?php
// @file: class.IGKAppleIconSpecificsCTRL.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: IGKAppleIconCtrl</summary>
/**
* Represente IGKAppleIconCtrl class
*/
abstract class IGKAppleIconCtrl extends IGKCtrlTypeBase {
    ///<summary>Represente GetAdditionalConfigInfo function</summary>
    /**
    * Represente GetAdditionalConfigInfo function
    */
    public static function GetAdditionalConfigInfo(){
        return array(
            "clAppleIconUri"=>igk_createAdditionalConfigInfo(array("clRequire"=>1)),
            "clAppleTouchIconType"=>new IGKAdditionCtrlInfo("select",
            array(
                "apple-touch-icon"=>"apple-touch-icon",
                "apple-touch-icon-precomposed"=>"apple-touch-icon-precomposed"
            ))
        );
    }
    ///<summary>Represente getAppleIcon function</summary>
    /**
    * Represente getAppleIcon function
    */
    public function getAppleIcon(){
        $tb=explode(',', $this->Configs->clAppleIconUri);
        return $tb;
    }
    ///<summary>Represente getCanAddChild function</summary>
    /**
    * Represente getCanAddChild function
    */
    public function getCanAddChild(){
        return false;
    }
    ///<summary>Represente getisVisisble function</summary>
    /**
    * Represente getisVisisble function
    */
    public function getisVisisble(){
        return true;
    }
    ///<summary>Represente InitComplete function</summary>
    /**
    * Represente InitComplete function
    */
    protected function InitComplete(){
        parent::InitComplete();
        $tab=$this->getAppleIcon();
        $c=igk_count($tab);
        $regex="/\.(?P<name>(([0-9]+)x([0-9]+))*)/i";
        if($c == 1){
            $lnk=$this->app->Doc->addLink("apple-touch-icon");
            $lnk["rel"]=$this->Configs->clAppleTouchIconType;
            $v=$this->Configs->clAppleIconUri;
            if(preg_match($regex, $v)){
                preg_match_all($regex, $v, $t);
                $lnk["sizes"]=$t["name"][0];
            }
            $lnk["href"]="?vimg=".$v;
        }
        else{
            $i=0;
            foreach($tab as  $v){
                $lnk=$this->app->Doc->addLink("apple-touch-icon:".$i);
                $lnk["rel"]=$this->Configs->clAppleTouchIconType;
                if(preg_match($regex, $v)){
                    preg_match_all($regex, $v, $t);
                    $lnk["sizes"]=$t["name"][0];
                }
                $lnk["href"]="?vimg=".$v;
                $i++;
            }
        }
    }
    ///<summary>Represente initTargetNode function</summary>
    /**
    * Represente initTargetNode function
    */
    protected function initTargetNode(){}
    ///<summary>Represente SetAdditionalConfigInfo function</summary>
    ///<param name="t" ref="true"></param>
    /**
    * Represente SetAdditionalConfigInfo function
    * @param  * $t
    */
    public static function SetAdditionalConfigInfo(& $t){
        $t["clAppleIconUri"]=igk_getr("clAppleIconUri");
        $t["clAppleTouchIconType"]=igk_getr("clAppleTouchIconType");
    }
    ///<summary>Represente View function</summary>
    /**
    * Represente View function
    */
    public function View(){}
}
?>