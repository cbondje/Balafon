<?php
namespace IGK\Test\Ext\tools;
use PHPUnit\Framework\TestCase;
class IGKInstallSiteToolTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKInstallSiteTool::class));
	}
}