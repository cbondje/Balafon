<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlItemAttributeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlItemAttribute::class));
	}
}