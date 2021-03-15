<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKNoDbConnectionTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKNoDbConnection::class));
	}
}