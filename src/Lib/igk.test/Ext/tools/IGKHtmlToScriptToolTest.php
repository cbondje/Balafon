<?php
namespace IGK\Test\Ext\tools;
use PHPUnit\Framework\TestCase;
class IGKHtmlToScriptToolTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlToScriptTool::class));
	}
}