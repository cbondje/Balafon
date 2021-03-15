<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
use IGK;
class IGKEnvironmentTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(IGK\IGKEnvironment::class));
	}
}