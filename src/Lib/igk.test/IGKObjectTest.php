<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKObjectTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKObject::class));
	}
}