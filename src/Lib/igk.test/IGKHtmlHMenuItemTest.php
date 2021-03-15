<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlHMenuItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlHMenuItem::class));
	}
}