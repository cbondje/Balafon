<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlAJXReplacementNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlAJXReplacementNode::class));
	}
}