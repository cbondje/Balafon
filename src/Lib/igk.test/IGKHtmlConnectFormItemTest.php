<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlConnectFormItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlConnectFormItem::class));
	}
}