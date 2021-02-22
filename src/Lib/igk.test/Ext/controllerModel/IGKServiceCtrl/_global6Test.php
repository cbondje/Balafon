<?php
namespace IGK\Tests\Ext\adapters;
use PHPUnit\Framework\TestCase;
class _global6Test extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/IGKServiceCtrl/.global.php"; 
	}
	/** @test */
	public function testigk_srv_bind_cookie(){ 
	$this->assertTrue(function_exists('igk_srv_bind_cookie'), 'function igk_srv_bind_cookie not exists'); 
	}
	/** @test */
	public function testigk_srv_notexposed_attr(){ 
	$this->assertTrue(function_exists('igk_srv_notexposed_attr'), 'function igk_srv_notexposed_attr not exists'); 
	}
	/** @test */
	public function testigk_srv_soap_call(){ 
	$this->assertTrue(function_exists('igk_srv_soap_call'), 'function igk_srv_soap_call not exists'); 
	}
	/** @test */
	public function testigk_srv_soap_lastheader(){ 
	$this->assertTrue(function_exists('igk_srv_soap_lastheader'), 'function igk_srv_soap_lastheader not exists'); 
	}
	/** @test */
	public function testigk_srv_soap_session(){ 
	$this->assertTrue(function_exists('igk_srv_soap_session'), 'function igk_srv_soap_session not exists'); 
	}
}