<?php
namespace IGK\Tests\Ext\controllerModel\Twitter;
use PHPUnit\Framework\TestCase;
class _global5FunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/videoControls/.global.php"; 
	}
	/** @test */
	public function testigk_html_node_videocontrols(){ 
	$this->assertTrue(function_exists('igk_html_node_videocontrols'), 'function igk_html_node_videocontrols not exists'); 
	}
}