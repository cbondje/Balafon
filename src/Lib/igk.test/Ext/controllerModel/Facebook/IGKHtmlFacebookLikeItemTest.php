<?php
namespace IGK\Test\Ext\controllerModel\Facebook;
use PHPUnit\Framework\TestCase;
class IGKHtmlFacebookLikeItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlFacebookLikeItem::class));
	}
}