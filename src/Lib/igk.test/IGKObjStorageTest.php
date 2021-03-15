<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKObjStorageTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKObjStorage::class));
	}
}