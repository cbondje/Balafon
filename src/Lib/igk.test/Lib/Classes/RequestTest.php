<?php
namespace IGK\Test\Lib\Classes;
use PHPUnit\Framework\TestCase;
use IGK\System\Http\Request;
class RequestTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(Request::class));
	}
}