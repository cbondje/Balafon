<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKApiFunctionCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKApiFunctionCtrl::class));
	}
}