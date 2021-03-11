<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCssStyleTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCssStyle::class));
	}
}