<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlSearchItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlSearchItem::class));
	}
}