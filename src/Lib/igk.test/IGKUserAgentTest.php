<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKUserAgentTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKUserAgent::class));
	}
}