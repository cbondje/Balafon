<?php
namespace IGK\Test\Ext\controllers\BootStrap\Ext\WinUI\Components\Popover;
use PHPUnit\Framework\TestCase;
class IGKHtmlBootstrapPopoverItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBootstrapPopoverItem::class));
	}
}