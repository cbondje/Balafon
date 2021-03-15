<?php
namespace IGK\Test\Ext\controllerModel\PDFViewerCtrl;
use PHPUnit\Framework\TestCase;
class IGKHtmlObjectNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlObjectNode::class));
	}
}