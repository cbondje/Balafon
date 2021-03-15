<?php
namespace IGK\Tests\Ext\winui\Components\toogleStateButton;
use PHPUnit\Framework\TestCase;
class uiTrackFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/uiTrack/uiTrack.php"; 
	}
	/** @test */
	public function testigk_html_demo_uitrack(){ 
	$this->assertTrue(function_exists('igk_html_demo_uitrack'), 'function igk_html_demo_uitrack not exists'); 
	}
	/** @test */
	public function testigk_html_node_uitrack(){ 
	$this->assertTrue(function_exists('igk_html_node_uitrack'), 'function igk_html_node_uitrack not exists'); 
	}
}