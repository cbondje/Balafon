<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlUlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlUl::class));
	}
}