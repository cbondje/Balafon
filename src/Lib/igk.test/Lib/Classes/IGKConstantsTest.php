<?php
namespace IGK\Test\Lib\Classes;
use PHPUnit\Framework\TestCase;
class IGKConstantsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKConstants::class));
	}
}