<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSysDbControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSysDbController::class));
	}
}