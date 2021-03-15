<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlIGKHeaderBarItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlIGKHeaderBarItem::class));
	}
}