<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKFrameDialogCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKFrameDialogCtrl::class));
	}
}