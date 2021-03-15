<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlSessionBlockNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlSessionBlockNode::class));
	}
}