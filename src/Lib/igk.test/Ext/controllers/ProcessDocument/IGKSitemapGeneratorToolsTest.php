<?php
namespace IGK\Test\Ext\controllers\ProcessDocument;
use PHPUnit\Framework\TestCase;
class IGKSitemapGeneratorToolsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSitemapGeneratorTools::class));
	}
}