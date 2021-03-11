<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMetaControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMetaController::class));
	}
}