<?php
namespace IGK\Test\Ext\winui\Components\MailBox;
use PHPUnit\Framework\TestCase;
class IGKPickFolderCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKPickFolderCtrl::class));
	}
}