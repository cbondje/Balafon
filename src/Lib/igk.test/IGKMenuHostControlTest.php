<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMenuHostControlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMenuHostControl::class));
	}
}