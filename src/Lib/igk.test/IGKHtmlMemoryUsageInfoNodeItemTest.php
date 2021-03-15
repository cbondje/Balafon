<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlMemoryUsageInfoNodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlMemoryUsageInfoNodeItem::class));
	}
}