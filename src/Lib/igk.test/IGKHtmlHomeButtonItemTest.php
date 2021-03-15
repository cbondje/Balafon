<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlHomeButtonItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlHomeButtonItem::class));
	}
}