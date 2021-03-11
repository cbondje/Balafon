<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDBQueryDriverTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDBQueryDriver::class));
	}
}