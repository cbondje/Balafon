<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlNothingItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlNothingItem::class));
	}
}