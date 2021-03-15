<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKPluginCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKPluginCtrl::class));
	}
}