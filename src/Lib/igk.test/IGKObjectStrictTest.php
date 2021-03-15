<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKObjectStrictTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKObjectStrict::class));
	}
}