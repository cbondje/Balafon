<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlCallbackNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCallbackNode::class));
	}
}