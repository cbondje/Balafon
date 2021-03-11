<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKPageCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKPageCtrl::class));
	}
}