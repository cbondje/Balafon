<?php
namespace IGK\Test\Lib\Classes;
use PHPUnit\Framework\TestCase;
use IGK\System\Html\Dom\Factory;
class FactoryTest extends TestCase{
	function test_check_class(){
		$this->assertTrue(class_exists(Factory::class));
	}
}