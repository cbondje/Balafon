<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKLayoutCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKLayoutCtrl::class));
	}
}