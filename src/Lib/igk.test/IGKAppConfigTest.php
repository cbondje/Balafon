<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKAppConfigTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKAppConfig::class));
	}
}