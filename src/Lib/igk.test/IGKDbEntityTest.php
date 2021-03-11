<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKDbEntityTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKDbEntity::class));
	}
}