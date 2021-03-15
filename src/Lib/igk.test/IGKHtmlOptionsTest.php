<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlOptionsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlOptions::class));
	}
}