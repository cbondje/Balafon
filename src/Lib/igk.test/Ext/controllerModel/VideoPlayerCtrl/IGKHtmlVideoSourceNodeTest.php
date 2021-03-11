<?php
namespace IGK\Test\Ext\controllerModel\VideoPlayerCtrl;
use PHPUnit\Framework\TestCase;
class IGKHtmlVideoSourceNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlVideoSourceNode::class));
	}
}