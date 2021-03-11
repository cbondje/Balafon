<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class igk_coreFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_core.php"; 
	}
	/** @test */
	public function testigk_app_is_appuser(){ 
	$this->assertTrue(function_exists('igk_app_is_appuser'), 'function igk_app_is_appuser not exists'); 
	}
	/** @test */
	public function testigk_app_is_uri_demand(){ 
	$this->assertTrue(function_exists('igk_app_is_uri_demand'), 'function igk_app_is_uri_demand not exists'); 
	}
	/** @test */
	public function testigk_auto_load_class(){ 
	$this->assertTrue(function_exists('igk_auto_load_class'), 'function igk_auto_load_class not exists'); 
	}
	/** @test */
	public function testigk_const(){ 
	$this->assertTrue(function_exists('igk_const'), 'function igk_const not exists'); 
	}
	/** @test */
	public function testigk_const_defined(){ 
	$this->assertTrue(function_exists('igk_const_defined'), 'function igk_const_defined not exists'); 
	}
	/** @test */
	public function testigk_create_instance(){ 
	$this->assertTrue(function_exists('igk_create_instance'), 'function igk_create_instance not exists'); 
	}
	/** @test */
	public function testigk_dev_wln(){ 
	$this->assertTrue(function_exists('igk_dev_wln'), 'function igk_dev_wln not exists'); 
	}
	/** @test */
	public function testigk_dev_wln_e(){ 
	$this->assertTrue(function_exists('igk_dev_wln_e'), 'function igk_dev_wln_e not exists'); 
	}
	/** @test */
	public function testigk_dump_pre(){ 
	$this->assertTrue(function_exists('igk_dump_pre'), 'function igk_dump_pre not exists'); 
	}
	/** @test */
	public function testigk_encrypt(){ 
	$this->assertTrue(function_exists('igk_encrypt'), 'function igk_encrypt not exists'); 
	}
	/** @test */
	public function testigk_html_uri(){ 
	$this->assertTrue(function_exists('igk_html_uri'), 'function igk_html_uri not exists'); 
	}
	/** @test */
	public function testigk_io_basenamewithoutext(){ 
	$this->assertTrue(function_exists('igk_io_basenamewithoutext'), 'function igk_io_basenamewithoutext not exists'); 
	}
	/** @test */
	public function testigk_io_get_script(){ 
	$this->assertTrue(function_exists('igk_io_get_script'), 'function igk_io_get_script not exists'); 
	}
	/** @test */
	public function testigk_io_path_ext(){ 
	$this->assertTrue(function_exists('igk_io_path_ext'), 'function igk_io_path_ext not exists'); 
	}
	/** @test */
	public function testigk_io_remove_ext(){ 
	$this->assertTrue(function_exists('igk_io_remove_ext'), 'function igk_io_remove_ext not exists'); 
	}
	/** @test */
	public function testigk_is_cmd(){ 
	$this->assertTrue(function_exists('igk_is_cmd'), 'function igk_is_cmd not exists'); 
	}
	/** @test */
	public function testigk_load_library(){ 
	$this->assertTrue(function_exists('igk_load_library'), 'function igk_load_library not exists'); 
	}
	/** @test */
	public function testigk_server(){ 
	$this->assertTrue(function_exists('igk_server'), 'function igk_server not exists'); 
	}
	/** @test */
	public function testigk_sys_copyright(){ 
	$this->assertTrue(function_exists('igk_sys_copyright'), 'function igk_sys_copyright not exists'); 
	}
	/** @test */
	public function testigk_sys_download_core(){ 
	$this->assertTrue(function_exists('igk_sys_download_core'), 'function igk_sys_download_core not exists'); 
	}
	/** @test */
	public function testigk_tag_wln(){ 
	$this->assertTrue(function_exists('igk_tag_wln'), 'function igk_tag_wln not exists'); 
	}
	/** @test */
	public function testigk_toarray(){ 
	$this->assertTrue(function_exists('igk_toarray'), 'function igk_toarray not exists'); 
	}
	/** @test */
	public function testigk_wl(){ 
	$this->assertTrue(function_exists('igk_wl'), 'function igk_wl not exists'); 
	}
	/** @test */
	public function testigk_wl_pre(){ 
	$this->assertTrue(function_exists('igk_wl_pre'), 'function igk_wl_pre not exists'); 
	}
	/** @test */
	public function testigk_wl_tag(){ 
	$this->assertTrue(function_exists('igk_wl_tag'), 'function igk_wl_tag not exists'); 
	}
	/** @test */
	public function testigk_wln(){ 
	$this->assertTrue(function_exists('igk_wln'), 'function igk_wln not exists'); 
	}
	/** @test */
	public function testigk_wln_e(){ 
	$this->assertTrue(function_exists('igk_wln_e'), 'function igk_wln_e not exists'); 
	}
}