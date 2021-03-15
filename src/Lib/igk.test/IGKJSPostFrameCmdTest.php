<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKJSPostFrameCmdTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKJSPostFrameCmd::class));
	}
}