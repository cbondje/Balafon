<?php
namespace IGK\Test\Ext\winui\Components\Slider;
use PHPUnit\Framework\TestCase;
class IGKHtmlFormSelectGenderItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlFormSelectGenderItem::class));
	}
}