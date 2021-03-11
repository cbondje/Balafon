<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKGroupControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKGroupController::class));
	}
}