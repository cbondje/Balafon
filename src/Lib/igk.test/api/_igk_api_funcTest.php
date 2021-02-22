<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class _igk_api_funcTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/api/.igk.api.func.pinc"; 
	}
	/** @test */
	public function testigk_api_build_ctrl_manifest(){ 
	$this->assertTrue(function_exists('igk_api_build_ctrl_manifest'), 'function igk_api_build_ctrl_manifest not exists'); 
	}
	/** @test */
	public function testigk_api_syncfrom_ctrl(){ 
	$this->assertTrue(function_exists('igk_api_syncfrom_ctrl'), 'function igk_api_syncfrom_ctrl not exists'); 
	}
	/** @test */
	public function testigk_api_syncto_ctrl(){ 
	$this->assertTrue(function_exists('igk_api_syncto_ctrl'), 'function igk_api_syncto_ctrl not exists'); 
	}
}