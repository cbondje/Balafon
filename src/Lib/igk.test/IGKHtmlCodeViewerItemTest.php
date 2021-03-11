<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlCodeViewerItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCodeViewerItem::class));
	}
}