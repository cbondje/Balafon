<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKFormatStringTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKFormatString::class));
	}
}