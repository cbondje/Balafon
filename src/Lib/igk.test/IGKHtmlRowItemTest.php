<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlRowItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlRowItem::class));
	}
}