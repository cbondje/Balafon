<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKRectanglefTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKRectanglef::class));
	}
}