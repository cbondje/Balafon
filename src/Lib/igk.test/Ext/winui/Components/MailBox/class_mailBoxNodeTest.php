<?php
namespace IGK\Tests\Ext\controllerModel\IGKArticleViewerCtrl;
use PHPUnit\Framework\TestCase;
class class_mailBoxNodeTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/winui/Components/MailBox/class.mailBoxNode.php"; 
	}
	/** @test */
	public function testigk_mail_get_mailinfo(){ 
	$this->assertTrue(function_exists('igk_mail_get_mailinfo'), 'function igk_mail_get_mailinfo not exists'); 
	}
}