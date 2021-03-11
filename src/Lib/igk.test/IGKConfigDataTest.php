<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKConfigDataTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKConfigData::class));
	}
}