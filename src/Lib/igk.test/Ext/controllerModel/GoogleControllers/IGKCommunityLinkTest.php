<?php
namespace IGK\Test\Ext\controllerModel\GoogleControllers;
use PHPUnit\Framework\TestCase;
class IGKCommunityLinkTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCommunityLink::class));
	}
}