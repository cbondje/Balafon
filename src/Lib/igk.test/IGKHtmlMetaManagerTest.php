<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlMetaManagerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlMetaManager::class));
	}
}