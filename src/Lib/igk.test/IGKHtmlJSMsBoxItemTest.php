<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlJSMsBoxItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlJSMsBoxItem::class));
	}
}