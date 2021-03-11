<?php
namespace IGK\Test\Ext\controllerModel\BillingCtrl;
use PHPUnit\Framework\TestCase;
class IGKCaddyInfoTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCaddyInfo::class));
	}
}