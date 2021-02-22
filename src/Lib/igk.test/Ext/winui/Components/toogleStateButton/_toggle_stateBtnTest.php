<?php
namespace IGK\Tests\Ext\winui\Components\layoutPresentation;
use PHPUnit\Framework\TestCase;
class _toggle_stateBtnTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/toogleStateButton/.toggle.stateBtn.php"; 
	}
	/** @test */
	public function testigk_html_demo_togglestatebutton(){ 
	$this->assertTrue(function_exists('igk_html_demo_togglestatebutton'), 'function igk_html_demo_togglestatebutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_togglestatebutton(){ 
	$this->assertTrue(function_exists('igk_html_node_togglestatebutton'), 'function igk_html_node_togglestatebutton not exists'); 
	}
}