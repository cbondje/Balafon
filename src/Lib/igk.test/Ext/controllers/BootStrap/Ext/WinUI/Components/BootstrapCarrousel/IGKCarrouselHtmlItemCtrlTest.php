<?php
namespace IGK\Test\Ext\controllers\BootStrap\Ext\WinUI\Components\BootstrapCarrousel;
use PHPUnit\Framework\TestCase;
class IGKCarrouselHtmlItemCtrlTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKCarrouselHtmlItemCtrl::class));
	}
}