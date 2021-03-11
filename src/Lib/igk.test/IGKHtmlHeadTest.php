<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlHeadTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlHead::class));
	}
}