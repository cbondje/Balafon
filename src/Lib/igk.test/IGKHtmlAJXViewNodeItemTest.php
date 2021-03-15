<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlAJXViewNodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlAJXViewNodeItem::class));
	}
}