<?php
namespace IGK\Test\Lib\Classes;
use PHPUnit\Framework\TestCase;
class IGKCSVDataAdapterTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCSVDataAdapter::class));
	}
}