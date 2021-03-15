<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlPopWindowAItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPopWindowAItem::class));
	}
}