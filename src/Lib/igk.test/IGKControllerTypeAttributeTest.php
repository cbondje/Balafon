<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKControllerTypeAttributeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKControllerTypeAttribute::class));
	}
}