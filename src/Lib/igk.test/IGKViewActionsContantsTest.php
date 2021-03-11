<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKViewActionsContantsTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKViewActionsContants::class));
	}
}