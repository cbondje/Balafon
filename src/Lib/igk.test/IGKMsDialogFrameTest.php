<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMsDialogFrameTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMsDialogFrame::class));
	}
}