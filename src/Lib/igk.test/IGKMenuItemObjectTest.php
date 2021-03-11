<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMenuItemObjectTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMenuItemObject::class));
	}
}