<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKFrameScriptTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKFrameScript::class));
	}
}