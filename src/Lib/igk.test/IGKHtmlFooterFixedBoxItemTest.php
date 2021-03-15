<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlFooterFixedBoxItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlFooterFixedBoxItem::class));
	}
}