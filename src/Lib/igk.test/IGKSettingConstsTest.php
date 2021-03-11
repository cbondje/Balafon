<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSettingConstsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSettingConsts::class));
	}
}