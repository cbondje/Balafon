<?php
namespace IGK\Tests\Ext\controllerModel\IGKServiceCtrl;
use PHPUnit\Framework\TestCase;
class _global8FunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/tools/.global.php"; 
	}
	/** @test */
	public function testigk_sys_gen_global_sitemap(){ 
	$this->assertTrue(function_exists('igk_sys_gen_global_sitemap'), 'function igk_sys_gen_global_sitemap not exists'); 
	}
}