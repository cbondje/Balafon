<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKApiTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKApi::class));
	}
}