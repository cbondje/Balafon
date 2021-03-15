<?php
namespace IGK\Test\Lib\Classes\System\Html\Dom;
use PHPUnit\Framework\TestCase;
class IGKHtmlComponentsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlComponents::class));
	}
}