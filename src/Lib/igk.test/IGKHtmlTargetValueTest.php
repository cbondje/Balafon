<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlTargetValueTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlTargetValue::class));
	}
}