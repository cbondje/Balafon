<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlImgLnkItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlImgLnkItem::class));
	}
}