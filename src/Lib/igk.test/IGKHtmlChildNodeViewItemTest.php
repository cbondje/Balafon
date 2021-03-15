<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlChildNodeViewItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlChildNodeViewItem::class));
	}
}