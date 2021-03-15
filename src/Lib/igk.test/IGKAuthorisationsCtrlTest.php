<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKAuthorisationsCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKAuthorisationsCtrl::class));
	}
}