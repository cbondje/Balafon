<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSessionManagerCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSessionManagerCtrl::class));
	}
}