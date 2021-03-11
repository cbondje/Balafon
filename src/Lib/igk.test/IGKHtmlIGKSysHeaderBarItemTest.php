<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlIGKSysHeaderBarItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlIGKSysHeaderBarItem::class));
	}
}