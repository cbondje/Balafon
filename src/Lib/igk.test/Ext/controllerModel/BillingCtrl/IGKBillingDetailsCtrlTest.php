<?php
namespace IGK\Test\Ext\controllerModel\BillingCtrl;
use PHPUnit\Framework\TestCase;
class IGKBillingDetailsCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKBillingDetailsCtrl::class));
	}
}