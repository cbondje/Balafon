<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKMailAttachementTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKMailAttachement::class));
	}
}