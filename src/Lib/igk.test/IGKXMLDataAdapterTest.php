<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKXMLDataAdapterTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKXMLDataAdapter::class));
	}
}