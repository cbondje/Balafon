<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlScriptLinkTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlScriptLink::class));
	}
}