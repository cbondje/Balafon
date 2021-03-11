<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMySQLTimeManagerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMySQLTimeManager::class));
	}
}