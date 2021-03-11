<?php
namespace IGK\Tests\Library;
use PHPUnit\Framework\TestCase;
class _global_twitterFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/Twitter/.global.twitter.php"; 
	}
	/** @test */
	public function testigk_html_node_twitterfollowus(){ 
	$this->assertTrue(function_exists('igk_html_node_twitterfollowus'), 'function igk_html_node_twitterfollowus not exists'); 
	}
	/** @test */
	public function testigk_html_node_twittertimeline(){ 
	$this->assertTrue(function_exists('igk_html_node_twittertimeline'), 'function igk_html_node_twittertimeline not exists'); 
	}
}