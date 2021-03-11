<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCookieWarningControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCookieWarningController::class));
	}
}