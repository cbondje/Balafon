<?php
namespace IGK\Tests\Ext\winui\Components\videoControls;
use PHPUnit\Framework\TestCase;
class igk_html_obTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Library/igk_html_ob.php"; 
	}
	/** @test */
	public function testigk_html_ob(){ 
	$this->assertTrue(function_exists('igk_html_ob'), 'function igk_html_ob not exists'); 
	}
	/** @test */
	public function testigk_html_ob_select(){ 
	$this->assertTrue(function_exists('igk_html_ob_select'), 'function igk_html_ob_select not exists'); 
	}
	/** @test */
	public function testigk_html_ob_submit(){ 
	$this->assertTrue(function_exists('igk_html_ob_submit'), 'function igk_html_ob_submit not exists'); 
	}
}