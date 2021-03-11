<?php
namespace IGK\Test\Ext\tools;
use PHPUnit\Framework\TestCase;
class IGKWinUI_frameboxTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKWinUI_framebox::class));
	}
}