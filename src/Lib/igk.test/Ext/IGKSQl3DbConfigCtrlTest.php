<?php
namespace IGK\Test\Ext;
use PHPUnit\Framework\TestCase;
class IGKSQl3DbConfigCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSQl3DbConfigCtrl::class));
	}
}