<?php
namespace IGK\Test\Ext\winui\Components\ColorPicker;
use PHPUnit\Framework\TestCase;
class IGKJS_HorizontalPaneTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKJS_HorizontalPane::class));
	}
}