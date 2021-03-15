<?php
namespace IGK\Tests\Ext\controllerModel\Youtube;
use PHPUnit\Framework\TestCase;
class igk_html_jsonFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Library/igk_html_json.php"; 
	}
	/** @test */
	public function testigk_html_json(){ 
	$this->assertTrue(function_exists('igk_html_json'), 'function igk_html_json not exists'); 
	}
	/** @test */
	public function testigk_html_json_decode(){ 
	$this->assertTrue(function_exists('igk_html_json_decode'), 'function igk_html_json_decode not exists'); 
	}
}