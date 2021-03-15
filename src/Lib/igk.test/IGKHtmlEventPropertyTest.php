<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlEventPropertyTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlEventProperty::class));
	}
}