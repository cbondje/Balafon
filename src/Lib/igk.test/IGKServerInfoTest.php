<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKServerInfoTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKServerInfo::class));
	}
}