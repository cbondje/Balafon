<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKConfigurationCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKConfigurationCtrl::class));
	}
}