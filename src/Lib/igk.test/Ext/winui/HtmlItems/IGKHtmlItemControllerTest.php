<?php
namespace IGK\Test\Ext\winui\HtmlItems;
use PHPUnit\Framework\TestCase;
class IGKHtmlItemControllerTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlItemController::class));
	}
}