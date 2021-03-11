<?php
namespace IGK\Test\Ext\winui\Components\ColorPicker;
use PHPUnit\Framework\TestCase;
class IGKHtmlCircleColorPickerItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCircleColorPickerItem::class));
	}
}