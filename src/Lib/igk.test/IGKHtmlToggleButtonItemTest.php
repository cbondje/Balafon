<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlToggleButtonItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlToggleButtonItem::class));
	}
}