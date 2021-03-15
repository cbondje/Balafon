<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDBSingleValueResultTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDBSingleValueResult::class));
	}
}