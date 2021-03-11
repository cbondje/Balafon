<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKValidatorTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKValidator::class));
	}
}