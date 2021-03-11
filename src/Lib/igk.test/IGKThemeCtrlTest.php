<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKThemeCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKThemeCtrl::class));
	}
}