<?php
namespace IGK\Test\SysMods\TemplateManager;
use PHPUnit\Framework\TestCase;
class IGKAppSettingTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKAppSetting::class));
	}
}