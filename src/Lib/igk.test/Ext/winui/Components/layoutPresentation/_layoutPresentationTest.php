<?php
namespace IGK\Tests\Ext\winui\Components\winui\Calendar;
use PHPUnit\Framework\TestCase;
class _layoutPresentationTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/layoutPresentation/.layoutPresentation.php"; 
	}
	/** @test */
	public function testigk_html_demo_layoutpresentation(){ 
	$this->assertTrue(function_exists('igk_html_demo_layoutpresentation'), 'function igk_html_demo_layoutpresentation not exists'); 
	}
	/** @test */
	public function testigk_html_node_layoutpresentation(){ 
	$this->assertTrue(function_exists('igk_html_node_layoutpresentation'), 'function igk_html_node_layoutpresentation not exists'); 
	}
}