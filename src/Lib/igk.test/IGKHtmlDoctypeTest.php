<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlDoctypeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlDoctype::class));
	}
}