<?php
namespace IGK\Test\api;
use PHPUnit\Framework\TestCase;
class IGKMySQLDataCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMySQLDataCtrl::class));
	}
}