<?php
namespace IGK\Tests\SysMods\Designer;
use PHPUnit\Framework\TestCase;
class _global_facebookTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/Facebook/.global.facebook.php"; 
	}
	/** @test */
	public function testigk_fb_init(){ 
	$this->assertTrue(function_exists('igk_fb_init'), 'function igk_fb_init not exists'); 
	}
	/** @test */
	public function testigk_fb_lang(){ 
	$this->assertTrue(function_exists('igk_fb_lang'), 'function igk_fb_lang not exists'); 
	}
	/** @test */
	public function testigk_fb_libexpression(){ 
	$this->assertTrue(function_exists('igk_fb_libexpression'), 'function igk_fb_libexpression not exists'); 
	}
	/** @test */
	public function testigk_fb_set_appid(){ 
	$this->assertTrue(function_exists('igk_fb_set_appid'), 'function igk_fb_set_appid not exists'); 
	}
	/** @test */
	public function testigk_html_node_facebookcomments(){ 
	$this->assertTrue(function_exists('igk_html_node_facebookcomments'), 'function igk_html_node_facebookcomments not exists'); 
	}
	/** @test */
	public function testigk_html_node_facebookfollowusbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_facebookfollowusbutton'), 'function igk_html_node_facebookfollowusbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_facebooklikebutton(){ 
	$this->assertTrue(function_exists('igk_html_node_facebooklikebutton'), 'function igk_html_node_facebooklikebutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_facebooksharebutton(){ 
	$this->assertTrue(function_exists('igk_html_node_facebooksharebutton'), 'function igk_html_node_facebooksharebutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_facebooktimeline(){ 
	$this->assertTrue(function_exists('igk_html_node_facebooktimeline'), 'function igk_html_node_facebooktimeline not exists'); 
	}
}