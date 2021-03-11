<?php
namespace IGK\Test\Ext\winui\Components\HorizontalPane;
use PHPUnit\Framework\TestCase;
class IGKJS_HorizontalPageTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKJS_HorizontalPage::class));
	}
}