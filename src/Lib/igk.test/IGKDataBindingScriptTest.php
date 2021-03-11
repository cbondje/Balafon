<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDataBindingScriptTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDataBindingScript::class));
	}
}