<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class igk_bootstrap_funcsTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllers/BootStrap/igk_bootstrap_funcs.php"; 
	}
	/** @test */
	public function testigk_bootstrap_pic_zone(){ 
	$this->assertTrue(function_exists('igk_bootstrap_pic_zone'), 'function igk_bootstrap_pic_zone not exists'); 
	}
}