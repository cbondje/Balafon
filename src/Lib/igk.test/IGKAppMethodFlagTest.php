<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKAppMethodFlagTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKAppMethodFlag::class));
	}
}