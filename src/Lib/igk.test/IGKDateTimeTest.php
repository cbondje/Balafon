<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDateTimeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDateTime::class));
	}
}