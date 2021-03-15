<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKTemplateCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKTemplateCtrl::class));
	}
}