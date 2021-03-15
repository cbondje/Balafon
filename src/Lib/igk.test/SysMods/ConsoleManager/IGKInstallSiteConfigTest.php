<?php
namespace IGK\Test\SysMods\ConsoleManager;
use PHPUnit\Framework\TestCase;

require_once(IGK_LIB_DIR."/SysMods/InstallSiteManager/IGKInstallSiteConfig.php");
class IGKInstallSiteConfigTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKInstallSiteConfig::class));
	}
}