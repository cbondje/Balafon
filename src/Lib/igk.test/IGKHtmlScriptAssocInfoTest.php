<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlScriptAssocInfoTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlScriptAssocInfo::class));
	}
}