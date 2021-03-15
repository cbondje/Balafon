<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlDocThemeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlDocTheme::class));
	}
}