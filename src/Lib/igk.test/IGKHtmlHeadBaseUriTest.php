<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlHeadBaseUriTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlHeadBaseUri::class));
	}
}