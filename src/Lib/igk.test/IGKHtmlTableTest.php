<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlTableTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlTable::class));
	}
}