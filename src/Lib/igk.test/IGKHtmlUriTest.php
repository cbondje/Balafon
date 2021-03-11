<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlUriTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlUri::class));
	}
}