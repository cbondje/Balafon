<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKFileManagerCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKFileManagerCtrl::class));
	}
}