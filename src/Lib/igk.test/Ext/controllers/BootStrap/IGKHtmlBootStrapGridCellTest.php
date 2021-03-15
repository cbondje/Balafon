<?php
namespace IGK\Test\Ext\controllers\BootStrap;
use PHPUnit\Framework\TestCase;
class IGKHtmlBootStrapGridCellTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBootStrapGridCell::class));
	}
}