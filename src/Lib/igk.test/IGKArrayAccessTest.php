<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKArrayAccessTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKArrayAccess::class));
	}
}