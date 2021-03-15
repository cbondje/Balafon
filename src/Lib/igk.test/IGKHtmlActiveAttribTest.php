<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlActiveAttribTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlActiveAttrib::class));
	}
}