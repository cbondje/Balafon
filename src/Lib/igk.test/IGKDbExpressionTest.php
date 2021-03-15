<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDbExpressionTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDbExpression::class));
	}
}