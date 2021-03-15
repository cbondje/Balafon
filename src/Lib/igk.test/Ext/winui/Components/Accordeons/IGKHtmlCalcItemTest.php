<?php
namespace IGK\Test\Ext\winui\Components\Accordeons;
use PHPUnit\Framework\TestCase;
class IGKHtmlCalcItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCalcItem::class));
	}
}