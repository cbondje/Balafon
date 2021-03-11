<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlNoTagNodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlNoTagNodeItem::class));
	}
}