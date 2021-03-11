<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlAJXViewItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlAJXViewItem::class));
	}
}