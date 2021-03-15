<?php
namespace IGK\Test\Ext\controllers\BootStrap\Ext\WinUI\Components\Popover;
use PHPUnit\Framework\TestCase;
class IGKJQueryCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKJQueryCtrl::class));
	}
}