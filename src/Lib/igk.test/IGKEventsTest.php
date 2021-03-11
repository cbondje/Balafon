<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKEventsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKEvents::class));
	}
}