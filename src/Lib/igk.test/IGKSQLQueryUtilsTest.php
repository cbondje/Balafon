<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSQLQueryUtilsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSQLQueryUtils::class));
	}
}