<?php
namespace IGK\Test\Ext\adapters;
use PHPUnit\Framework\TestCase;
class IGKSQLite3DataAdapterTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSQLite3DataAdapter::class));
	}
}