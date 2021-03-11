<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCountryCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCountryCtrl::class));
	}
}