<?php
namespace IGK\Test\SysMods\InstallSiteManager;
use PHPUnit\Framework\TestCase;

require_once(IGK_LIB_DIR."/SysMods/SecurityManager/IGKSecurityCtrl.php");
class IGKSecurityCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKSecurityCtrl::class));
	}
}