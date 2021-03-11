<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlPhpCodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPhpCodeItem::class));
	}
}