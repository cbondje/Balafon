<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDebuggerNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDebuggerNode::class));
	}
}