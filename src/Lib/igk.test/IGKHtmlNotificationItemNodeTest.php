<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlNotificationItemNodeTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlNotificationItemNode::class));
	}
}