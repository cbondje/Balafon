<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKConfigCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKConfigCtrl::class));
	}
}