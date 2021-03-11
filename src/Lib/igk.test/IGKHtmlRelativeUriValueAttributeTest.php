<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlRelativeUriValueAttributeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlRelativeUriValueAttribute::class));
	}
}