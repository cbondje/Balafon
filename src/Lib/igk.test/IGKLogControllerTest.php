<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKLogControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKLogController::class));
	}
}