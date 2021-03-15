<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKAdditionCtrlInfoTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKAdditionCtrlInfo::class));
	}
}