<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlMsBoxTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlMsBox::class));
	}
}