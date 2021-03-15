<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlPaginationItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPaginationItem::class));
	}
}