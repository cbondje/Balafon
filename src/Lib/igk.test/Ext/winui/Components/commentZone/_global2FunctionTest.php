<?php
namespace IGK\Tests\Ext\controllers\BootStrap;
use PHPUnit\Framework\TestCase;
class _global2FunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/commentZone/.global.php"; 
	}
	/** @test */
	public function testigk_comment_init(){ 
	$this->assertTrue(function_exists('igk_comment_init'), 'function igk_comment_init not exists'); 
	}
	/** @test */
	public function testigk_comment_time(){ 
	$this->assertTrue(function_exists('igk_comment_time'), 'function igk_comment_time not exists'); 
	}
	/** @test */
	public function testigk_comment_zone(){ 
	$this->assertTrue(function_exists('igk_comment_zone'), 'function igk_comment_zone not exists'); 
	}
	/** @test */
	public function testigk_comment_zone_callback(){ 
	$this->assertTrue(function_exists('igk_comment_zone_callback'), 'function igk_comment_zone_callback not exists'); 
	}
	/** @test */
	public function testigk_html_node_commentzone(){ 
	$this->assertTrue(function_exists('igk_html_node_commentzone'), 'function igk_html_node_commentzone not exists'); 
	}
}