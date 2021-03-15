<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlEmptyTagNodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlEmptyTagNodeItem::class));
	}
}