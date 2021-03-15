<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKGroupAuthorisationsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKGroupAuthorisations::class));
	}
}