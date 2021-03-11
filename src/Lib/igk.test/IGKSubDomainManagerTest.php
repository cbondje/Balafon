<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSubDomainManagerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSubDomainManager::class));
	}
}