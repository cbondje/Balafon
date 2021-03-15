<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlPhpEvalCodeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPhpEvalCodeItem::class));
	}
}