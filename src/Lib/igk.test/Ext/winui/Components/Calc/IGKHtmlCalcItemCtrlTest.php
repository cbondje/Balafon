<?php
namespace IGK\Test\Ext\winui\Components\Calc;
use PHPUnit\Framework\TestCase;
class IGKHtmlCalcItemCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlCalcItemCtrl::class));
	}
}