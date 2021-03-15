<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlAJXCtrlReplacementNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlAJXCtrlReplacementNode::class));
	}
}