<?php
namespace IGK\Tests\Ext\winui\Components\winui\Gallery;
use PHPUnit\Framework\TestCase;
class igk_gdFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_gd.php"; 
	}
	/** @test */
	public function testigk_gd_resize_proportional(){ 
	$this->assertTrue(function_exists('igk_gd_resize_proportional'), 'function igk_gd_resize_proportional not exists'); 
	}
}