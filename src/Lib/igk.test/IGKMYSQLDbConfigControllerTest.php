<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMYSQLDbConfigControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMYSQLDbConfigController::class));
	}
}