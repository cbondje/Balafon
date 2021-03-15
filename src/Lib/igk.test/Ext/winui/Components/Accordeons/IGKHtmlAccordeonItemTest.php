<?php
namespace IGK\Test\Ext\winui\Components\Accordeons;
use PHPUnit\Framework\TestCase;
class IGKHtmlAccordeonItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlAccordeonItem::class));
	}
}