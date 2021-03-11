<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlBreadCrumbsItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBreadCrumbsItem::class));
	}
}