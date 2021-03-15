<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKXmlRenderOptionsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKXmlRenderOptions::class));
	}
}