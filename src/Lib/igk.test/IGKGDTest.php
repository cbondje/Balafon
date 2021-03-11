<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKGDTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKGD::class));
	}
}