<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlUsageConditionTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlUsageCondition::class));
	}
}