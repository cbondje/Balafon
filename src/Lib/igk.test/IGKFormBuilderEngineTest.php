<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKFormBuilderEngineTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKFormBuilderEngine::class));
	}
}