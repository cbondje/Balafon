<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKControllerConfigDataTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKControllerConfigData::class));
	}
}