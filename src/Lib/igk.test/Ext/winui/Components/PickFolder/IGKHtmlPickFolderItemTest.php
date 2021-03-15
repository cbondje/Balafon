<?php
namespace IGK\Test\Ext\winui\Components\PickFolder;
use PHPUnit\Framework\TestCase;
class IGKHtmlPickFolderItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlPickFolderItem::class));
	}
}