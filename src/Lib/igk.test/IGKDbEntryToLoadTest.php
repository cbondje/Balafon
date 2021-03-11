<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDbEntryToLoadTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDbEntryToLoad::class));
	}
}