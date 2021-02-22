<?php
namespace IGK\Tests\api;
use PHPUnit\Framework\TestCase;
class igk_apiTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/api/igk_api.php"; 
	}
	/** @test */
	public function testigk_api_free_session(){ 
	$this->assertTrue(function_exists('igk_api_free_session'), 'function igk_api_free_session not exists'); 
	}
	/** @test */
	public function testigk_api_sync_def_evaluate_entries(){ 
	$this->assertTrue(function_exists('igk_api_sync_def_evaluate_entries'), 'function igk_api_sync_def_evaluate_entries not exists'); 
	}
}