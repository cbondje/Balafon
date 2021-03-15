<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDbCacheDataTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDbCacheData::class));
	}
}