<?php

// file: IGKInstallSiteConfig
// desc: install site
//
use function igk_resources_gets as __;


class IGKInstallSiteConfig extends IGKConfigCtrlBase{
	public function install($folder=null, $packagefolder=null){
		if ($packagefolder===null){
			$packagefolder = igk_get_packages_dir();
		}
		if ($folder == null)
		{
			// install request
			if (igk_server()->method("POST") && igk_valid_cref(1)){
				$folder = igk_getr("rootdir", $folder);
				$packagefolder = igk_getr("packagedir", $packagefolder);
			}
		}
		$folder = "d:/temp/installsite";
		$packagefolder = igk_get_packages_dir();

		if(empty($folder)){
			return false;
		}

		$core = IGK_LIB_FILE;
		$src = $folder."/src";
		igk_io_createdir($src);
		igk_io_createdir($src."/application");
		igk_io_createdir($src."/public");
		igk_io_createdir($src."/temp");
		igk_io_createdir($src."/logs");
		igk_io_createdir($src."/crons");
		igk_io_createdir($src."/test");



		if (!is_link($lnk = $src."/application/Lib/igk"))
		{
			igk_io_createdir(dirname($lnk));
			symlink(dirname($core) , $lnk);
		}

		if (!empty($packagefolder) && !is_link($lnk = $src."/application/Packages"))
		{
			symlink($packagefolder , $lnk);
		}

$index = $src."/public/index.php";

igk_io_w2file($index, <<<EOF
<?php
\$apppath = realpath(dirname(__FILE__)."/../application");
define('IGK_PROJECT_DIR', \$apppath.'/Projects');
define('IGK_APP_DIR', \$apppath);
define('IGK_SESS_DIR', dirname(\$apppath).'/temp');
@require_once(\$apppath."/Lib/igk/igk_framework.php");
unset(\$appath);
igk_sys_render_index(__FILE__);
EOF
);

	}
	public function __construct(){
		parent::__construct();
	}
	public function setConfig($c){
	}
	public function getConfigPage(){
		return "installsite";
	}
	public function getConfigGroup(){
		return "administration";
	}
	public function getIsConfigPageAvailable(){
		return 1;
	}
	public function View()
	{
		$t = $this->getTargetNode();
		$t->clearChilds();
		$c = $t->addPanelBox();
		$c->addSectionTitle(4)->Content = "Install Site";

		$form = $c->addForm();
		$form["method"] = "POST";
		$form["action"] = $this->getUri("install");

		$form->addFields(
			[
				"rootdir"=>["attribs"=>["class"=>"igk-form-control required" , "placeholder"=>__("Install site folder")]],
				"packagedir"=>["attribs"=>["class"=>"igk-form-control", "placeholder"=>__("Custom package folder")]]
			]
		);
		igk_html_form_initfield($form);
		$_ac_bar = $form->addActionBar();
		$_ac_bar->addInput("btn.send", "submit", __("Install"));
	}

}