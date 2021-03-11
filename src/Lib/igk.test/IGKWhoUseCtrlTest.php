<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKWhoUseCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKWhoUseCtrl::class));
	}
}