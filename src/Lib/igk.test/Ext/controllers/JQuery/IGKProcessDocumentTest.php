<?php
namespace IGK\Test\Ext\controllers\JQuery;
use PHPUnit\Framework\TestCase;
class IGKProcessDocumentTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKProcessDocument::class));
	}
}