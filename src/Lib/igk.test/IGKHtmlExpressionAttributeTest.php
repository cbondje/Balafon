<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlExpressionAttributeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlExpressionAttribute::class));
	}
}