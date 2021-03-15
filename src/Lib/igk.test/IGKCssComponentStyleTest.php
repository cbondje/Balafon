<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKCssComponentStyleTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCssComponentStyle::class));
	}
}