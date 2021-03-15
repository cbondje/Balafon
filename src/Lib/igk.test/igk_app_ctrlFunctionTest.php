<?php
namespace IGK\Tests\api;
use PHPUnit\Framework\TestCase;
class igk_app_ctrlFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_app_ctrl.php"; 
	}
	/** @test */
	public function testigk_app_ctrl_dropped_callback(){ 
	$this->assertTrue(function_exists('igk_app_ctrl_dropped_callback'), 'function igk_app_ctrl_dropped_callback not exists'); 
	}
	/** @test */
	public function testigk_app_load_login_form(){ 
	$this->assertTrue(function_exists('igk_app_load_login_form'), 'function igk_app_load_login_form not exists'); 
	}
	/** @test */
	public function testigk_app_login_form(){ 
	$this->assertTrue(function_exists('igk_app_login_form'), 'function igk_app_login_form not exists'); 
	}
	/** @test */
	public function testigk_get_app_auth(){ 
	$this->assertTrue(function_exists('igk_get_app_auth'), 'function igk_get_app_auth not exists'); 
	}
	/** @test */
	public function testigk_get_app_ctrl(){ 
	$this->assertTrue(function_exists('igk_get_app_ctrl'), 'function igk_get_app_ctrl not exists'); 
	}
	/** @test */
	public function testigk_html_node_apploginform(){ 
	$this->assertTrue(function_exists('igk_html_node_apploginform'), 'function igk_html_node_apploginform not exists'); 
	}
}