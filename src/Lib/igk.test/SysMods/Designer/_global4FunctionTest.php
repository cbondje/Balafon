<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class _global4FunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/SysMods/Designer/.global.php"; 
	}
	/** @test */
	public function testigk_designer_off(){ 
	$this->assertTrue(function_exists('igk_designer_off'), 'function igk_designer_off not exists'); 
	}
}