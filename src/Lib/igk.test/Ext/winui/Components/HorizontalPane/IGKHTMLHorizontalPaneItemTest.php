<?php
namespace IGK\Test\Ext\winui\Components\HorizontalPane;
use PHPUnit\Framework\TestCase;
class IGKHTMLHorizontalPaneItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHTMLHorizontalPaneItem::class));
	}
}