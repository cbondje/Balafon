<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class googleFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/controllerModel/GoogleControllers/google.php"; 
	}
	/** @test */
	public function testigk_google_addfont(){ 
	$this->assertTrue(function_exists('igk_google_addfont'), 'function igk_google_addfont not exists'); 
	}
	/** @test */
	public function testigk_google_apikey(){ 
	$this->assertTrue(function_exists('igk_google_apikey'), 'function igk_google_apikey not exists'); 
	}
	/** @test */
	public function testigk_google_condensedfamilyname(){ 
	$this->assertTrue(function_exists('igk_google_condensedfamilyname'), 'function igk_google_condensedfamilyname not exists'); 
	}
	/** @test */
	public function testigk_google_data_dir(){ 
	$this->assertTrue(function_exists('igk_google_data_dir'), 'function igk_google_data_dir not exists'); 
	}
	/** @test */
	public function testigk_google_filefromfamily(){ 
	$this->assertTrue(function_exists('igk_google_filefromfamily'), 'function igk_google_filefromfamily not exists'); 
	}
	/** @test */
	public function testigk_google_font_api_uri(){ 
	$this->assertTrue(function_exists('igk_google_font_api_uri'), 'function igk_google_font_api_uri not exists'); 
	}
	/** @test */
	public function testigk_google_get_css_fontfile(){ 
	$this->assertTrue(function_exists('igk_google_get_css_fontfile'), 'function igk_google_get_css_fontfile not exists'); 
	}
	/** @test */
	public function testigk_google_get_drive_uri(){ 
	$this->assertTrue(function_exists('igk_google_get_drive_uri'), 'function igk_google_get_drive_uri not exists'); 
	}
	/** @test */
	public function testigk_google_get_font(){ 
	$this->assertTrue(function_exists('igk_google_get_font'), 'function igk_google_get_font not exists'); 
	}
	/** @test */
	public function testigk_google_get_fontdir(){ 
	$this->assertTrue(function_exists('igk_google_get_fontdir'), 'function igk_google_get_fontdir not exists'); 
	}
	/** @test */
	public function testigk_google_installfont(){ 
	$this->assertTrue(function_exists('igk_google_installfont'), 'function igk_google_installfont not exists'); 
	}
	/** @test */
	public function testigk_google_jsmap_acceptrender_callback(){ 
	$this->assertTrue(function_exists('igk_google_jsmap_acceptrender_callback'), 'function igk_google_jsmap_acceptrender_callback not exists'); 
	}
	/** @test */
	public function testigk_google_local_uri_callback(){ 
	$this->assertTrue(function_exists('igk_google_local_uri_callback'), 'function igk_google_local_uri_callback not exists'); 
	}
	/** @test */
	public function testigk_google_regfont(){ 
	$this->assertTrue(function_exists('igk_google_regfont'), 'function igk_google_regfont not exists'); 
	}
	/** @test */
	public function testigk_google_settings(){ 
	$this->assertTrue(function_exists('igk_google_settings'), 'function igk_google_settings not exists'); 
	}
	/** @test */
	public function testigk_google_store_setting(){ 
	$this->assertTrue(function_exists('igk_google_store_setting'), 'function igk_google_store_setting not exists'); 
	}
	/** @test */
	public function testigk_google_zip_fontlist(){ 
	$this->assertTrue(function_exists('igk_google_zip_fontlist'), 'function igk_google_zip_fontlist not exists'); 
	}
	/** @test */
	public function testigk_google_zonectrl(){ 
	$this->assertTrue(function_exists('igk_google_zonectrl'), 'function igk_google_zonectrl not exists'); 
	}
	/** @test */
	public function testigk_google_zoneinit(){ 
	$this->assertTrue(function_exists('igk_google_zoneinit'), 'function igk_google_zoneinit not exists'); 
	}
	/** @test */
	public function testigk_html_demo_googlecirclewaiter(){ 
	$this->assertTrue(function_exists('igk_html_demo_googlecirclewaiter'), 'function igk_html_demo_googlecirclewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_demo_googlejsmaps(){ 
	$this->assertTrue(function_exists('igk_html_demo_googlejsmaps'), 'function igk_html_demo_googlejsmaps not exists'); 
	}
	/** @test */
	public function testigk_html_demo_googlelinewaiter(){ 
	$this->assertTrue(function_exists('igk_html_demo_googlelinewaiter'), 'function igk_html_demo_googlelinewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_demo_googlemapgeo(){ 
	$this->assertTrue(function_exists('igk_html_demo_googlemapgeo'), 'function igk_html_demo_googlemapgeo not exists'); 
	}
	/** @test */
	public function testigk_html_node_googlecirclewaiter(){ 
	$this->assertTrue(function_exists('igk_html_node_googlecirclewaiter'), 'function igk_html_node_googlecirclewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_node_googlefollowusbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_googlefollowusbutton'), 'function igk_html_node_googlefollowusbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_googlejsmaps(){ 
	$this->assertTrue(function_exists('igk_html_node_googlejsmaps'), 'function igk_html_node_googlejsmaps not exists'); 
	}
	/** @test */
	public function testigk_html_node_googlelinewaiter(){ 
	$this->assertTrue(function_exists('igk_html_node_googlelinewaiter'), 'function igk_html_node_googlelinewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_node_googlemapgeo(){ 
	$this->assertTrue(function_exists('igk_html_node_googlemapgeo'), 'function igk_html_node_googlemapgeo not exists'); 
	}
	/** @test */
	public function testigk_html_node_googleoauthlink(){ 
	$this->assertTrue(function_exists('igk_html_node_googleoauthlink'), 'function igk_html_node_googleoauthlink not exists'); 
	}
	/** @test */
	public function testigk_html_node_googleoth2button(){ 
	$this->assertTrue(function_exists('igk_html_node_googleoth2button'), 'function igk_html_node_googleoth2button not exists'); 
	}
}