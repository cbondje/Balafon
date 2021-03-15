<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlResponseTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlResponse::class));
	}
}