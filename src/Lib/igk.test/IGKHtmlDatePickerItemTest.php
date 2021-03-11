<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlDatePickerItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlDatePickerItem::class));
	}
}