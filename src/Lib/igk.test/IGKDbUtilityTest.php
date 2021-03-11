<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDbUtilityTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDbUtility::class));
	}
}