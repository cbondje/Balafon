<?php
namespace IGK\Test\Ext\controllerModel\CaddyCtrl;
use PHPUnit\Framework\TestCase;
class IGKCanvaZoneNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCanvaZoneNode::class));
	}
}