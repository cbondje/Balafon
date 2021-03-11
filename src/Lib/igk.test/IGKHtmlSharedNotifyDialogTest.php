<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlSharedNotifyDialogTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlSharedNotifyDialog::class));
	}
}