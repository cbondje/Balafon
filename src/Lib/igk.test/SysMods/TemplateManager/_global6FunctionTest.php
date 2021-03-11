<?php
namespace IGK\Tests\Library;
use PHPUnit\Framework\TestCase;
class _global6FunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/SysMods/TemplateManager/.global.php"; 
	}
	/** @test */
	public function testigk_io_tempfile(){ 
	$this->assertTrue(function_exists('igk_io_tempfile'), 'function igk_io_tempfile not exists'); 
	}
	/** @test */
	public function testigk_templage_get_dir(){ 
	$this->assertTrue(function_exists('igk_templage_get_dir'), 'function igk_templage_get_dir not exists'); 
	}
	/** @test */
	public function testigk_template_class_uri(){ 
	$this->assertTrue(function_exists('igk_template_class_uri'), 'function igk_template_class_uri not exists'); 
	}
	/** @test */
	public function testigk_template_create(){ 
	$this->assertTrue(function_exists('igk_template_create'), 'function igk_template_create not exists'); 
	}
	/** @test */
	public function testigk_template_create_ctrl(){ 
	$this->assertTrue(function_exists('igk_template_create_ctrl'), 'function igk_template_create_ctrl not exists'); 
	}
	/** @test */
	public function testigk_template_createtemplateinfo(){ 
	$this->assertTrue(function_exists('igk_template_createtemplateinfo'), 'function igk_template_createtemplateinfo not exists'); 
	}
	/** @test */
	public function testigk_template_default_content(){ 
	$this->assertTrue(function_exists('igk_template_default_content'), 'function igk_template_default_content not exists'); 
	}
	/** @test */
	public function testigk_template_default_script_content(){ 
	$this->assertTrue(function_exists('igk_template_default_script_content'), 'function igk_template_default_script_content not exists'); 
	}
	/** @test */
	public function testigk_template_get_ctrls(){ 
	$this->assertTrue(function_exists('igk_template_get_ctrls'), 'function igk_template_get_ctrls not exists'); 
	}
	/** @test */
	public function testigk_template_init_env(){ 
	$this->assertTrue(function_exists('igk_template_init_env'), 'function igk_template_init_env not exists'); 
	}
	/** @test */
	public function testigk_template_is_template_class(){ 
	$this->assertTrue(function_exists('igk_template_is_template_class'), 'function igk_template_is_template_class not exists'); 
	}
	/** @test */
	public function testigk_template_load(){ 
	$this->assertTrue(function_exists('igk_template_load'), 'function igk_template_load not exists'); 
	}
	/** @test */
	public function testigk_template_load_ns(){ 
	$this->assertTrue(function_exists('igk_template_load_ns'), 'function igk_template_load_ns not exists'); 
	}
	/** @test */
	public function testigk_template_mananer_ctrl(){ 
	$this->assertTrue(function_exists('igk_template_mananer_ctrl'), 'function igk_template_mananer_ctrl not exists'); 
	}
	/** @test */
	public function testigk_template_name(){ 
	$this->assertTrue(function_exists('igk_template_name'), 'function igk_template_name not exists'); 
	}
	/** @test */
	public function testigk_template_package_exists(){ 
	$this->assertTrue(function_exists('igk_template_package_exists'), 'function igk_template_package_exists not exists'); 
	}
	/** @test */
	public function testigk_template_view_assets_favicon(){ 
	$this->assertTrue(function_exists('igk_template_view_assets_favicon'), 'function igk_template_view_assets_favicon not exists'); 
	}
	/** @test */
	public function testigk_template_view_badge(){ 
	$this->assertTrue(function_exists('igk_template_view_badge'), 'function igk_template_view_badge not exists'); 
	}
	/** @test */
	public function testigk_template_view_btn_loadandinstall(){ 
	$this->assertTrue(function_exists('igk_template_view_btn_loadandinstall'), 'function igk_template_view_btn_loadandinstall not exists'); 
	}
	/** @test */
	public function testigk_view_render_if_visible(){ 
	$this->assertTrue(function_exists('igk_view_render_if_visible'), 'function igk_view_render_if_visible not exists'); 
	}
}