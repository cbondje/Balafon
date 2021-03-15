<?php
namespace IGK\Test\Ext\controllers\ArticleCtrl;
use PHPUnit\Framework\TestCase;
class IGKHtmlBootStrapGridTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlBootStrapGrid::class));
	}
}