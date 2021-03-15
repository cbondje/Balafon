<?php
namespace IGK\Test\Ext\controllerModel\GoogleControllers;
use PHPUnit\Framework\TestCase;
class IGKGoogleFontConfigurationTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKGoogleFontConfiguration::class));
	}
}