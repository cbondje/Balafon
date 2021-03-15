<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMailCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMailCtrl::class));
	}
}