<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCssParserExceptionTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCssParserException::class));
	}
}