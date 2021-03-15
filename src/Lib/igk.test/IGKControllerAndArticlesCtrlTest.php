<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKControllerAndArticlesCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKControllerAndArticlesCtrl::class));
	}
}