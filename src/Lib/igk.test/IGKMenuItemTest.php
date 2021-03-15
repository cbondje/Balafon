<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMenuItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMenuItem::class));
	}
}