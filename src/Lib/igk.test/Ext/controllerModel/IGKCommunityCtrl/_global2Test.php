<?php
namespace IGK\Tests\Ext\winui\Components\commentZone;
use PHPUnit\Framework\TestCase;
class _global2Test extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/IGKCommunityCtrl/.global.php"; 
	}
	/** @test */
	public function testigk_community_get_follow_entries(){ 
	$this->assertTrue(function_exists('igk_community_get_follow_entries'), 'function igk_community_get_follow_entries not exists'); 
	}
	/** @test */
	public function testigk_community_init_node_callback(){ 
	$this->assertTrue(function_exists('igk_community_init_node_callback'), 'function igk_community_init_node_callback not exists'); 
	}
	/** @test */
	public function testigk_community_init_sharewith_callback(){ 
	$this->assertTrue(function_exists('igk_community_init_sharewith_callback'), 'function igk_community_init_sharewith_callback not exists'); 
	}
	/** @test */
	public function testigk_html_node_communitynode(){ 
	$this->assertTrue(function_exists('igk_html_node_communitynode'), 'function igk_html_node_communitynode not exists'); 
	}
	/** @test */
	public function testigk_html_node_followusbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_followusbutton'), 'function igk_html_node_followusbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_sharedwithcommunity(){ 
	$this->assertTrue(function_exists('igk_html_node_sharedwithcommunity'), 'function igk_html_node_sharedwithcommunity not exists'); 
	}
}