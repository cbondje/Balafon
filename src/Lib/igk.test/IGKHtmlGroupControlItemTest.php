<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlGroupControlItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlGroupControlItem::class));
	}
}