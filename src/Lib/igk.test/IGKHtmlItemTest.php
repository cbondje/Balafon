<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlItem::class));
	}
}