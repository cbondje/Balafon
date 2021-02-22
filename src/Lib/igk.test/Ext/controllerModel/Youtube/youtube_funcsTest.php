<?php
namespace IGK\Tests\Ext\winui\Components\uiTrack;
use PHPUnit\Framework\TestCase;
class youtube_funcsTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/Youtube/youtube.funcs.php"; 
	}
	/** @test */
	public function testigk_html_demo_youtubevideo(){ 
	$this->assertTrue(function_exists('igk_html_demo_youtubevideo'), 'function igk_html_demo_youtubevideo not exists'); 
	}
	/** @test */
	public function testigk_html_desc_youtubevideo(){ 
	$this->assertTrue(function_exists('igk_html_desc_youtubevideo'), 'function igk_html_desc_youtubevideo not exists'); 
	}
	/** @test */
	public function testigk_html_node_youtubevideo(){ 
	$this->assertTrue(function_exists('igk_html_node_youtubevideo'), 'function igk_html_node_youtubevideo not exists'); 
	}
}