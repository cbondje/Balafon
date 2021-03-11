<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlJSSessionBlockInitItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlJSSessionBlockInitItem::class));
	}
}