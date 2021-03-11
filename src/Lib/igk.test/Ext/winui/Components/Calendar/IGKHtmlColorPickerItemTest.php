<?php
namespace IGK\Test\Ext\winui\Components\Calendar;
use PHPUnit\Framework\TestCase;
class IGKHtmlColorPickerItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlColorPickerItem::class));
	}
}