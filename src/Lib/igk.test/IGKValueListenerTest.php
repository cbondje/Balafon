<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKValueListenerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKValueListener::class));
	}
}