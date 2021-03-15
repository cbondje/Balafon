<?php
namespace IGK\Tests\Ext\controllerModel\GoogleControllers;
use PHPUnit\Framework\TestCase;
class class_winui_horizontalpaneFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/HorizontalPane/class.winui.horizontalpane.php"; 
	}
	/** @test */
	public function testigk_hpane_get_dir_uri(){ 
	$this->assertTrue(function_exists('igk_hpane_get_dir_uri'), 'function igk_hpane_get_dir_uri not exists'); 
	}
}