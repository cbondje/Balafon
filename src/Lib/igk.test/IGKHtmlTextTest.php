<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlTextTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlText::class));
	}
}