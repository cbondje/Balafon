<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlCurrentUserInfoItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCurrentUserInfoItem::class));
	}
}