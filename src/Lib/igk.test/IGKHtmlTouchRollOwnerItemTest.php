<?php
namespace IGK\Test;
use PHPUnit\Framework\TestCase;
class IGKHtmlTouchRollOwnerItemTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(\IGKHtmlTouchRollOwnerItem::class));
	}
}