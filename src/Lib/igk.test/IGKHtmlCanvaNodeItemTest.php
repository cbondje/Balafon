<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlCanvaNodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCanvaNodeItem::class));
	}
}