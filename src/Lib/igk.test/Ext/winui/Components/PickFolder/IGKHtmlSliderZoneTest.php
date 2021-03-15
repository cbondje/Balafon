<?php
namespace IGK\Test\Ext\winui\Components\PickFolder;
use PHPUnit\Framework\TestCase;
class IGKHtmlSliderZoneTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlSliderZone::class));
	}
}