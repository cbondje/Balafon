<?php
namespace IGK\Test\Ext\controllerModel\CanvaZoneCtrl;
use PHPUnit\Framework\TestCase;
class IGKfacebookCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKfacebookCtrl::class));
	}
}