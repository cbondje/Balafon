<?php
namespace IGK\Test\Ext\winui\Components;
use PHPUnit\Framework\TestCase;
class IGKWinUINavigationBarTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKWinUINavigationBar::class));
	}
}