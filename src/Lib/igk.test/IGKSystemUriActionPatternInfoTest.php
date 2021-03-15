<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKSystemUriActionPatternInfoTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSystemUriActionPatternInfo::class));
	}
}