<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlMenuBarItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlMenuBarItem::class));
	}
}