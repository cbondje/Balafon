<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
use IGK\System\Configuration\ConfigData;
class ConfigDataTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(ConfigData::class));
	}
}