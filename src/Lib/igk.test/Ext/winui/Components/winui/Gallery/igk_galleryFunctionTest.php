<?php
namespace IGK\Tests\Ext\controllerModel\Facebook;
use PHPUnit\Framework\TestCase;
class igk_galleryFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/winui/Gallery/igk.gallery.php"; 
	}
	/** @test */
	public function testigk_gallery_add(){ 
	$this->assertTrue(function_exists('igk_gallery_add'), 'function igk_gallery_add not exists'); 
	}
	/** @test */
	public function testigk_html_node_gallery(){ 
	$this->assertTrue(function_exists('igk_html_node_gallery'), 'function igk_html_node_gallery not exists'); 
	}
}