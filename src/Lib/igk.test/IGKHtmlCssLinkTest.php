<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlCssLinkTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCssLink::class));
	}
}