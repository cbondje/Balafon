<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSessionIdValueTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSessionIdValue::class));
	}
}