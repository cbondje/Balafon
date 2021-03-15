<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSystemUriActionCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSystemUriActionCtrl::class));
	}
}