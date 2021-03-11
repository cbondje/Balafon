<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKNumberTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKNumber::class));
	}
}