<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlImgEvalSrcTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlImgEvalSrc::class));
	}
}