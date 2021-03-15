<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCacheCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCacheCtrl::class));
	}
}