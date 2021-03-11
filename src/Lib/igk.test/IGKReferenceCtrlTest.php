<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKReferenceCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKReferenceCtrl::class));
	}
}