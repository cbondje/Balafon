<?php
namespace IGK\Test\Ext\controllers\BootStrap;
use PHPUnit\Framework\TestCase;
class IGKHtmlBootstrapCarouselItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBootstrapCarouselItem::class));
	}
}