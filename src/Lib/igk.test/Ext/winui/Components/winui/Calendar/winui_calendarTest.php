<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class winui_calendarTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/winui/Calendar/winui.calendar.php"; 
	}
	/** @test */
	public function testigk_html_demo_calendar(){ 
	$this->assertTrue(function_exists('igk_html_demo_calendar'), 'function igk_html_demo_calendar not exists'); 
	}
	/** @test */
	public function testigk_html_node_calendar(){ 
	$this->assertTrue(function_exists('igk_html_node_calendar'), 'function igk_html_node_calendar not exists'); 
	}
}