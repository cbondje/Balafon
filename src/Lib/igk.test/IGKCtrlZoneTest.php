<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCtrlZoneTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCtrlZone::class));
	}
}