<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDebugCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDebugCtrl::class));
	}
}