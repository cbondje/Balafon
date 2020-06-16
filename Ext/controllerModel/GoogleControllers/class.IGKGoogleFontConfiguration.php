<?php
// @file: class.IGKGoogleFontConfiguration.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

use function igk_resources_gets as __;
///<summary>represent google's font configuration layer</summary>
/**
* represent google's font configuration layer
*/
final class IGKGoogleFontConfiguration extends IGKConfigCtrlBase{
    ///<summary>Represente getConfigFile function</summary>
    /**
    * Represente getConfigFile function
    */
    protected function getConfigFile(){
        return igk_io_dir($this->getDataDir()."/google.".IGK_CTRL_CONF_FILE);
    }
    ///<summary>Represente getConfigGroup function</summary>
    /**
    * Represente getConfigGroup function
    */
    public function getConfigGroup(){
        return "google";
    }
    ///<summary>Represente getConfigPage function</summary>
    /**
    * Represente getConfigPage function
    */
    public function getConfigPage(){
        return "google.fonts";
    }
    ///<summary>Represente getfontlist function</summary>
    /**
    * Represente getfontlist function
    */
    private function getfontlist(){
        $r=igk_google_settings();
        $fonts=igk_conf_get($r, "fonts");
        $t=(array)($fonts);
        return array_keys($t);
    }
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    public function getName(){
        return "com.igkdev.googlefont";
    }
    ///<summary>Represente initConfigMenu function</summary>
    /**
    * Represente initConfigMenu function
    */
    public function initConfigMenu(){
        return array(
            (new IGKMenuItem($this->ConfigPage,
            $this->ConfigPage,
            $this->getUri("showConfig")))->setGroup($this->ConfigGroup)
        );
    }
    ///<summary>Represente install function</summary>
    /**
    * Represente install function
    */
    public function install(){
        session_write_close();
        extract(igk_getrs("family", "size"));
		$k = 0;
		
		if(!empty($family))
        $k = igk_google_installfont($family, $size);
		
		if (igk_is_ajx_demand()){
			if ($k)
				igk_ajx_toast(__("font installed"), "success"); 
			else{
				igk_ajx_toast(__("font not installed"), "danger");
			}
		}
        $this->showConfig();
        igk_ajx_redirect();
        igk_navto_referer();
    }
    ///<summary>Represente showConfig function</summary>
    /**
    * Represente showConfig function
    */
    public function showConfig(){
        parent::showConfig();
        $cnf=$this->ConfigNode;
        $box=$cnf->addPanelBox();
        igk_css_reg_global_tempfile(dirname(__FILE__)."/Styles/google.font.css");
        $box->addctrlview("fontsettings", $this, ['fontlist'=>$this->getfontlist()]);
    }
	public function resave(){
		igk_google_store_setting();
	}
}
