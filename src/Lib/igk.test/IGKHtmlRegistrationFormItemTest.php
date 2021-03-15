<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlRegistrationFormItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlRegistrationFormItem::class));
	}
}