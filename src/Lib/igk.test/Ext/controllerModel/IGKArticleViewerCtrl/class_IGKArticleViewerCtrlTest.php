<?php
namespace IGK\Tests\SysMods\TemplateManager;
use PHPUnit\Framework\TestCase;
class class_IGKArticleViewerCtrlTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/IGKArticleViewerCtrl/class.IGKArticleViewerCtrl.php"; 
	}
	/** @test */
	public function testigk_js_av_bind_initarticle(){ 
	$this->assertTrue(function_exists('igk_js_av_bind_initarticle'), 'function igk_js_av_bind_initarticle not exists'); 
	}
}