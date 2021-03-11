<?php
namespace IGK\Test\Ext\controllerModel\IGKCommunityCtrl;
use PHPUnit\Framework\TestCase;
class IGKHtmlPdfViewNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPdfViewNode::class));
	}
}