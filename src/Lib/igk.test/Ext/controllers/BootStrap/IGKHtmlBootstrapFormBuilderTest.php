<?php
namespace IGK\Test\Ext\controllers\BootStrap;
use PHPUnit\Framework\TestCase;
class IGKHtmlBootstrapFormBuilderTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBootstrapFormBuilder::class));
	}
}