<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKPageViewTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKPageView::class));
	}
}