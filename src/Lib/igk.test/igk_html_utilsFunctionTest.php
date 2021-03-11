<?php
namespace IGK\Tests\Ext\winui\Components\HorizontalPane;
use PHPUnit\Framework\TestCase;
class igk_html_utilsFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_html_utils.php"; 
	}
	/** @test */
	public function testigk_html_add_good_uri(){ 
	$this->assertTrue(function_exists('igk_html_add_good_uri'), 'function igk_html_add_good_uri not exists'); 
	}
	/** @test */
	public function testigk_html_add_title(){ 
	$this->assertTrue(function_exists('igk_html_add_title'), 'function igk_html_add_title not exists'); 
	}
	/** @test */
	public function testigk_html_app_page_title(){ 
	$this->assertTrue(function_exists('igk_html_app_page_title'), 'function igk_html_app_page_title not exists'); 
	}
	/** @test */
	public function testigk_html_apptitle(){ 
	$this->assertTrue(function_exists('igk_html_apptitle'), 'function igk_html_apptitle not exists'); 
	}
	/** @test */
	public function testigk_html_array_table(){ 
	$this->assertTrue(function_exists('igk_html_array_table'), 'function igk_html_array_table not exists'); 
	}
	/** @test */
	public function testigk_html_attribvalue(){ 
	$this->assertTrue(function_exists('igk_html_attribvalue'), 'function igk_html_attribvalue not exists'); 
	}
	/** @test */
	public function testigk_html_bind(){ 
	$this->assertTrue(function_exists('igk_html_bind'), 'function igk_html_bind not exists'); 
	}
	/** @test */
	public function testigk_html_build_form(){ 
	$this->assertTrue(function_exists('igk_html_build_form'), 'function igk_html_build_form not exists'); 
	}
	/** @test */
	public function testigk_html_build_form_array_entry(){ 
	$this->assertTrue(function_exists('igk_html_build_form_array_entry'), 'function igk_html_build_form_array_entry not exists'); 
	}
	/** @test */
	public function testigk_html_build_menu(){ 
	$this->assertTrue(function_exists('igk_html_build_menu'), 'function igk_html_build_menu not exists'); 
	}
	/** @test */
	public function testigk_html_build_select(){ 
	$this->assertTrue(function_exists('igk_html_build_select'), 'function igk_html_build_select not exists'); 
	}
	/** @test */
	public function testigk_html_build_select_setting(){ 
	$this->assertTrue(function_exists('igk_html_build_select_setting'), 'function igk_html_build_select_setting not exists'); 
	}
	/** @test */
	public function testigk_html_build_table(){ 
	$this->assertTrue(function_exists('igk_html_build_table'), 'function igk_html_build_table not exists'); 
	}
	/** @test */
	public function testigk_html_buildmenu_nav(){ 
	$this->assertTrue(function_exists('igk_html_buildmenu_nav'), 'function igk_html_buildmenu_nav not exists'); 
	}
	/** @test */
	public function testigk_html_buildmenu_ul(){ 
	$this->assertTrue(function_exists('igk_html_buildmenu_ul'), 'function igk_html_buildmenu_ul not exists'); 
	}
	/** @test */
	public function testigk_html_cookie_warn(){ 
	$this->assertTrue(function_exists('igk_html_cookie_warn'), 'function igk_html_cookie_warn not exists'); 
	}
	/** @test */
	public function testigk_html_create_message(){ 
	$this->assertTrue(function_exists('igk_html_create_message'), 'function igk_html_create_message not exists'); 
	}
	/** @test */
	public function testigk_html_db_build_table_entry(){ 
	$this->assertTrue(function_exists('igk_html_db_build_table_entry'), 'function igk_html_db_build_table_entry not exists'); 
	}
	/** @test */
	public function testigk_html_db_build_table_header(){ 
	$this->assertTrue(function_exists('igk_html_db_build_table_header'), 'function igk_html_db_build_table_header not exists'); 
	}
	/** @test */
	public function testigk_html_db_build_table_row(){ 
	$this->assertTrue(function_exists('igk_html_db_build_table_row'), 'function igk_html_db_build_table_row not exists'); 
	}
	/** @test */
	public function testigk_html_db_select_filter(){ 
	$this->assertTrue(function_exists('igk_html_db_select_filter'), 'function igk_html_db_select_filter not exists'); 
	}
	/** @test */
	public function testigk_html_domaintitle(){ 
	$this->assertTrue(function_exists('igk_html_domaintitle'), 'function igk_html_domaintitle not exists'); 
	}
	/** @test */
	public function testigk_html_dump(){ 
	$this->assertTrue(function_exists('igk_html_dump'), 'function igk_html_dump not exists'); 
	}
	/** @test */
	public function testigk_html_dump_table(){ 
	$this->assertTrue(function_exists('igk_html_dump_table'), 'function igk_html_dump_table not exists'); 
	}
	/** @test */
	public function testigk_html_extract_id(){ 
	$this->assertTrue(function_exists('igk_html_extract_id'), 'function igk_html_extract_id not exists'); 
	}
	/** @test */
	public function testigk_html_form_buildformfield(){ 
	$this->assertTrue(function_exists('igk_html_form_buildformfield'), 'function igk_html_form_buildformfield not exists'); 
	}
	/** @test */
	public function testigk_html_form_cref(){ 
	$this->assertTrue(function_exists('igk_html_form_cref'), 'function igk_html_form_cref not exists'); 
	}
	/** @test */
	public function testigk_html_form_fields(){ 
	$this->assertTrue(function_exists('igk_html_form_fields'), 'function igk_html_form_fields not exists'); 
	}
	/** @test */
	public function testigk_html_form_init(){ 
	$this->assertTrue(function_exists('igk_html_form_init'), 'function igk_html_form_init not exists'); 
	}
	/** @test */
	public function testigk_html_form_initfield(){ 
	$this->assertTrue(function_exists('igk_html_form_initfield'), 'function igk_html_form_initfield not exists'); 
	}
	/** @test */
	public function testigk_html_form_select_data(){ 
	$this->assertTrue(function_exists('igk_html_form_select_data'), 'function igk_html_form_select_data not exists'); 
	}
	/** @test */
	public function testigk_html_get_class_callable(){ 
	$this->assertTrue(function_exists('igk_html_get_class_callable'), 'function igk_html_get_class_callable not exists'); 
	}
	/** @test */
	public function testigk_html_get_method(){ 
	$this->assertTrue(function_exists('igk_html_get_method'), 'function igk_html_get_method not exists'); 
	}
	/** @test */
	public function testigk_html_js_lang(){ 
	$this->assertTrue(function_exists('igk_html_js_lang'), 'function igk_html_js_lang not exists'); 
	}
	/** @test */
	public function testigk_html_load_menu_array(){ 
	$this->assertTrue(function_exists('igk_html_load_menu_array'), 'function igk_html_load_menu_array not exists'); 
	}
	/** @test */
	public function testigk_html_login_form(){ 
	$this->assertTrue(function_exists('igk_html_login_form'), 'function igk_html_login_form not exists'); 
	}
	/** @test */
	public function testigk_html_loremipsum(){ 
	$this->assertTrue(function_exists('igk_html_loremipsum'), 'function igk_html_loremipsum not exists'); 
	}
	/** @test */
	public function testigk_html_match_message(){ 
	$this->assertTrue(function_exists('igk_html_match_message'), 'function igk_html_match_message not exists'); 
	}
	/** @test */
	public function testigk_html_paginate(){ 
	$this->assertTrue(function_exists('igk_html_paginate'), 'function igk_html_paginate not exists'); 
	}
	/** @test */
	public function testigk_html_password(){ 
	$this->assertTrue(function_exists('igk_html_password'), 'function igk_html_password not exists'); 
	}
	/** @test */
	public function testigk_html_pre(){ 
	$this->assertTrue(function_exists('igk_html_pre'), 'function igk_html_pre not exists'); 
	}
	/** @test */
	public function testigk_html_print_r(){ 
	$this->assertTrue(function_exists('igk_html_print_r'), 'function igk_html_print_r not exists'); 
	}
	/** @test */
	public function testigk_html_reg_class(){ 
	$this->assertTrue(function_exists('igk_html_reg_class'), 'function igk_html_reg_class not exists'); 
	}
	/** @test */
	public function testigk_html_reg_method(){ 
	$this->assertTrue(function_exists('igk_html_reg_method'), 'function igk_html_reg_method not exists'); 
	}
	/** @test */
	public function testigk_html_render(){ 
	$this->assertTrue(function_exists('igk_html_render'), 'function igk_html_render not exists'); 
	}
	/** @test */
	public function testigk_html_render_attribs(){ 
	$this->assertTrue(function_exists('igk_html_render_attribs'), 'function igk_html_render_attribs not exists'); 
	}
	/** @test */
	public function testigk_html_render_message(){ 
	$this->assertTrue(function_exists('igk_html_render_message'), 'function igk_html_render_message not exists'); 
	}
	/** @test */
	public function testigk_html_replace_uri(){ 
	$this->assertTrue(function_exists('igk_html_replace_uri'), 'function igk_html_replace_uri not exists'); 
	}
	/** @test */
	public function testigk_html_select_constants(){ 
	$this->assertTrue(function_exists('igk_html_select_constants'), 'function igk_html_select_constants not exists'); 
	}
	/** @test */
	public function testigk_html_select_values(){ 
	$this->assertTrue(function_exists('igk_html_select_values'), 'function igk_html_select_values not exists'); 
	}
	/** @test */
	public function testigk_html_server_info(){ 
	$this->assertTrue(function_exists('igk_html_server_info'), 'function igk_html_server_info not exists'); 
	}
	/** @test */
	public function testigk_html_submit_button(){ 
	$this->assertTrue(function_exists('igk_html_submit_button'), 'function igk_html_submit_button not exists'); 
	}
	/** @test */
	public function testigk_html_subtitle(){ 
	$this->assertTrue(function_exists('igk_html_subtitle'), 'function igk_html_subtitle not exists'); 
	}
	/** @test */
	public function testigk_html_textarea(){ 
	$this->assertTrue(function_exists('igk_html_textarea'), 'function igk_html_textarea not exists'); 
	}
	/** @test */
	public function testigk_html_title(){ 
	$this->assertTrue(function_exists('igk_html_title'), 'function igk_html_title not exists'); 
	}
	/** @test */
	public function testigk_html_toast(){ 
	$this->assertTrue(function_exists('igk_html_toast'), 'function igk_html_toast not exists'); 
	}
	/** @test */
	public function testigk_html_utils_buildformfield(){ 
	$this->assertTrue(function_exists('igk_html_utils_buildformfield'), 'function igk_html_utils_buildformfield not exists'); 
	}
	/** @test */
	public function testigk_html_validate(){ 
	$this->assertTrue(function_exists('igk_html_validate'), 'function igk_html_validate not exists'); 
	}
	/** @test */
	public function testigk_html_validate_error(){ 
	$this->assertTrue(function_exists('igk_html_validate_error'), 'function igk_html_validate_error not exists'); 
	}
	/** @test */
	public function testigk_html_view_node(){ 
	$this->assertTrue(function_exists('igk_html_view_node'), 'function igk_html_view_node not exists'); 
	}
	/** @test */
	public function testigk_html_wdump(){ 
	$this->assertTrue(function_exists('igk_html_wdump'), 'function igk_html_wdump not exists'); 
	}
	/** @test */
	public function testigk_html_wtag(){ 
	$this->assertTrue(function_exists('igk_html_wtag'), 'function igk_html_wtag not exists'); 
	}
}