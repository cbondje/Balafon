<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMediaTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMedia::class));
	}
}