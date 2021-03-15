<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlBodyDebuggerNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBodyDebuggerNode::class));
	}
}