<?php
namespace IGK\Test\Ext\adapters;
use PHPUnit\Framework\TestCase;
class IGKBillingEntryTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKBillingEntry::class));
	}
}