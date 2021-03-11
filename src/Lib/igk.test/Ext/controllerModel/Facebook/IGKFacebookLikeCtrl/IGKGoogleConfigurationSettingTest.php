<?php
namespace IGK\Test\Ext\controllerModel\Facebook\IGKFacebookLikeCtrl;
use PHPUnit\Framework\TestCase;
class IGKGoogleConfigurationSettingTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKGoogleConfigurationSetting::class));
	}
}