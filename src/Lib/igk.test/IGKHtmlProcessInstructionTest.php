<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlProcessInstructionTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlProcessInstruction::class));
	}
}