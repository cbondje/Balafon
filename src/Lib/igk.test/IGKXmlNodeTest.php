<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKXmlNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKXmlNode::class));
	}
}