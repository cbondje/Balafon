<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSessionControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSessionController::class));
	}
}