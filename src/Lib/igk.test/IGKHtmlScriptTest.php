<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlScriptTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlScript::class));
	}
}