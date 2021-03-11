<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKObTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKOb::class));
	}
}