<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKOtherMenuCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKOtherMenuCtrl::class));
	}
}