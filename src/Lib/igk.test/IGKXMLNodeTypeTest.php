<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKXMLNodeTypeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKXMLNodeType::class));
	}
}