<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
use IGK\Resources\IGKLangResDictionary;

class IGKLangResDictionaryTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(IGKLangResDictionary::class));
	}
}