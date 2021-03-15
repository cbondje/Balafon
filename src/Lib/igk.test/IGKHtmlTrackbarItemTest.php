<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlTrackbarItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlTrackbarItem::class));
	}
}