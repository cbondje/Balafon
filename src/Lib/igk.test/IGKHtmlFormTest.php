<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlFormTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlForm::class));
	}
}