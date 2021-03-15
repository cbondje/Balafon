<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKLogTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKLog::class));
	}
}