<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class igk_frameworkTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_framework.php"; 
	}
	/** @test */
	public function testigk_agent_androidversion(){ 
	$this->assertTrue(function_exists('igk_agent_androidversion'), 'function igk_agent_androidversion not exists'); 
	}
	/** @test */
	public function testigk_agent_ieversion(){ 
	$this->assertTrue(function_exists('igk_agent_ieversion'), 'function igk_agent_ieversion not exists'); 
	}
	/** @test */
	public function testigk_agent_isandroid(){ 
	$this->assertTrue(function_exists('igk_agent_isandroid'), 'function igk_agent_isandroid not exists'); 
	}
	/** @test */
	public function testigk_agent_isie(){ 
	$this->assertTrue(function_exists('igk_agent_isie'), 'function igk_agent_isie not exists'); 
	}
	/** @test */
	public function testigk_ajx_close_dialog(){ 
	$this->assertTrue(function_exists('igk_ajx_close_dialog'), 'function igk_ajx_close_dialog not exists'); 
	}
	/** @test */
	public function testigk_ajx_exit(){ 
	$this->assertTrue(function_exists('igk_ajx_exit'), 'function igk_ajx_exit not exists'); 
	}
	/** @test */
	public function testigk_ajx_include_script(){ 
	$this->assertTrue(function_exists('igk_ajx_include_script'), 'function igk_ajx_include_script not exists'); 
	}
	/** @test */
	public function testigk_ajx_link(){ 
	$this->assertTrue(function_exists('igk_ajx_link'), 'function igk_ajx_link not exists'); 
	}
	/** @test */
	public function testigk_ajx_notify_close_dialog(){ 
	$this->assertTrue(function_exists('igk_ajx_notify_close_dialog'), 'function igk_ajx_notify_close_dialog not exists'); 
	}
	/** @test */
	public function testigk_ajx_notify_dialog(){ 
	$this->assertTrue(function_exists('igk_ajx_notify_dialog'), 'function igk_ajx_notify_dialog not exists'); 
	}
	/** @test */
	public function testigk_ajx_notify_dialog_callback(){ 
	$this->assertTrue(function_exists('igk_ajx_notify_dialog_callback'), 'function igk_ajx_notify_dialog_callback not exists'); 
	}
	/** @test */
	public function testigk_ajx_panel_dialog(){ 
	$this->assertTrue(function_exists('igk_ajx_panel_dialog'), 'function igk_ajx_panel_dialog not exists'); 
	}
	/** @test */
	public function testigk_ajx_panel_dialog_close(){ 
	$this->assertTrue(function_exists('igk_ajx_panel_dialog_close'), 'function igk_ajx_panel_dialog_close not exists'); 
	}
	/** @test */
	public function testigk_ajx_redirect(){ 
	$this->assertTrue(function_exists('igk_ajx_redirect'), 'function igk_ajx_redirect not exists'); 
	}
	/** @test */
	public function testigk_ajx_render_response(){ 
	$this->assertTrue(function_exists('igk_ajx_render_response'), 'function igk_ajx_render_response not exists'); 
	}
	/** @test */
	public function testigk_ajx_replace_ctrl_view(){ 
	$this->assertTrue(function_exists('igk_ajx_replace_ctrl_view'), 'function igk_ajx_replace_ctrl_view not exists'); 
	}
	/** @test */
	public function testigk_ajx_replace_node(){ 
	$this->assertTrue(function_exists('igk_ajx_replace_node'), 'function igk_ajx_replace_node not exists'); 
	}
	/** @test */
	public function testigk_ajx_replace_uri(){ 
	$this->assertTrue(function_exists('igk_ajx_replace_uri'), 'function igk_ajx_replace_uri not exists'); 
	}
	/** @test */
	public function testigk_ajx_toast(){ 
	$this->assertTrue(function_exists('igk_ajx_toast'), 'function igk_ajx_toast not exists'); 
	}
	/** @test */
	public function testigk_alert(){ 
	$this->assertTrue(function_exists('igk_alert'), 'function igk_alert not exists'); 
	}
	/** @test */
	public function testigk_android_onrenderdoc(){ 
	$this->assertTrue(function_exists('igk_android_onrenderdoc'), 'function igk_android_onrenderdoc not exists'); 
	}
	/** @test */
	public function testigk_ansi2utf8(){ 
	$this->assertTrue(function_exists('igk_ansi2utf8'), 'function igk_ansi2utf8 not exists'); 
	}
	/** @test */
	public function testigk_apache_module(){ 
	$this->assertTrue(function_exists('igk_apache_module'), 'function igk_apache_module not exists'); 
	}
	/** @test */
	public function testigk_app(){ 
	$this->assertTrue(function_exists('igk_app'), 'function igk_app not exists'); 
	}
	/** @test */
	public function testigk_app_destroy(){ 
	$this->assertTrue(function_exists('igk_app_destroy'), 'function igk_app_destroy not exists'); 
	}
	/** @test */
	public function testigk_app_env_key(){ 
	$this->assertTrue(function_exists('igk_app_env_key'), 'function igk_app_env_key not exists'); 
	}
	/** @test */
	public function testigk_app_store_in_session(){ 
	$this->assertTrue(function_exists('igk_app_store_in_session'), 'function igk_app_store_in_session not exists'); 
	}
	/** @test */
	public function testigk_app_version(){ 
	$this->assertTrue(function_exists('igk_app_version'), 'function igk_app_version not exists'); 
	}
	/** @test */
	public function testigk_array_copy(){ 
	$this->assertTrue(function_exists('igk_array_copy'), 'function igk_array_copy not exists'); 
	}
	/** @test */
	public function testigk_array_createkeyarray(){ 
	$this->assertTrue(function_exists('igk_array_createkeyarray'), 'function igk_array_createkeyarray not exists'); 
	}
	/** @test */
	public function testigk_array_exclude(){ 
	$this->assertTrue(function_exists('igk_array_exclude'), 'function igk_array_exclude not exists'); 
	}
	/** @test */
	public function testigk_array_extract(){ 
	$this->assertTrue(function_exists('igk_array_extract'), 'function igk_array_extract not exists'); 
	}
	/** @test */
	public function testigk_array_fill(){ 
	$this->assertTrue(function_exists('igk_array_fill'), 'function igk_array_fill not exists'); 
	}
	/** @test */
	public function testigk_array_filter(){ 
	$this->assertTrue(function_exists('igk_array_filter'), 'function igk_array_filter not exists'); 
	}
	/** @test */
	public function testigk_array_first(){ 
	$this->assertTrue(function_exists('igk_array_first'), 'function igk_array_first not exists'); 
	}
	/** @test */
	public function testigk_array_is_indexed(){ 
	$this->assertTrue(function_exists('igk_array_is_indexed'), 'function igk_array_is_indexed not exists'); 
	}
	/** @test */
	public function testigk_array_key_value_toggle(){ 
	$this->assertTrue(function_exists('igk_array_key_value_toggle'), 'function igk_array_key_value_toggle not exists'); 
	}
	/** @test */
	public function testigk_array_last(){ 
	$this->assertTrue(function_exists('igk_array_last'), 'function igk_array_last not exists'); 
	}
	/** @test */
	public function testigk_array_object_refkey(){ 
	$this->assertTrue(function_exists('igk_array_object_refkey'), 'function igk_array_object_refkey not exists'); 
	}
	/** @test */
	public function testigk_array_push_keyvalue(){ 
	$this->assertTrue(function_exists('igk_array_push_keyvalue'), 'function igk_array_push_keyvalue not exists'); 
	}
	/** @test */
	public function testigk_array_remove_empty(){ 
	$this->assertTrue(function_exists('igk_array_remove_empty'), 'function igk_array_remove_empty not exists'); 
	}
	/** @test */
	public function testigk_array_sort_bykey(){ 
	$this->assertTrue(function_exists('igk_array_sort_bykey'), 'function igk_array_sort_bykey not exists'); 
	}
	/** @test */
	public function testigk_array_sortbykey(){ 
	$this->assertTrue(function_exists('igk_array_sortbykey'), 'function igk_array_sortbykey not exists'); 
	}
	/** @test */
	public function testigk_array_sortkey(){ 
	$this->assertTrue(function_exists('igk_array_sortkey'), 'function igk_array_sortkey not exists'); 
	}
	/** @test */
	public function testigk_array_to_obj(){ 
	$this->assertTrue(function_exists('igk_array_to_obj'), 'function igk_array_to_obj not exists'); 
	}
	/** @test */
	public function testigk_array_tokeys(){ 
	$this->assertTrue(function_exists('igk_array_tokeys'), 'function igk_array_tokeys not exists'); 
	}
	/** @test */
	public function testigk_array_value_exist(){ 
	$this->assertTrue(function_exists('igk_array_value_exist'), 'function igk_array_value_exist not exists'); 
	}
	/** @test */
	public function testigk_assert_die(){ 
	$this->assertTrue(function_exists('igk_assert_die'), 'function igk_assert_die not exists'); 
	}
	/** @test */
	public function testigk_assoc_keys(){ 
	$this->assertTrue(function_exists('igk_assoc_keys'), 'function igk_assoc_keys not exists'); 
	}
	/** @test */
	public function testigk_base_uri_name(){ 
	$this->assertTrue(function_exists('igk_base_uri_name'), 'function igk_base_uri_name not exists'); 
	}
	/** @test */
	public function testigk_bind_attribute(){ 
	$this->assertTrue(function_exists('igk_bind_attribute'), 'function igk_bind_attribute not exists'); 
	}
	/** @test */
	public function testigk_bind_host_css_style(){ 
	$this->assertTrue(function_exists('igk_bind_host_css_style'), 'function igk_bind_host_css_style not exists'); 
	}
	/** @test */
	public function testigk_bind_host_css_style_file(){ 
	$this->assertTrue(function_exists('igk_bind_host_css_style_file'), 'function igk_bind_host_css_style_file not exists'); 
	}
	/** @test */
	public function testigk_bind_session_id(){ 
	$this->assertTrue(function_exists('igk_bind_session_id'), 'function igk_bind_session_id not exists'); 
	}
	/** @test */
	public function testigk_ca_edit_article(){ 
	$this->assertTrue(function_exists('igk_ca_edit_article'), 'function igk_ca_edit_article not exists'); 
	}
	/** @test */
	public function testigk_cache_expired(){ 
	$this->assertTrue(function_exists('igk_cache_expired'), 'function igk_cache_expired not exists'); 
	}
	/** @test */
	public function testigk_cache_gen_cache(){ 
	$this->assertTrue(function_exists('igk_cache_gen_cache'), 'function igk_cache_gen_cache not exists'); 
	}
	/** @test */
	public function testigk_cache_js_callback(){ 
	$this->assertTrue(function_exists('igk_cache_js_callback'), 'function igk_cache_js_callback not exists'); 
	}
	/** @test */
	public function testigk_call_env_closure(){ 
	$this->assertTrue(function_exists('igk_call_env_closure'), 'function igk_call_env_closure not exists'); 
	}
	/** @test */
	public function testigk_callable_id(){ 
	$this->assertTrue(function_exists('igk_callable_id'), 'function igk_callable_id not exists'); 
	}
	/** @test */
	public function testigk_can_set_ctrlparent(){ 
	$this->assertTrue(function_exists('igk_can_set_ctrlparent'), 'function igk_can_set_ctrlparent not exists'); 
	}
	/** @test */
	public function testigk_cancel_last_ref_number(){ 
	$this->assertTrue(function_exists('igk_cancel_last_ref_number'), 'function igk_cancel_last_ref_number not exists'); 
	}
	/** @test */
	public function testigk_check_ie_version(){ 
	$this->assertTrue(function_exists('igk_check_ie_version'), 'function igk_check_ie_version not exists'); 
	}
	/** @test */
	public function testigk_clear_cache(){ 
	$this->assertTrue(function_exists('igk_clear_cache'), 'function igk_clear_cache not exists'); 
	}
	/** @test */
	public function testigk_clear_config_session(){ 
	$this->assertTrue(function_exists('igk_clear_config_session'), 'function igk_clear_config_session not exists'); 
	}
	/** @test */
	public function testigk_clear_cookie(){ 
	$this->assertTrue(function_exists('igk_clear_cookie'), 'function igk_clear_cookie not exists'); 
	}
	/** @test */
	public function testigk_clear_header_list(){ 
	$this->assertTrue(function_exists('igk_clear_header_list'), 'function igk_clear_header_list not exists'); 
	}
	/** @test */
	public function testigk_clearall_cookie(){ 
	$this->assertTrue(function_exists('igk_clearall_cookie'), 'function igk_clearall_cookie not exists'); 
	}
	/** @test */
	public function testigk_close_session(){ 
	$this->assertTrue(function_exists('igk_close_session'), 'function igk_close_session not exists'); 
	}
	/** @test */
	public function testigk_cmp_array_value(){ 
	$this->assertTrue(function_exists('igk_cmp_array_value'), 'function igk_cmp_array_value not exists'); 
	}
	/** @test */
	public function testigk_cmp_refobj(){ 
	$this->assertTrue(function_exists('igk_cmp_refobj'), 'function igk_cmp_refobj not exists'); 
	}
	/** @test */
	public function testigk_cmp_version(){ 
	$this->assertTrue(function_exists('igk_cmp_version'), 'function igk_cmp_version not exists'); 
	}
	/** @test */
	public function testigk_community_get_followus_service(){ 
	$this->assertTrue(function_exists('igk_community_get_followus_service'), 'function igk_community_get_followus_service not exists'); 
	}
	/** @test */
	public function testigk_community_register_followus_service(){ 
	$this->assertTrue(function_exists('igk_community_register_followus_service'), 'function igk_community_register_followus_service not exists'); 
	}
	/** @test */
	public function testigk_conf_canconfigure(){ 
	$this->assertTrue(function_exists('igk_conf_canconfigure'), 'function igk_conf_canconfigure not exists'); 
	}
	/** @test */
	public function testigk_conf_get(){ 
	$this->assertTrue(function_exists('igk_conf_get'), 'function igk_conf_get not exists'); 
	}
	/** @test */
	public function testigk_conf_get_expression(){ 
	$this->assertTrue(function_exists('igk_conf_get_expression'), 'function igk_conf_get_expression not exists'); 
	}
	/** @test */
	public function testigk_conf_load(){ 
	$this->assertTrue(function_exists('igk_conf_load'), 'function igk_conf_load not exists'); 
	}
	/** @test */
	public function testigk_conf_load_attribs(){ 
	$this->assertTrue(function_exists('igk_conf_load_attribs'), 'function igk_conf_load_attribs not exists'); 
	}
	/** @test */
	public function testigk_conf_load_content(){ 
	$this->assertTrue(function_exists('igk_conf_load_content'), 'function igk_conf_load_content not exists'); 
	}
	/** @test */
	public function testigk_conf_load_file(){ 
	$this->assertTrue(function_exists('igk_conf_load_file'), 'function igk_conf_load_file not exists'); 
	}
	/** @test */
	public function testigk_conf_match(){ 
	$this->assertTrue(function_exists('igk_conf_match'), 'function igk_conf_match not exists'); 
	}
	/** @test */
	public function testigk_conf_set(){ 
	$this->assertTrue(function_exists('igk_conf_set'), 'function igk_conf_set not exists'); 
	}
	/** @test */
	public function testigk_conf_store_value(){ 
	$this->assertTrue(function_exists('igk_conf_store_value'), 'function igk_conf_store_value not exists'); 
	}
	/** @test */
	public function testigk_conf_unset(){ 
	$this->assertTrue(function_exists('igk_conf_unset'), 'function igk_conf_unset not exists'); 
	}
	/** @test */
	public function testigk_config_php_index_content(){ 
	$this->assertTrue(function_exists('igk_config_php_index_content'), 'function igk_config_php_index_content not exists'); 
	}
	/** @test */
	public function testigk_core_dist_jscache(){ 
	$this->assertTrue(function_exists('igk_core_dist_jscache'), 'function igk_core_dist_jscache not exists'); 
	}
	/** @test */
	public function testigk_count(){ 
	$this->assertTrue(function_exists('igk_count'), 'function igk_count not exists'); 
	}
	/** @test */
	public function testigk_create_action_reponse(){ 
	$this->assertTrue(function_exists('igk_create_action_reponse'), 'function igk_create_action_reponse not exists'); 
	}
	/** @test */
	public function testigk_create_adapter_from_classname(){ 
	$this->assertTrue(function_exists('igk_create_adapter_from_classname'), 'function igk_create_adapter_from_classname not exists'); 
	}
	/** @test */
	public function testigk_create_attr_callback(){ 
	$this->assertTrue(function_exists('igk_create_attr_callback'), 'function igk_create_attr_callback not exists'); 
	}
	/** @test */
	public function testigk_create_component_callback(){ 
	$this->assertTrue(function_exists('igk_create_component_callback'), 'function igk_create_component_callback not exists'); 
	}
	/** @test */
	public function testigk_create_cref(){ 
	$this->assertTrue(function_exists('igk_create_cref'), 'function igk_create_cref not exists'); 
	}
	/** @test */
	public function testigk_create_dynamic(){ 
	$this->assertTrue(function_exists('igk_create_dynamic'), 'function igk_create_dynamic not exists'); 
	}
	/** @test */
	public function testigk_create_expression_callback(){ 
	$this->assertTrue(function_exists('igk_create_expression_callback'), 'function igk_create_expression_callback not exists'); 
	}
	/** @test */
	public function testigk_create_file_callback(){ 
	$this->assertTrue(function_exists('igk_create_file_callback'), 'function igk_create_file_callback not exists'); 
	}
	/** @test */
	public function testigk_create_filterobject(){ 
	$this->assertTrue(function_exists('igk_create_filterobject'), 'function igk_create_filterobject not exists'); 
	}
	/** @test */
	public function testigk_create_func_callback(){ 
	$this->assertTrue(function_exists('igk_create_func_callback'), 'function igk_create_func_callback not exists'); 
	}
	/** @test */
	public function testigk_create_guid(){ 
	$this->assertTrue(function_exists('igk_create_guid'), 'function igk_create_guid not exists'); 
	}
	/** @test */
	public function testigk_create_html_component(){ 
	$this->assertTrue(function_exists('igk_create_html_component'), 'function igk_create_html_component not exists'); 
	}
	/** @test */
	public function testigk_create_invoke_callback(){ 
	$this->assertTrue(function_exists('igk_create_invoke_callback'), 'function igk_create_invoke_callback not exists'); 
	}
	/** @test */
	public function testigk_create_module(){ 
	$this->assertTrue(function_exists('igk_create_module'), 'function igk_create_module not exists'); 
	}
	/** @test */
	public function testigk_create_node_callback(){ 
	$this->assertTrue(function_exists('igk_create_node_callback'), 'function igk_create_node_callback not exists'); 
	}
	/** @test */
	public function testigk_create_session_instance(){ 
	$this->assertTrue(function_exists('igk_create_session_instance'), 'function igk_create_session_instance not exists'); 
	}
	/** @test */
	public function testigk_createadditionalconfiginfo(){ 
	$this->assertTrue(function_exists('igk_createadditionalconfiginfo'), 'function igk_createadditionalconfiginfo not exists'); 
	}
	/** @test */
	public function testigk_createarticlenode(){ 
	$this->assertTrue(function_exists('igk_createarticlenode'), 'function igk_createarticlenode not exists'); 
	}
	/** @test */
	public function testigk_createcallbacknode(){ 
	$this->assertTrue(function_exists('igk_createcallbacknode'), 'function igk_createcallbacknode not exists'); 
	}
	/** @test */
	public function testigk_createforminput(){ 
	$this->assertTrue(function_exists('igk_createforminput'), 'function igk_createforminput not exists'); 
	}
	/** @test */
	public function testigk_createloading_context(){ 
	$this->assertTrue(function_exists('igk_createloading_context'), 'function igk_createloading_context not exists'); 
	}
	/** @test */
	public function testigk_createnode(){ 
	$this->assertTrue(function_exists('igk_createnode'), 'function igk_createnode not exists'); 
	}
	/** @test */
	public function testigk_createnode_with_package(){ 
	$this->assertTrue(function_exists('igk_createnode_with_package'), 'function igk_createnode_with_package not exists'); 
	}
	/** @test */
	public function testigk_createnotagnode(){ 
	$this->assertTrue(function_exists('igk_createnotagnode'), 'function igk_createnotagnode not exists'); 
	}
	/** @test */
	public function testigk_createobj(){ 
	$this->assertTrue(function_exists('igk_createobj'), 'function igk_createobj not exists'); 
	}
	/** @test */
	public function testigk_createobj_array(){ 
	$this->assertTrue(function_exists('igk_createobj_array'), 'function igk_createobj_array not exists'); 
	}
	/** @test */
	public function testigk_createobj_filter(){ 
	$this->assertTrue(function_exists('igk_createobj_filter'), 'function igk_createobj_filter not exists'); 
	}
	/** @test */
	public function testigk_createobj_strict(){ 
	$this->assertTrue(function_exists('igk_createobj_strict'), 'function igk_createobj_strict not exists'); 
	}
	/** @test */
	public function testigk_createobjstorage(){ 
	$this->assertTrue(function_exists('igk_createobjstorage'), 'function igk_createobjstorage not exists'); 
	}
	/** @test */
	public function testigk_createpreprocessor(){ 
	$this->assertTrue(function_exists('igk_createpreprocessor'), 'function igk_createpreprocessor not exists'); 
	}
	/** @test */
	public function testigk_createselectinput(){ 
	$this->assertTrue(function_exists('igk_createselectinput'), 'function igk_createselectinput not exists'); 
	}
	/** @test */
	public function testigk_createtextnode(){ 
	$this->assertTrue(function_exists('igk_createtextnode'), 'function igk_createtextnode not exists'); 
	}
	/** @test */
	public function testigk_createxmlcdata(){ 
	$this->assertTrue(function_exists('igk_createxmlcdata'), 'function igk_createxmlcdata not exists'); 
	}
	/** @test */
	public function testigk_createxmlnode(){ 
	$this->assertTrue(function_exists('igk_createxmlnode'), 'function igk_createxmlnode not exists'); 
	}
	/** @test */
	public function testigk_createxmlprocessor(){ 
	$this->assertTrue(function_exists('igk_createxmlprocessor'), 'function igk_createxmlprocessor not exists'); 
	}
	/** @test */
	public function testigk_createxsltnode(){ 
	$this->assertTrue(function_exists('igk_createxsltnode'), 'function igk_createxsltnode not exists'); 
	}
	/** @test */
	public function testigk_css_add_doc_style(){ 
	$this->assertTrue(function_exists('igk_css_add_doc_style'), 'function igk_css_add_doc_style not exists'); 
	}
	/** @test */
	public function testigk_css_add_tempfont(){ 
	$this->assertTrue(function_exists('igk_css_add_tempfont'), 'function igk_css_add_tempfont not exists'); 
	}
	/** @test */
	public function testigk_css_ajx_bind_file(){ 
	$this->assertTrue(function_exists('igk_css_ajx_bind_file'), 'function igk_css_ajx_bind_file not exists'); 
	}
	/** @test */
	public function testigk_css_append(){ 
	$this->assertTrue(function_exists('igk_css_append'), 'function igk_css_append not exists'); 
	}
	/** @test */
	public function testigk_css_balafon_index(){ 
	$this->assertTrue(function_exists('igk_css_balafon_index'), 'function igk_css_balafon_index not exists'); 
	}
	/** @test */
	public function testigk_css_bind_color_request(){ 
	$this->assertTrue(function_exists('igk_css_bind_color_request'), 'function igk_css_bind_color_request not exists'); 
	}
	/** @test */
	public function testigk_css_bind_file(){ 
	$this->assertTrue(function_exists('igk_css_bind_file'), 'function igk_css_bind_file not exists'); 
	}
	/** @test */
	public function testigk_css_bind_sys_global_files(){ 
	$this->assertTrue(function_exists('igk_css_bind_sys_global_files'), 'function igk_css_bind_sys_global_files not exists'); 
	}
	/** @test */
	public function testigk_css_bind_theme_file(){ 
	$this->assertTrue(function_exists('igk_css_bind_theme_file'), 'function igk_css_bind_theme_file not exists'); 
	}
	/** @test */
	public function testigk_css_bind_theme_files(){ 
	$this->assertTrue(function_exists('igk_css_bind_theme_files'), 'function igk_css_bind_theme_files not exists'); 
	}
	/** @test */
	public function testigk_css_bind_wuistyle(){ 
	$this->assertTrue(function_exists('igk_css_bind_wuistyle'), 'function igk_css_bind_wuistyle not exists'); 
	}
	/** @test */
	public function testigk_css_bind_wuistyle_file(){ 
	$this->assertTrue(function_exists('igk_css_bind_wuistyle_file'), 'function igk_css_bind_wuistyle_file not exists'); 
	}
	/** @test */
	public function testigk_css_class_state(){ 
	$this->assertTrue(function_exists('igk_css_class_state'), 'function igk_css_class_state not exists'); 
	}
	/** @test */
	public function testigk_css_design_color_value(){ 
	$this->assertTrue(function_exists('igk_css_design_color_value'), 'function igk_css_design_color_value not exists'); 
	}
	/** @test */
	public function testigk_css_design_mode(){ 
	$this->assertTrue(function_exists('igk_css_design_mode'), 'function igk_css_design_mode not exists'); 
	}
	/** @test */
	public function testigk_css_design_property_value(){ 
	$this->assertTrue(function_exists('igk_css_design_property_value'), 'function igk_css_design_property_value not exists'); 
	}
	/** @test */
	public function testigk_css_doc_get_def(){ 
	$this->assertTrue(function_exists('igk_css_doc_get_def'), 'function igk_css_doc_get_def not exists'); 
	}
	/** @test */
	public function testigk_css_get_cl(){ 
	$this->assertTrue(function_exists('igk_css_get_cl'), 'function igk_css_get_cl not exists'); 
	}
	/** @test */
	public function testigk_css_get_color(){ 
	$this->assertTrue(function_exists('igk_css_get_color'), 'function igk_css_get_color not exists'); 
	}
	/** @test */
	public function testigk_css_get_color_value(){ 
	$this->assertTrue(function_exists('igk_css_get_color_value'), 'function igk_css_get_color_value not exists'); 
	}
	/** @test */
	public function testigk_css_get_doc_style_def(){ 
	$this->assertTrue(function_exists('igk_css_get_doc_style_def'), 'function igk_css_get_doc_style_def not exists'); 
	}
	/** @test */
	public function testigk_css_get_fontdef(){ 
	$this->assertTrue(function_exists('igk_css_get_fontdef'), 'function igk_css_get_fontdef not exists'); 
	}
	/** @test */
	public function testigk_css_get_from(){ 
	$this->assertTrue(function_exists('igk_css_get_from'), 'function igk_css_get_from not exists'); 
	}
	/** @test */
	public function testigk_css_get_map_selector(){ 
	$this->assertTrue(function_exists('igk_css_get_map_selector'), 'function igk_css_get_map_selector not exists'); 
	}
	/** @test */
	public function testigk_css_get_media(){ 
	$this->assertTrue(function_exists('igk_css_get_media'), 'function igk_css_get_media not exists'); 
	}
	/** @test */
	public function testigk_css_get_resolv_style(){ 
	$this->assertTrue(function_exists('igk_css_get_resolv_style'), 'function igk_css_get_resolv_style not exists'); 
	}
	/** @test */
	public function testigk_css_get_resolv_stylei(){ 
	$this->assertTrue(function_exists('igk_css_get_resolv_stylei'), 'function igk_css_get_resolv_stylei not exists'); 
	}
	/** @test */
	public function testigk_css_get_style(){ 
	$this->assertTrue(function_exists('igk_css_get_style'), 'function igk_css_get_style not exists'); 
	}
	/** @test */
	public function testigk_css_get_style_from_map(){ 
	$this->assertTrue(function_exists('igk_css_get_style_from_map'), 'function igk_css_get_style_from_map not exists'); 
	}
	/** @test */
	public function testigk_css_get_sys_media(){ 
	$this->assertTrue(function_exists('igk_css_get_sys_media'), 'function igk_css_get_sys_media not exists'); 
	}
	/** @test */
	public function testigk_css_get_theme_files(){ 
	$this->assertTrue(function_exists('igk_css_get_theme_files'), 'function igk_css_get_theme_files not exists'); 
	}
	/** @test */
	public function testigk_css_getbasedef(){ 
	$this->assertTrue(function_exists('igk_css_getbasedef'), 'function igk_css_getbasedef not exists'); 
	}
	/** @test */
	public function testigk_css_getbg_size(){ 
	$this->assertTrue(function_exists('igk_css_getbg_size'), 'function igk_css_getbg_size not exists'); 
	}
	/** @test */
	public function testigk_css_getbgcl(){ 
	$this->assertTrue(function_exists('igk_css_getbgcl'), 'function igk_css_getbgcl not exists'); 
	}
	/** @test */
	public function testigk_css_getbordercl(){ 
	$this->assertTrue(function_exists('igk_css_getbordercl'), 'function igk_css_getbordercl not exists'); 
	}
	/** @test */
	public function testigk_css_getdefaultstyle(){ 
	$this->assertTrue(function_exists('igk_css_getdefaultstyle'), 'function igk_css_getdefaultstyle not exists'); 
	}
	/** @test */
	public function testigk_css_getfcl(){ 
	$this->assertTrue(function_exists('igk_css_getfcl'), 'function igk_css_getfcl not exists'); 
	}
	/** @test */
	public function testigk_css_getfont(){ 
	$this->assertTrue(function_exists('igk_css_getfont'), 'function igk_css_getfont not exists'); 
	}
	/** @test */
	public function testigk_css_getmedia(){ 
	$this->assertTrue(function_exists('igk_css_getmedia'), 'function igk_css_getmedia not exists'); 
	}
	/** @test */
	public function testigk_css_header_comment(){ 
	$this->assertTrue(function_exists('igk_css_header_comment'), 'function igk_css_header_comment not exists'); 
	}
	/** @test */
	public function testigk_css_ie11(){ 
	$this->assertTrue(function_exists('igk_css_ie11'), 'function igk_css_ie11 not exists'); 
	}
	/** @test */
	public function testigk_css_include_cache(){ 
	$this->assertTrue(function_exists('igk_css_include_cache'), 'function igk_css_include_cache not exists'); 
	}
	/** @test */
	public function testigk_css_init_doc(){ 
	$this->assertTrue(function_exists('igk_css_init_doc'), 'function igk_css_init_doc not exists'); 
	}
	/** @test */
	public function testigk_css_init_style_def_workflow(){ 
	$this->assertTrue(function_exists('igk_css_init_style_def_workflow'), 'function igk_css_init_style_def_workflow not exists'); 
	}
	/** @test */
	public function testigk_css_invoke_color_request(){ 
	$this->assertTrue(function_exists('igk_css_invoke_color_request'), 'function igk_css_invoke_color_request not exists'); 
	}
	/** @test */
	public function testigk_css_is_webknowncolor(){ 
	$this->assertTrue(function_exists('igk_css_is_webknowncolor'), 'function igk_css_is_webknowncolor not exists'); 
	}
	/** @test */
	public function testigk_css_load_theme(){ 
	$this->assertTrue(function_exists('igk_css_load_theme'), 'function igk_css_load_theme not exists'); 
	}
	/** @test */
	public function testigk_css_minify(){ 
	$this->assertTrue(function_exists('igk_css_minify'), 'function igk_css_minify not exists'); 
	}
	/** @test */
	public function testigk_css_ob_get_tempfile(){ 
	$this->assertTrue(function_exists('igk_css_ob_get_tempfile'), 'function igk_css_ob_get_tempfile not exists'); 
	}
	/** @test */
	public function testigk_css_reg_doc(){ 
	$this->assertTrue(function_exists('igk_css_reg_doc'), 'function igk_css_reg_doc not exists'); 
	}
	/** @test */
	public function testigk_css_reg_font_package(){ 
	$this->assertTrue(function_exists('igk_css_reg_font_package'), 'function igk_css_reg_font_package not exists'); 
	}
	/** @test */
	public function testigk_css_reg_global_style_file(){ 
	$this->assertTrue(function_exists('igk_css_reg_global_style_file'), 'function igk_css_reg_global_style_file not exists'); 
	}
	/** @test */
	public function testigk_css_reg_global_tempfile(){ 
	$this->assertTrue(function_exists('igk_css_reg_global_tempfile'), 'function igk_css_reg_global_tempfile not exists'); 
	}
	/** @test */
	public function testigk_css_reg_mediaclass(){ 
	$this->assertTrue(function_exists('igk_css_reg_mediaclass'), 'function igk_css_reg_mediaclass not exists'); 
	}
	/** @test */
	public function testigk_css_reg_reset(){ 
	$this->assertTrue(function_exists('igk_css_reg_reset'), 'function igk_css_reg_reset not exists'); 
	}
	/** @test */
	public function testigk_css_reg_svg_symbol_files(){ 
	$this->assertTrue(function_exists('igk_css_reg_svg_symbol_files'), 'function igk_css_reg_svg_symbol_files not exists'); 
	}
	/** @test */
	public function testigk_css_regclass(){ 
	$this->assertTrue(function_exists('igk_css_regclass'), 'function igk_css_regclass not exists'); 
	}
	/** @test */
	public function testigk_css_regcolor(){ 
	$this->assertTrue(function_exists('igk_css_regcolor'), 'function igk_css_regcolor not exists'); 
	}
	/** @test */
	public function testigk_css_regfont(){ 
	$this->assertTrue(function_exists('igk_css_regfont'), 'function igk_css_regfont not exists'); 
	}
	/** @test */
	public function testigk_css_regglobalfont(){ 
	$this->assertTrue(function_exists('igk_css_regglobalfont'), 'function igk_css_regglobalfont not exists'); 
	}
	/** @test */
	public function testigk_css_regmedia(){ 
	$this->assertTrue(function_exists('igk_css_regmedia'), 'function igk_css_regmedia not exists'); 
	}
	/** @test */
	public function testigk_css_regpic(){ 
	$this->assertTrue(function_exists('igk_css_regpic'), 'function igk_css_regpic not exists'); 
	}
	/** @test */
	public function testigk_css_render_balafon_style(){ 
	$this->assertTrue(function_exists('igk_css_render_balafon_style'), 'function igk_css_render_balafon_style not exists'); 
	}
	/** @test */
	public function testigk_css_render_style(){ 
	$this->assertTrue(function_exists('igk_css_render_style'), 'function igk_css_render_style not exists'); 
	}
	/** @test */
	public function testigk_css_sdk_style_def(){ 
	$this->assertTrue(function_exists('igk_css_sdk_style_def'), 'function igk_css_sdk_style_def not exists'); 
	}
	/** @test */
	public function testigk_css_set_from(){ 
	$this->assertTrue(function_exists('igk_css_set_from'), 'function igk_css_set_from not exists'); 
	}
	/** @test */
	public function testigk_css_store_no_colordef(){ 
	$this->assertTrue(function_exists('igk_css_store_no_colordef'), 'function igk_css_store_no_colordef not exists'); 
	}
	/** @test */
	public function testigk_css_str2class_name(){ 
	$this->assertTrue(function_exists('igk_css_str2class_name'), 'function igk_css_str2class_name not exists'); 
	}
	/** @test */
	public function testigk_css_treat(){ 
	$this->assertTrue(function_exists('igk_css_treat'), 'function igk_css_treat not exists'); 
	}
	/** @test */
	public function testigk_css_treat_bracket(){ 
	$this->assertTrue(function_exists('igk_css_treat_bracket'), 'function igk_css_treat_bracket not exists'); 
	}
	/** @test */
	public function testigk_css_treat_entries(){ 
	$this->assertTrue(function_exists('igk_css_treat_entries'), 'function igk_css_treat_entries not exists'); 
	}
	/** @test */
	public function testigk_css_treat_value(){ 
	$this->assertTrue(function_exists('igk_css_treat_value'), 'function igk_css_treat_value not exists'); 
	}
	/** @test */
	public function testigk_css_treatcolor(){ 
	$this->assertTrue(function_exists('igk_css_treatcolor'), 'function igk_css_treatcolor not exists'); 
	}
	/** @test */
	public function testigk_css_treatstyle(){ 
	$this->assertTrue(function_exists('igk_css_treatstyle'), 'function igk_css_treatstyle not exists'); 
	}
	/** @test */
	public function testigk_css_type(){ 
	$this->assertTrue(function_exists('igk_css_type'), 'function igk_css_type not exists'); 
	}
	/** @test */
	public function testigk_css_type_styles(){ 
	$this->assertTrue(function_exists('igk_css_type_styles'), 'function igk_css_type_styles not exists'); 
	}
	/** @test */
	public function testigk_css_unreg_font_package(){ 
	$this->assertTrue(function_exists('igk_css_unreg_font_package'), 'function igk_css_unreg_font_package not exists'); 
	}
	/** @test */
	public function testigk_css_var_support(){ 
	$this->assertTrue(function_exists('igk_css_var_support'), 'function igk_css_var_support not exists'); 
	}
	/** @test */
	public function testigk_csv_get_value_array(){ 
	$this->assertTrue(function_exists('igk_csv_get_value_array'), 'function igk_csv_get_value_array not exists'); 
	}
	/** @test */
	public function testigk_csv_getvalue(){ 
	$this->assertTrue(function_exists('igk_csv_getvalue'), 'function igk_csv_getvalue not exists'); 
	}
	/** @test */
	public function testigk_csv_sep(){ 
	$this->assertTrue(function_exists('igk_csv_sep'), 'function igk_csv_sep not exists'); 
	}
	/** @test */
	public function testigk_ctrl_auth_key(){ 
	$this->assertTrue(function_exists('igk_ctrl_auth_key'), 'function igk_ctrl_auth_key not exists'); 
	}
	/** @test */
	public function testigk_ctrl_bind_css(){ 
	$this->assertTrue(function_exists('igk_ctrl_bind_css'), 'function igk_ctrl_bind_css not exists'); 
	}
	/** @test */
	public function testigk_ctrl_bind_css_file(){ 
	$this->assertTrue(function_exists('igk_ctrl_bind_css_file'), 'function igk_ctrl_bind_css_file not exists'); 
	}
	/** @test */
	public function testigk_ctrl_change_lang(){ 
	$this->assertTrue(function_exists('igk_ctrl_change_lang'), 'function igk_ctrl_change_lang not exists'); 
	}
	/** @test */
	public function testigk_ctrl_current_view_ctrl(){ 
	$this->assertTrue(function_exists('igk_ctrl_current_view_ctrl'), 'function igk_ctrl_current_view_ctrl not exists'); 
	}
	/** @test */
	public function testigk_ctrl_env_param_key(){ 
	$this->assertTrue(function_exists('igk_ctrl_env_param_key'), 'function igk_ctrl_env_param_key not exists'); 
	}
	/** @test */
	public function testigk_ctrl_env_view_arg_key(){ 
	$this->assertTrue(function_exists('igk_ctrl_env_view_arg_key'), 'function igk_ctrl_env_view_arg_key not exists'); 
	}
	/** @test */
	public function testigk_ctrl_get_app_uri(){ 
	$this->assertTrue(function_exists('igk_ctrl_get_app_uri'), 'function igk_ctrl_get_app_uri not exists'); 
	}
	/** @test */
	public function testigk_ctrl_get_cmd_uri(){ 
	$this->assertTrue(function_exists('igk_ctrl_get_cmd_uri'), 'function igk_ctrl_get_cmd_uri not exists'); 
	}
	/** @test */
	public function testigk_ctrl_get_ctrl_info(){ 
	$this->assertTrue(function_exists('igk_ctrl_get_ctrl_info'), 'function igk_ctrl_get_ctrl_info not exists'); 
	}
	/** @test */
	public function testigk_ctrl_get_setting(){ 
	$this->assertTrue(function_exists('igk_ctrl_get_setting'), 'function igk_ctrl_get_setting not exists'); 
	}
	/** @test */
	public function testigk_ctrl_include_content(){ 
	$this->assertTrue(function_exists('igk_ctrl_include_content'), 'function igk_ctrl_include_content not exists'); 
	}
	/** @test */
	public function testigk_ctrl_include_view_file(){ 
	$this->assertTrue(function_exists('igk_ctrl_include_view_file'), 'function igk_ctrl_include_view_file not exists'); 
	}
	/** @test */
	public function testigk_ctrl_init_css(){ 
	$this->assertTrue(function_exists('igk_ctrl_init_css'), 'function igk_ctrl_init_css not exists'); 
	}
	/** @test */
	public function testigk_ctrl_is_current_subdomain(){ 
	$this->assertTrue(function_exists('igk_ctrl_is_current_subdomain'), 'function igk_ctrl_is_current_subdomain not exists'); 
	}
	/** @test */
	public function testigk_ctrl_is_reservedname(){ 
	$this->assertTrue(function_exists('igk_ctrl_is_reservedname'), 'function igk_ctrl_is_reservedname not exists'); 
	}
	/** @test */
	public function testigk_ctrl_isactive(){ 
	$this->assertTrue(function_exists('igk_ctrl_isactive'), 'function igk_ctrl_isactive not exists'); 
	}
	/** @test */
	public function testigk_ctrl_loadmenu(){ 
	$this->assertTrue(function_exists('igk_ctrl_loadmenu'), 'function igk_ctrl_loadmenu not exists'); 
	}
	/** @test */
	public function testigk_ctrl_notify_key(){ 
	$this->assertTrue(function_exists('igk_ctrl_notify_key'), 'function igk_ctrl_notify_key not exists'); 
	}
	/** @test */
	public function testigk_ctrl_private_folder(){ 
	$this->assertTrue(function_exists('igk_ctrl_private_folder'), 'function igk_ctrl_private_folder not exists'); 
	}
	/** @test */
	public function testigk_ctrl_render_doc(){ 
	$this->assertTrue(function_exists('igk_ctrl_render_doc'), 'function igk_ctrl_render_doc not exists'); 
	}
	/** @test */
	public function testigk_ctrl_reset_params(){ 
	$this->assertTrue(function_exists('igk_ctrl_reset_params'), 'function igk_ctrl_reset_params not exists'); 
	}
	/** @test */
	public function testigk_ctrl_view(){ 
	$this->assertTrue(function_exists('igk_ctrl_view'), 'function igk_ctrl_view not exists'); 
	}
	/** @test */
	public function testigk_ctrl_view_load_pattern(){ 
	$this->assertTrue(function_exists('igk_ctrl_view_load_pattern'), 'function igk_ctrl_view_load_pattern not exists'); 
	}
	/** @test */
	public function testigk_ctrl_viewparent(){ 
	$this->assertTrue(function_exists('igk_ctrl_viewparent'), 'function igk_ctrl_viewparent not exists'); 
	}
	/** @test */
	public function testigk_ctrl_zone(){ 
	$this->assertTrue(function_exists('igk_ctrl_zone'), 'function igk_ctrl_zone not exists'); 
	}
	/** @test */
	public function testigk_ctrl_zone_init(){ 
	$this->assertTrue(function_exists('igk_ctrl_zone_init'), 'function igk_ctrl_zone_init not exists'); 
	}
	/** @test */
	public function testigk_curl_get_info(){ 
	$this->assertTrue(function_exists('igk_curl_get_info'), 'function igk_curl_get_info not exists'); 
	}
	/** @test */
	public function testigk_curl_info(){ 
	$this->assertTrue(function_exists('igk_curl_info'), 'function igk_curl_info not exists'); 
	}
	/** @test */
	public function testigk_curl_lasterror(){ 
	$this->assertTrue(function_exists('igk_curl_lasterror'), 'function igk_curl_lasterror not exists'); 
	}
	/** @test */
	public function testigk_curl_post_uri(){ 
	$this->assertTrue(function_exists('igk_curl_post_uri'), 'function igk_curl_post_uri not exists'); 
	}
	/** @test */
	public function testigk_curl_set_info(){ 
	$this->assertTrue(function_exists('igk_curl_set_info'), 'function igk_curl_set_info not exists'); 
	}
	/** @test */
	public function testigk_curl_status(){ 
	$this->assertTrue(function_exists('igk_curl_status'), 'function igk_curl_status not exists'); 
	}
	/** @test */
	public function testigk_currency_getamount(){ 
	$this->assertTrue(function_exists('igk_currency_getamount'), 'function igk_currency_getamount not exists'); 
	}
	/** @test */
	public function testigk_current_context(){ 
	$this->assertTrue(function_exists('igk_current_context'), 'function igk_current_context not exists'); 
	}
	/** @test */
	public function testigk_data_addcron(){ 
	$this->assertTrue(function_exists('igk_data_addcron'), 'function igk_data_addcron not exists'); 
	}
	/** @test */
	public function testigk_data_get_cron_file(){ 
	$this->assertTrue(function_exists('igk_data_get_cron_file'), 'function igk_data_get_cron_file not exists'); 
	}
	/** @test */
	public function testigk_datatypes_getinfo(){ 
	$this->assertTrue(function_exists('igk_datatypes_getinfo'), 'function igk_datatypes_getinfo not exists'); 
	}
	/** @test */
	public function testigk_date_compare(){ 
	$this->assertTrue(function_exists('igk_date_compare'), 'function igk_date_compare not exists'); 
	}
	/** @test */
	public function testigk_date_last_date(){ 
	$this->assertTrue(function_exists('igk_date_last_date'), 'function igk_date_last_date not exists'); 
	}
	/** @test */
	public function testigk_date_now(){ 
	$this->assertTrue(function_exists('igk_date_now'), 'function igk_date_now not exists'); 
	}
	/** @test */
	public function testigk_db_backup_ctrl(){ 
	$this->assertTrue(function_exists('igk_db_backup_ctrl'), 'function igk_db_backup_ctrl not exists'); 
	}
	/** @test */
	public function testigk_db_clean_text(){ 
	$this->assertTrue(function_exists('igk_db_clean_text'), 'function igk_db_clean_text not exists'); 
	}
	/** @test */
	public function testigk_db_clear_table(){ 
	$this->assertTrue(function_exists('igk_db_clear_table'), 'function igk_db_clear_table not exists'); 
	}
	/** @test */
	public function testigk_db_close(){ 
	$this->assertTrue(function_exists('igk_db_close'), 'function igk_db_close not exists'); 
	}
	/** @test */
	public function testigk_db_close_adapter(){ 
	$this->assertTrue(function_exists('igk_db_close_adapter'), 'function igk_db_close_adapter not exists'); 
	}
	/** @test */
	public function testigk_db_close_die(){ 
	$this->assertTrue(function_exists('igk_db_close_die'), 'function igk_db_close_die not exists'); 
	}
	/** @test */
	public function testigk_db_cmp_time(){ 
	$this->assertTrue(function_exists('igk_db_cmp_time'), 'function igk_db_cmp_time not exists'); 
	}
	/** @test */
	public function testigk_db_column_info(){ 
	$this->assertTrue(function_exists('igk_db_column_info'), 'function igk_db_column_info not exists'); 
	}
	/** @test */
	public function testigk_db_copy_row(){ 
	$this->assertTrue(function_exists('igk_db_copy_row'), 'function igk_db_copy_row not exists'); 
	}
	/** @test */
	public function testigk_db_create_data(){ 
	$this->assertTrue(function_exists('igk_db_create_data'), 'function igk_db_create_data not exists'); 
	}
	/** @test */
	public function testigk_db_create_datafrominfo(){ 
	$this->assertTrue(function_exists('igk_db_create_datafrominfo'), 'function igk_db_create_datafrominfo not exists'); 
	}
	/** @test */
	public function testigk_db_create_emptyresult(){ 
	$this->assertTrue(function_exists('igk_db_create_emptyresult'), 'function igk_db_create_emptyresult not exists'); 
	}
	/** @test */
	public function testigk_db_create_expression(){ 
	$this->assertTrue(function_exists('igk_db_create_expression'), 'function igk_db_create_expression not exists'); 
	}
	/** @test */
	public function testigk_db_create_identifier(){ 
	$this->assertTrue(function_exists('igk_db_create_identifier'), 'function igk_db_create_identifier not exists'); 
	}
	/** @test */
	public function testigk_db_create_obj_from_infokey(){ 
	$this->assertTrue(function_exists('igk_db_create_obj_from_infokey'), 'function igk_db_create_obj_from_infokey not exists'); 
	}
	/** @test */
	public function testigk_db_create_opt_obj(){ 
	$this->assertTrue(function_exists('igk_db_create_opt_obj'), 'function igk_db_create_opt_obj not exists'); 
	}
	/** @test */
	public function testigk_db_create_ref(){ 
	$this->assertTrue(function_exists('igk_db_create_ref'), 'function igk_db_create_ref not exists'); 
	}
	/** @test */
	public function testigk_db_create_row(){ 
	$this->assertTrue(function_exists('igk_db_create_row'), 'function igk_db_create_row not exists'); 
	}
	/** @test */
	public function testigk_db_create_row_obj(){ 
	$this->assertTrue(function_exists('igk_db_create_row_obj'), 'function igk_db_create_row_obj not exists'); 
	}
	/** @test */
	public function testigk_db_ctrl_datatable_info_key(){ 
	$this->assertTrue(function_exists('igk_db_ctrl_datatable_info_key'), 'function igk_db_ctrl_datatable_info_key not exists'); 
	}
	/** @test */
	public function testigk_db_current_data_adapter(){ 
	$this->assertTrue(function_exists('igk_db_current_data_adapter'), 'function igk_db_current_data_adapter not exists'); 
	}
	/** @test */
	public function testigk_db_current_data_driver(){ 
	$this->assertTrue(function_exists('igk_db_current_data_driver'), 'function igk_db_current_data_driver not exists'); 
	}
	/** @test */
	public function testigk_db_data_is_present(){ 
	$this->assertTrue(function_exists('igk_db_data_is_present'), 'function igk_db_data_is_present not exists'); 
	}
	/** @test */
	public function testigk_db_delete(){ 
	$this->assertTrue(function_exists('igk_db_delete'), 'function igk_db_delete not exists'); 
	}
	/** @test */
	public function testigk_db_delete_cookie(){ 
	$this->assertTrue(function_exists('igk_db_delete_cookie'), 'function igk_db_delete_cookie not exists'); 
	}
	/** @test */
	public function testigk_db_deletec(){ 
	$this->assertTrue(function_exists('igk_db_deletec'), 'function igk_db_deletec not exists'); 
	}
	/** @test */
	public function testigk_db_drop_ctrl_db(){ 
	$this->assertTrue(function_exists('igk_db_drop_ctrl_db'), 'function igk_db_drop_ctrl_db not exists'); 
	}
	/** @test */
	public function testigk_db_drop_identifier(){ 
	$this->assertTrue(function_exists('igk_db_drop_identifier'), 'function igk_db_drop_identifier not exists'); 
	}
	/** @test */
	public function testigk_db_drop_table(){ 
	$this->assertTrue(function_exists('igk_db_drop_table'), 'function igk_db_drop_table not exists'); 
	}
	/** @test */
	public function testigk_db_dump_result(){ 
	$this->assertTrue(function_exists('igk_db_dump_result'), 'function igk_db_dump_result not exists'); 
	}
	/** @test */
	public function testigk_db_error(){ 
	$this->assertTrue(function_exists('igk_db_error'), 'function igk_db_error not exists'); 
	}
	/** @test */
	public function testigk_db_field(){ 
	$this->assertTrue(function_exists('igk_db_field'), 'function igk_db_field not exists'); 
	}
	/** @test */
	public function testigk_db_form_data(){ 
	$this->assertTrue(function_exists('igk_db_form_data'), 'function igk_db_form_data not exists'); 
	}
	/** @test */
	public function testigk_db_get_config(){ 
	$this->assertTrue(function_exists('igk_db_get_config'), 'function igk_db_get_config not exists'); 
	}
	/** @test */
	public function testigk_db_get_configp(){ 
	$this->assertTrue(function_exists('igk_db_get_configp'), 'function igk_db_get_configp not exists'); 
	}
	/** @test */
	public function testigk_db_get_configup(){ 
	$this->assertTrue(function_exists('igk_db_get_configup'), 'function igk_db_get_configup not exists'); 
	}
	/** @test */
	public function testigk_db_get_ctrl_tables(){ 
	$this->assertTrue(function_exists('igk_db_get_ctrl_tables'), 'function igk_db_get_ctrl_tables not exists'); 
	}
	/** @test */
	public function testigk_db_get_datatableowner(){ 
	$this->assertTrue(function_exists('igk_db_get_datatableowner'), 'function igk_db_get_datatableowner not exists'); 
	}
	/** @test */
	public function testigk_db_get_entries(){ 
	$this->assertTrue(function_exists('igk_db_get_entries'), 'function igk_db_get_entries not exists'); 
	}
	/** @test */
	public function testigk_db_get_error(){ 
	$this->assertTrue(function_exists('igk_db_get_error'), 'function igk_db_get_error not exists'); 
	}
	/** @test */
	public function testigk_db_get_schema_filename(){ 
	$this->assertTrue(function_exists('igk_db_get_schema_filename'), 'function igk_db_get_schema_filename not exists'); 
	}
	/** @test */
	public function testigk_db_get_sync_row_data(){ 
	$this->assertTrue(function_exists('igk_db_get_sync_row_data'), 'function igk_db_get_sync_row_data not exists'); 
	}
	/** @test */
	public function testigk_db_get_table_def(){ 
	$this->assertTrue(function_exists('igk_db_get_table_def'), 'function igk_db_get_table_def not exists'); 
	}
	/** @test */
	public function testigk_db_get_table_info(){ 
	$this->assertTrue(function_exists('igk_db_get_table_info'), 'function igk_db_get_table_info not exists'); 
	}
	/** @test */
	public function testigk_db_get_table_name(){ 
	$this->assertTrue(function_exists('igk_db_get_table_name'), 'function igk_db_get_table_name not exists'); 
	}
	/** @test */
	public function testigk_db_get_table_with_column(){ 
	$this->assertTrue(function_exists('igk_db_get_table_with_column'), 'function igk_db_get_table_with_column not exists'); 
	}
	/** @test */
	public function testigk_db_getdatatableinfokey(){ 
	$this->assertTrue(function_exists('igk_db_getdatatableinfokey'), 'function igk_db_getdatatableinfokey not exists'); 
	}
	/** @test */
	public function testigk_db_getdefaultv(){ 
	$this->assertTrue(function_exists('igk_db_getdefaultv'), 'function igk_db_getdefaultv not exists'); 
	}
	/** @test */
	public function testigk_db_getid(){ 
	$this->assertTrue(function_exists('igk_db_getid'), 'function igk_db_getid not exists'); 
	}
	/** @test */
	public function testigk_db_getobj(){ 
	$this->assertTrue(function_exists('igk_db_getobj'), 'function igk_db_getobj not exists'); 
	}
	/** @test */
	public function testigk_db_getsync_key(){ 
	$this->assertTrue(function_exists('igk_db_getsync_key'), 'function igk_db_getsync_key not exists'); 
	}
	/** @test */
	public function testigk_db_grant(){ 
	$this->assertTrue(function_exists('igk_db_grant'), 'function igk_db_grant not exists'); 
	}
	/** @test */
	public function testigk_db_identifier_array(){ 
	$this->assertTrue(function_exists('igk_db_identifier_array'), 'function igk_db_identifier_array not exists'); 
	}
	/** @test */
	public function testigk_db_init_auths(){ 
	$this->assertTrue(function_exists('igk_db_init_auths'), 'function igk_db_init_auths not exists'); 
	}
	/** @test */
	public function testigk_db_init_dataschema(){ 
	$this->assertTrue(function_exists('igk_db_init_dataschema'), 'function igk_db_init_dataschema not exists'); 
	}
	/** @test */
	public function testigk_db_init_db(){ 
	$this->assertTrue(function_exists('igk_db_init_db'), 'function igk_db_init_db not exists'); 
	}
	/** @test */
	public function testigk_db_init_from_data_schema(){ 
	$this->assertTrue(function_exists('igk_db_init_from_data_schema'), 'function igk_db_init_from_data_schema not exists'); 
	}
	/** @test */
	public function testigk_db_init_from_dataschema(){ 
	$this->assertTrue(function_exists('igk_db_init_from_dataschema'), 'function igk_db_init_from_dataschema not exists'); 
	}
	/** @test */
	public function testigk_db_init_groups(){ 
	$this->assertTrue(function_exists('igk_db_init_groups'), 'function igk_db_init_groups not exists'); 
	}
	/** @test */
	public function testigk_db_insert(){ 
	$this->assertTrue(function_exists('igk_db_insert'), 'function igk_db_insert not exists'); 
	}
	/** @test */
	public function testigk_db_insert_if_not_exists(){ 
	$this->assertTrue(function_exists('igk_db_insert_if_not_exists'), 'function igk_db_insert_if_not_exists not exists'); 
	}
	/** @test */
	public function testigk_db_insertc(){ 
	$this->assertTrue(function_exists('igk_db_insertc'), 'function igk_db_insertc not exists'); 
	}
	/** @test */
	public function testigk_db_inserts(){ 
	$this->assertTrue(function_exists('igk_db_inserts'), 'function igk_db_inserts not exists'); 
	}
	/** @test */
	public function testigk_db_is_typelength(){ 
	$this->assertTrue(function_exists('igk_db_is_typelength'), 'function igk_db_is_typelength not exists'); 
	}
	/** @test */
	public function testigk_db_is_user_authorized(){ 
	$this->assertTrue(function_exists('igk_db_is_user_authorized'), 'function igk_db_is_user_authorized not exists'); 
	}
	/** @test */
	public function testigk_db_last_id(){ 
	$this->assertTrue(function_exists('igk_db_last_id'), 'function igk_db_last_id not exists'); 
	}
	/** @test */
	public function testigk_db_load_data_and_entries_schemas(){ 
	$this->assertTrue(function_exists('igk_db_load_data_and_entries_schemas'), 'function igk_db_load_data_and_entries_schemas not exists'); 
	}
	/** @test */
	public function testigk_db_load_data_and_entries_schemas_node(){ 
	$this->assertTrue(function_exists('igk_db_load_data_and_entries_schemas_node'), 'function igk_db_load_data_and_entries_schemas_node not exists'); 
	}
	/** @test */
	public function testigk_db_load_data_entries_schemas(){ 
	$this->assertTrue(function_exists('igk_db_load_data_entries_schemas'), 'function igk_db_load_data_entries_schemas not exists'); 
	}
	/** @test */
	public function testigk_db_load_data_schema_array(){ 
	$this->assertTrue(function_exists('igk_db_load_data_schema_array'), 'function igk_db_load_data_schema_array not exists'); 
	}
	/** @test */
	public function testigk_db_load_data_schemas(){ 
	$this->assertTrue(function_exists('igk_db_load_data_schemas'), 'function igk_db_load_data_schemas not exists'); 
	}
	/** @test */
	public function testigk_db_load_entries(){ 
	$this->assertTrue(function_exists('igk_db_load_entries'), 'function igk_db_load_entries not exists'); 
	}
	/** @test */
	public function testigk_db_load_entries_array(){ 
	$this->assertTrue(function_exists('igk_db_load_entries_array'), 'function igk_db_load_entries_array not exists'); 
	}
	/** @test */
	public function testigk_db_load_row(){ 
	$this->assertTrue(function_exists('igk_db_load_row'), 'function igk_db_load_row not exists'); 
	}
	/** @test */
	public function testigk_db_load_to_node(){ 
	$this->assertTrue(function_exists('igk_db_load_to_node'), 'function igk_db_load_to_node not exists'); 
	}
	/** @test */
	public function testigk_db_name_id(){ 
	$this->assertTrue(function_exists('igk_db_name_id'), 'function igk_db_name_id not exists'); 
	}
	/** @test */
	public function testigk_db_no_exception(){ 
	$this->assertTrue(function_exists('igk_db_no_exception'), 'function igk_db_no_exception not exists'); 
	}
	/** @test */
	public function testigk_db_objentries(){ 
	$this->assertTrue(function_exists('igk_db_objentries'), 'function igk_db_objentries not exists'); 
	}
	/** @test */
	public function testigk_db_prefilter_for_select(){ 
	$this->assertTrue(function_exists('igk_db_prefilter_for_select'), 'function igk_db_prefilter_for_select not exists'); 
	}
	/** @test */
	public function testigk_db_ref_keyinfo(){ 
	$this->assertTrue(function_exists('igk_db_ref_keyinfo'), 'function igk_db_ref_keyinfo not exists'); 
	}
	/** @test */
	public function testigk_db_ref_update(){ 
	$this->assertTrue(function_exists('igk_db_ref_update'), 'function igk_db_ref_update not exists'); 
	}
	/** @test */
	public function testigk_db_reg_sys_ctrl(){ 
	$this->assertTrue(function_exists('igk_db_reg_sys_ctrl'), 'function igk_db_reg_sys_ctrl not exists'); 
	}
	/** @test */
	public function testigk_db_register_auth(){ 
	$this->assertTrue(function_exists('igk_db_register_auth'), 'function igk_db_register_auth not exists'); 
	}
	/** @test */
	public function testigk_db_register_group(){ 
	$this->assertTrue(function_exists('igk_db_register_group'), 'function igk_db_register_group not exists'); 
	}
	/** @test */
	public function testigk_db_reload_index(){ 
	$this->assertTrue(function_exists('igk_db_reload_index'), 'function igk_db_reload_index not exists'); 
	}
	/** @test */
	public function testigk_db_resolv_app_uri(){ 
	$this->assertTrue(function_exists('igk_db_resolv_app_uri'), 'function igk_db_resolv_app_uri not exists'); 
	}
	/** @test */
	public function testigk_db_restore_backup_data(){ 
	$this->assertTrue(function_exists('igk_db_restore_backup_data'), 'function igk_db_restore_backup_data not exists'); 
	}
	/** @test */
	public function testigk_db_restore_backup_data_adapter(){ 
	$this->assertTrue(function_exists('igk_db_restore_backup_data_adapter'), 'function igk_db_restore_backup_data_adapter not exists'); 
	}
	/** @test */
	public function testigk_db_select(){ 
	$this->assertTrue(function_exists('igk_db_select'), 'function igk_db_select not exists'); 
	}
	/** @test */
	public function testigk_db_select_all(){ 
	$this->assertTrue(function_exists('igk_db_select_all'), 'function igk_db_select_all not exists'); 
	}
	/** @test */
	public function testigk_db_select_wherec(){ 
	$this->assertTrue(function_exists('igk_db_select_wherec'), 'function igk_db_select_wherec not exists'); 
	}
	/** @test */
	public function testigk_db_send_query(){ 
	$this->assertTrue(function_exists('igk_db_send_query'), 'function igk_db_send_query not exists'); 
	}
	/** @test */
	public function testigk_db_set_configup(){ 
	$this->assertTrue(function_exists('igk_db_set_configup'), 'function igk_db_set_configup not exists'); 
	}
	/** @test */
	public function testigk_db_store_cookie(){ 
	$this->assertTrue(function_exists('igk_db_store_cookie'), 'function igk_db_store_cookie not exists'); 
	}
	/** @test */
	public function testigk_db_sync_key_eval(){ 
	$this->assertTrue(function_exists('igk_db_sync_key_eval'), 'function igk_db_sync_key_eval not exists'); 
	}
	/** @test */
	public function testigk_db_sync_push_data(){ 
	$this->assertTrue(function_exists('igk_db_sync_push_data'), 'function igk_db_sync_push_data not exists'); 
	}
	/** @test */
	public function testigk_db_sync_todb(){ 
	$this->assertTrue(function_exists('igk_db_sync_todb'), 'function igk_db_sync_todb not exists'); 
	}
	/** @test */
	public function testigk_db_sys_ctrl(){ 
	$this->assertTrue(function_exists('igk_db_sys_ctrl'), 'function igk_db_sys_ctrl not exists'); 
	}
	/** @test */
	public function testigk_db_table_count_where(){ 
	$this->assertTrue(function_exists('igk_db_table_count_where'), 'function igk_db_table_count_where not exists'); 
	}
	/** @test */
	public function testigk_db_table_exists(){ 
	$this->assertTrue(function_exists('igk_db_table_exists'), 'function igk_db_table_exists not exists'); 
	}
	/** @test */
	public function testigk_db_table_filter_data(){ 
	$this->assertTrue(function_exists('igk_db_table_filter_data'), 'function igk_db_table_filter_data not exists'); 
	}
	/** @test */
	public function testigk_db_table_select_relationnal_where(){ 
	$this->assertTrue(function_exists('igk_db_table_select_relationnal_where'), 'function igk_db_table_select_relationnal_where not exists'); 
	}
	/** @test */
	public function testigk_db_table_select_row(){ 
	$this->assertTrue(function_exists('igk_db_table_select_row'), 'function igk_db_table_select_row not exists'); 
	}
	/** @test */
	public function testigk_db_table_select_where(){ 
	$this->assertTrue(function_exists('igk_db_table_select_where'), 'function igk_db_table_select_where not exists'); 
	}
	/** @test */
	public function testigk_db_table_xmlview_response(){ 
	$this->assertTrue(function_exists('igk_db_table_xmlview_response'), 'function igk_db_table_xmlview_response not exists'); 
	}
	/** @test */
	public function testigk_db_unreg_sys_ctrl(){ 
	$this->assertTrue(function_exists('igk_db_unreg_sys_ctrl'), 'function igk_db_unreg_sys_ctrl not exists'); 
	}
	/** @test */
	public function testigk_db_update(){ 
	$this->assertTrue(function_exists('igk_db_update'), 'function igk_db_update not exists'); 
	}
	/** @test */
	public function testigk_db_update_cookie(){ 
	$this->assertTrue(function_exists('igk_db_update_cookie'), 'function igk_db_update_cookie not exists'); 
	}
	/** @test */
	public function testigk_db_update_ctrl_db(){ 
	$this->assertTrue(function_exists('igk_db_update_ctrl_db'), 'function igk_db_update_ctrl_db not exists'); 
	}
	/** @test */
	public function testigk_db_user_groups(){ 
	$this->assertTrue(function_exists('igk_db_user_groups'), 'function igk_db_user_groups not exists'); 
	}
	/** @test */
	public function testigk_db_util_init_row_script(){ 
	$this->assertTrue(function_exists('igk_db_util_init_row_script'), 'function igk_db_util_init_row_script not exists'); 
	}
	/** @test */
	public function testigk_db_view_result_node(){ 
	$this->assertTrue(function_exists('igk_db_view_result_node'), 'function igk_db_view_result_node not exists'); 
	}
	/** @test */
	public function testigk_debug(){ 
	$this->assertTrue(function_exists('igk_debug'), 'function igk_debug not exists'); 
	}
	/** @test */
	public function testigk_debug_die(){ 
	$this->assertTrue(function_exists('igk_debug_die'), 'function igk_debug_die not exists'); 
	}
	/** @test */
	public function testigk_debug_flush_data(){ 
	$this->assertTrue(function_exists('igk_debug_flush_data'), 'function igk_debug_flush_data not exists'); 
	}
	/** @test */
	public function testigk_debug_or_local_die(){ 
	$this->assertTrue(function_exists('igk_debug_or_local_die'), 'function igk_debug_or_local_die not exists'); 
	}
	/** @test */
	public function testigk_debug_show(){ 
	$this->assertTrue(function_exists('igk_debug_show'), 'function igk_debug_show not exists'); 
	}
	/** @test */
	public function testigk_debug_show_dump_info(){ 
	$this->assertTrue(function_exists('igk_debug_show_dump_info'), 'function igk_debug_show_dump_info not exists'); 
	}
	/** @test */
	public function testigk_debug_wl(){ 
	$this->assertTrue(function_exists('igk_debug_wl'), 'function igk_debug_wl not exists'); 
	}
	/** @test */
	public function testigk_debug_wln(){ 
	$this->assertTrue(function_exists('igk_debug_wln'), 'function igk_debug_wln not exists'); 
	}
	/** @test */
	public function testigk_debug_wln_a_i(){ 
	$this->assertTrue(function_exists('igk_debug_wln_a_i'), 'function igk_debug_wln_a_i not exists'); 
	}
	/** @test */
	public function testigk_debug_wln_i(){ 
	$this->assertTrue(function_exists('igk_debug_wln_i'), 'function igk_debug_wln_i not exists'); 
	}
	/** @test */
	public function testigk_debuggerview(){ 
	$this->assertTrue(function_exists('igk_debuggerview'), 'function igk_debuggerview not exists'); 
	}
	/** @test */
	public function testigk_default_ignore_lib(){ 
	$this->assertTrue(function_exists('igk_default_ignore_lib'), 'function igk_default_ignore_lib not exists'); 
	}
	/** @test */
	public function testigk_delete_module(){ 
	$this->assertTrue(function_exists('igk_delete_module'), 'function igk_delete_module not exists'); 
	}
	/** @test */
	public function testigk_detect_closure(){ 
	$this->assertTrue(function_exists('igk_detect_closure'), 'function igk_detect_closure not exists'); 
	}
	/** @test */
	public function testigk_die(){ 
	$this->assertTrue(function_exists('igk_die'), 'function igk_die not exists'); 
	}
	/** @test */
	public function testigk_die_e(){ 
	$this->assertTrue(function_exists('igk_die_e'), 'function igk_die_e not exists'); 
	}
	/** @test */
	public function testigk_die_format(){ 
	$this->assertTrue(function_exists('igk_die_format'), 'function igk_die_format not exists'); 
	}
	/** @test */
	public function testigk_die_m(){ 
	$this->assertTrue(function_exists('igk_die_m'), 'function igk_die_m not exists'); 
	}
	/** @test */
	public function testigk_die_notimplement(){ 
	$this->assertTrue(function_exists('igk_die_notimplement'), 'function igk_die_notimplement not exists'); 
	}
	/** @test */
	public function testigk_dispatch_call(){ 
	$this->assertTrue(function_exists('igk_dispatch_call'), 'function igk_dispatch_call not exists'); 
	}
	/** @test */
	public function testigk_dispatch_message(){ 
	$this->assertTrue(function_exists('igk_dispatch_message'), 'function igk_dispatch_message not exists'); 
	}
	/** @test */
	public function testigk_display(){ 
	$this->assertTrue(function_exists('igk_display'), 'function igk_display not exists'); 
	}
	/** @test */
	public function testigk_display_error(){ 
	$this->assertTrue(function_exists('igk_display_error'), 'function igk_display_error not exists'); 
	}
	/** @test */
	public function testigk_doc_add_ie_meta_compatibility(){ 
	$this->assertTrue(function_exists('igk_doc_add_ie_meta_compatibility'), 'function igk_doc_add_ie_meta_compatibility not exists'); 
	}
	/** @test */
	public function testigk_doc_add_lib_script(){ 
	$this->assertTrue(function_exists('igk_doc_add_lib_script'), 'function igk_doc_add_lib_script not exists'); 
	}
	/** @test */
	public function testigk_doc_add_tempscript(){ 
	$this->assertTrue(function_exists('igk_doc_add_tempscript'), 'function igk_doc_add_tempscript not exists'); 
	}
	/** @test */
	public function testigk_doc_enable_mobile_app(){ 
	$this->assertTrue(function_exists('igk_doc_enable_mobile_app'), 'function igk_doc_enable_mobile_app not exists'); 
	}
	/** @test */
	public function testigk_doc_is_global(){ 
	$this->assertTrue(function_exists('igk_doc_is_global'), 'function igk_doc_is_global not exists'); 
	}
	/** @test */
	public function testigk_doc_load_temp_script(){ 
	$this->assertTrue(function_exists('igk_doc_load_temp_script'), 'function igk_doc_load_temp_script not exists'); 
	}
	/** @test */
	public function testigk_doc_set_favicon(){ 
	$this->assertTrue(function_exists('igk_doc_set_favicon'), 'function igk_doc_set_favicon not exists'); 
	}
	/** @test */
	public function testigk_doc_set_meta(){ 
	$this->assertTrue(function_exists('igk_doc_set_meta'), 'function igk_doc_set_meta not exists'); 
	}
	/** @test */
	public function testigk_download_content(){ 
	$this->assertTrue(function_exists('igk_download_content'), 'function igk_download_content not exists'); 
	}
	/** @test */
	public function testigk_download_file(){ 
	$this->assertTrue(function_exists('igk_download_file'), 'function igk_download_file not exists'); 
	}
	/** @test */
	public function testigk_dump(){ 
	$this->assertTrue(function_exists('igk_dump'), 'function igk_dump not exists'); 
	}
	/** @test */
	public function testigk_dump_array(){ 
	$this->assertTrue(function_exists('igk_dump_array'), 'function igk_dump_array not exists'); 
	}
	/** @test */
	public function testigk_elog(){ 
	$this->assertTrue(function_exists('igk_elog'), 'function igk_elog not exists'); 
	}
	/** @test */
	public function testigk_engine_get_attr_arg(){ 
	$this->assertTrue(function_exists('igk_engine_get_attr_arg'), 'function igk_engine_get_attr_arg not exists'); 
	}
	/** @test */
	public function testigk_engine_read_args(){ 
	$this->assertTrue(function_exists('igk_engine_read_args'), 'function igk_engine_read_args not exists'); 
	}
	/** @test */
	public function testigk_env_count(){ 
	$this->assertTrue(function_exists('igk_env_count'), 'function igk_env_count not exists'); 
	}
	/** @test */
	public function testigk_env_count_get(){ 
	$this->assertTrue(function_exists('igk_env_count_get'), 'function igk_env_count_get not exists'); 
	}
	/** @test */
	public function testigk_env_count_reset(){ 
	$this->assertTrue(function_exists('igk_env_count_reset'), 'function igk_env_count_reset not exists'); 
	}
	/** @test */
	public function testigk_env_get_replace_view(){ 
	$this->assertTrue(function_exists('igk_env_get_replace_view'), 'function igk_env_get_replace_view not exists'); 
	}
	/** @test */
	public function testigk_env_session_start(){ 
	$this->assertTrue(function_exists('igk_env_session_start'), 'function igk_env_session_start not exists'); 
	}
	/** @test */
	public function testigk_env_set_replace_view(){ 
	$this->assertTrue(function_exists('igk_env_set_replace_view'), 'function igk_env_set_replace_view not exists'); 
	}
	/** @test */
	public function testigk_environment(){ 
	$this->assertTrue(function_exists('igk_environment'), 'function igk_environment not exists'); 
	}
	/** @test */
	public function testigk_error(){ 
	$this->assertTrue(function_exists('igk_error'), 'function igk_error not exists'); 
	}
	/** @test */
	public function testigk_error_def_error(){ 
	$this->assertTrue(function_exists('igk_error_def_error'), 'function igk_error_def_error not exists'); 
	}
	/** @test */
	public function testigk_error_page404(){ 
	$this->assertTrue(function_exists('igk_error_page404'), 'function igk_error_page404 not exists'); 
	}
	/** @test */
	public function testigk_eval_in_context(){ 
	$this->assertTrue(function_exists('igk_eval_in_context'), 'function igk_eval_in_context not exists'); 
	}
	/** @test */
	public function testigk_eval_last_script(){ 
	$this->assertTrue(function_exists('igk_eval_last_script'), 'function igk_eval_last_script not exists'); 
	}
	/** @test */
	public function testigk_eval_script_in_context(){ 
	$this->assertTrue(function_exists('igk_eval_script_in_context'), 'function igk_eval_script_in_context not exists'); 
	}
	/** @test */
	public function testigk_ewln(){ 
	$this->assertTrue(function_exists('igk_ewln'), 'function igk_ewln not exists'); 
	}
	/** @test */
	public function testigk_execute_time(){ 
	$this->assertTrue(function_exists('igk_execute_time'), 'function igk_execute_time not exists'); 
	}
	/** @test */
	public function testigk_exit(){ 
	$this->assertTrue(function_exists('igk_exit'), 'function igk_exit not exists'); 
	}
	/** @test */
	public function testigk_extract_context(){ 
	$this->assertTrue(function_exists('igk_extract_context'), 'function igk_extract_context not exists'); 
	}
	/** @test */
	public function testigk_file_chmod(){ 
	$this->assertTrue(function_exists('igk_file_chmod'), 'function igk_file_chmod not exists'); 
	}
	/** @test */
	public function testigk_file_isdirectchildof(){ 
	$this->assertTrue(function_exists('igk_file_isdirectchildof'), 'function igk_file_isdirectchildof not exists'); 
	}
	/** @test */
	public function testigk_file_isnotincluded(){ 
	$this->assertTrue(function_exists('igk_file_isnotincluded'), 'function igk_file_isnotincluded not exists'); 
	}
	/** @test */
	public function testigk_flush_data(){ 
	$this->assertTrue(function_exists('igk_flush_data'), 'function igk_flush_data not exists'); 
	}
	/** @test */
	public function testigk_flush_start(){ 
	$this->assertTrue(function_exists('igk_flush_start'), 'function igk_flush_start not exists'); 
	}
	/** @test */
	public function testigk_flush_write(){ 
	$this->assertTrue(function_exists('igk_flush_write'), 'function igk_flush_write not exists'); 
	}
	/** @test */
	public function testigk_flush_write_data(){ 
	$this->assertTrue(function_exists('igk_flush_write_data'), 'function igk_flush_write_data not exists'); 
	}
	/** @test */
	public function testigk_foreach(){ 
	$this->assertTrue(function_exists('igk_foreach'), 'function igk_foreach not exists'); 
	}
	/** @test */
	public function testigk_format_date(){ 
	$this->assertTrue(function_exists('igk_format_date'), 'function igk_format_date not exists'); 
	}
	/** @test */
	public function testigk_frame_add_confirm(){ 
	$this->assertTrue(function_exists('igk_frame_add_confirm'), 'function igk_frame_add_confirm not exists'); 
	}
	/** @test */
	public function testigk_frame_bind_action(){ 
	$this->assertTrue(function_exists('igk_frame_bind_action'), 'function igk_frame_bind_action not exists'); 
	}
	/** @test */
	public function testigk_frame_close(){ 
	$this->assertTrue(function_exists('igk_frame_close'), 'function igk_frame_close not exists'); 
	}
	/** @test */
	public function testigk_frame_close_frame_callback(){ 
	$this->assertTrue(function_exists('igk_frame_close_frame_callback'), 'function igk_frame_close_frame_callback not exists'); 
	}
	/** @test */
	public function testigk_frame_confirm(){ 
	$this->assertTrue(function_exists('igk_frame_confirm'), 'function igk_frame_confirm not exists'); 
	}
	/** @test */
	public function testigk_frame_is_available(){ 
	$this->assertTrue(function_exists('igk_frame_is_available'), 'function igk_frame_is_available not exists'); 
	}
	/** @test */
	public function testigk_frame_js_postform_ref(){ 
	$this->assertTrue(function_exists('igk_frame_js_postform_ref'), 'function igk_frame_js_postform_ref not exists'); 
	}
	/** @test */
	public function testigk_frame_new(){ 
	$this->assertTrue(function_exists('igk_frame_new'), 'function igk_frame_new not exists'); 
	}
	/** @test */
	public function testigk_free_component(){ 
	$this->assertTrue(function_exists('igk_free_component'), 'function igk_free_component not exists'); 
	}
	/** @test */
	public function testigk_free_document(){ 
	$this->assertTrue(function_exists('igk_free_document'), 'function igk_free_document not exists'); 
	}
	/** @test */
	public function testigk_get_action_uri(){ 
	$this->assertTrue(function_exists('igk_get_action_uri'), 'function igk_get_action_uri not exists'); 
	}
	/** @test */
	public function testigk_get_adapter_name(){ 
	$this->assertTrue(function_exists('igk_get_adapter_name'), 'function igk_get_adapter_name not exists'); 
	}
	/** @test */
	public function testigk_get_all_default_pagectrl(){ 
	$this->assertTrue(function_exists('igk_get_all_default_pagectrl'), 'function igk_get_all_default_pagectrl not exists'); 
	}
	/** @test */
	public function testigk_get_all_session_file_infos(){ 
	$this->assertTrue(function_exists('igk_get_all_session_file_infos'), 'function igk_get_all_session_file_infos not exists'); 
	}
	/** @test */
	public function testigk_get_all_session_files(){ 
	$this->assertTrue(function_exists('igk_get_all_session_files'), 'function igk_get_all_session_files not exists'); 
	}
	/** @test */
	public function testigk_get_all_sessions(){ 
	$this->assertTrue(function_exists('igk_get_all_sessions'), 'function igk_get_all_sessions not exists'); 
	}
	/** @test */
	public function testigk_get_all_uri_page_ctrl(){ 
	$this->assertTrue(function_exists('igk_get_all_uri_page_ctrl'), 'function igk_get_all_uri_page_ctrl not exists'); 
	}
	/** @test */
	public function testigk_get_all_user_page_ctrl(){ 
	$this->assertTrue(function_exists('igk_get_all_user_page_ctrl'), 'function igk_get_all_user_page_ctrl not exists'); 
	}
	/** @test */
	public function testigk_get_allheaders(){ 
	$this->assertTrue(function_exists('igk_get_allheaders'), 'function igk_get_allheaders not exists'); 
	}
	/** @test */
	public function testigk_get_amount(){ 
	$this->assertTrue(function_exists('igk_get_amount'), 'function igk_get_amount not exists'); 
	}
	/** @test */
	public function testigk_get_article(){ 
	$this->assertTrue(function_exists('igk_get_article'), 'function igk_get_article not exists'); 
	}
	/** @test */
	public function testigk_get_article_chain(){ 
	$this->assertTrue(function_exists('igk_get_article_chain'), 'function igk_get_article_chain not exists'); 
	}
	/** @test */
	public function testigk_get_article_ext(){ 
	$this->assertTrue(function_exists('igk_get_article_ext'), 'function igk_get_article_ext not exists'); 
	}
	/** @test */
	public function testigk_get_article_root_context(){ 
	$this->assertTrue(function_exists('igk_get_article_root_context'), 'function igk_get_article_root_context not exists'); 
	}
	/** @test */
	public function testigk_get_attrib_raw_context(){ 
	$this->assertTrue(function_exists('igk_get_attrib_raw_context'), 'function igk_get_attrib_raw_context not exists'); 
	}
	/** @test */
	public function testigk_get_basestyle(){ 
	$this->assertTrue(function_exists('igk_get_basestyle'), 'function igk_get_basestyle not exists'); 
	}
	/** @test */
	public function testigk_get_builder_engine(){ 
	$this->assertTrue(function_exists('igk_get_builder_engine'), 'function igk_get_builder_engine not exists'); 
	}
	/** @test */
	public function testigk_get_cached(){ 
	$this->assertTrue(function_exists('igk_get_cached'), 'function igk_get_cached not exists'); 
	}
	/** @test */
	public function testigk_get_cached_manifest(){ 
	$this->assertTrue(function_exists('igk_get_cached_manifest'), 'function igk_get_cached_manifest not exists'); 
	}
	/** @test */
	public function testigk_get_call_args(){ 
	$this->assertTrue(function_exists('igk_get_call_args'), 'function igk_get_call_args not exists'); 
	}
	/** @test */
	public function testigk_get_class_constants(){ 
	$this->assertTrue(function_exists('igk_get_class_constants'), 'function igk_get_class_constants not exists'); 
	}
	/** @test */
	public function testigk_get_class_instance(){ 
	$this->assertTrue(function_exists('igk_get_class_instance'), 'function igk_get_class_instance not exists'); 
	}
	/** @test */
	public function testigk_get_class_location(){ 
	$this->assertTrue(function_exists('igk_get_class_location'), 'function igk_get_class_location not exists'); 
	}
	/** @test */
	public function testigk_get_class_method_location(){ 
	$this->assertTrue(function_exists('igk_get_class_method_location'), 'function igk_get_class_method_location not exists'); 
	}
	/** @test */
	public function testigk_get_cmd_command(){ 
	$this->assertTrue(function_exists('igk_get_cmd_command'), 'function igk_get_cmd_command not exists'); 
	}
	/** @test */
	public function testigk_get_component(){ 
	$this->assertTrue(function_exists('igk_get_component'), 'function igk_get_component not exists'); 
	}
	/** @test */
	public function testigk_get_component_by_id(){ 
	$this->assertTrue(function_exists('igk_get_component_by_id'), 'function igk_get_component_by_id not exists'); 
	}
	/** @test */
	public function testigk_get_component_id(){ 
	$this->assertTrue(function_exists('igk_get_component_id'), 'function igk_get_component_id not exists'); 
	}
	/** @test */
	public function testigk_get_component_info(){ 
	$this->assertTrue(function_exists('igk_get_component_info'), 'function igk_get_component_info not exists'); 
	}
	/** @test */
	public function testigk_get_component_uri(){ 
	$this->assertTrue(function_exists('igk_get_component_uri'), 'function igk_get_component_uri not exists'); 
	}
	/** @test */
	public function testigk_get_component_uri_key(){ 
	$this->assertTrue(function_exists('igk_get_component_uri_key'), 'function igk_get_component_uri_key not exists'); 
	}
	/** @test */
	public function testigk_get_config_action(){ 
	$this->assertTrue(function_exists('igk_get_config_action'), 'function igk_get_config_action not exists'); 
	}
	/** @test */
	public function testigk_get_configs_menu_settings(){ 
	$this->assertTrue(function_exists('igk_get_configs_menu_settings'), 'function igk_get_configs_menu_settings not exists'); 
	}
	/** @test */
	public function testigk_get_contents(){ 
	$this->assertTrue(function_exists('igk_get_contents'), 'function igk_get_contents not exists'); 
	}
	/** @test */
	public function testigk_get_context_args(){ 
	$this->assertTrue(function_exists('igk_get_context_args'), 'function igk_get_context_args not exists'); 
	}
	/** @test */
	public function testigk_get_cookie(){ 
	$this->assertTrue(function_exists('igk_get_cookie'), 'function igk_get_cookie not exists'); 
	}
	/** @test */
	public function testigk_get_cookie_domain(){ 
	$this->assertTrue(function_exists('igk_get_cookie_domain'), 'function igk_get_cookie_domain not exists'); 
	}
	/** @test */
	public function testigk_get_cookie_name(){ 
	$this->assertTrue(function_exists('igk_get_cookie_name'), 'function igk_get_cookie_name not exists'); 
	}
	/** @test */
	public function testigk_get_cookie_path(){ 
	$this->assertTrue(function_exists('igk_get_cookie_path'), 'function igk_get_cookie_path not exists'); 
	}
	/** @test */
	public function testigk_get_cp(){ 
	$this->assertTrue(function_exists('igk_get_cp'), 'function igk_get_cp not exists'); 
	}
	/** @test */
	public function testigk_get_currency_symbol(){ 
	$this->assertTrue(function_exists('igk_get_currency_symbol'), 'function igk_get_currency_symbol not exists'); 
	}
	/** @test */
	public function testigk_get_current_base_ctrl(){ 
	$this->assertTrue(function_exists('igk_get_current_base_ctrl'), 'function igk_get_current_base_ctrl not exists'); 
	}
	/** @test */
	public function testigk_get_current_base_uri(){ 
	$this->assertTrue(function_exists('igk_get_current_base_uri'), 'function igk_get_current_base_uri not exists'); 
	}
	/** @test */
	public function testigk_get_current_package(){ 
	$this->assertTrue(function_exists('igk_get_current_package'), 'function igk_get_current_package not exists'); 
	}
	/** @test */
	public function testigk_get_currentpagectrl(){ 
	$this->assertTrue(function_exists('igk_get_currentpagectrl'), 'function igk_get_currentpagectrl not exists'); 
	}
	/** @test */
	public function testigk_get_data_adapter(){ 
	$this->assertTrue(function_exists('igk_get_data_adapter'), 'function igk_get_data_adapter not exists'); 
	}
	/** @test */
	public function testigk_get_default_style(){ 
	$this->assertTrue(function_exists('igk_get_default_style'), 'function igk_get_default_style not exists'); 
	}
	/** @test */
	public function testigk_get_default_view_content(){ 
	$this->assertTrue(function_exists('igk_get_default_view_content'), 'function igk_get_default_view_content not exists'); 
	}
	/** @test */
	public function testigk_get_defaultconfigdata(){ 
	$this->assertTrue(function_exists('igk_get_defaultconfigdata'), 'function igk_get_defaultconfigdata not exists'); 
	}
	/** @test */
	public function testigk_get_defaultview_content(){ 
	$this->assertTrue(function_exists('igk_get_defaultview_content'), 'function igk_get_defaultview_content not exists'); 
	}
	/** @test */
	public function testigk_get_defaultwebpagectrl(){ 
	$this->assertTrue(function_exists('igk_get_defaultwebpagectrl'), 'function igk_get_defaultwebpagectrl not exists'); 
	}
	/** @test */
	public function testigk_get_defined_ns(){ 
	$this->assertTrue(function_exists('igk_get_defined_ns'), 'function igk_get_defined_ns not exists'); 
	}
	/** @test */
	public function testigk_get_document(){ 
	$this->assertTrue(function_exists('igk_get_document'), 'function igk_get_document not exists'); 
	}
	/** @test */
	public function testigk_get_documents(){ 
	$this->assertTrue(function_exists('igk_get_documents'), 'function igk_get_documents not exists'); 
	}
	/** @test */
	public function testigk_get_domain(){ 
	$this->assertTrue(function_exists('igk_get_domain'), 'function igk_get_domain not exists'); 
	}
	/** @test */
	public function testigk_get_domain_name(){ 
	$this->assertTrue(function_exists('igk_get_domain_name'), 'function igk_get_domain_name not exists'); 
	}
	/** @test */
	public function testigk_get_env(){ 
	$this->assertTrue(function_exists('igk_get_env'), 'function igk_get_env not exists'); 
	}
	/** @test */
	public function testigk_get_env_all(){ 
	$this->assertTrue(function_exists('igk_get_env_all'), 'function igk_get_env_all not exists'); 
	}
	/** @test */
	public function testigk_get_env_init(){ 
	$this->assertTrue(function_exists('igk_get_env_init'), 'function igk_get_env_init not exists'); 
	}
	/** @test */
	public function testigk_get_env_lib_loaded(){ 
	$this->assertTrue(function_exists('igk_get_env_lib_loaded'), 'function igk_get_env_lib_loaded not exists'); 
	}
	/** @test */
	public function testigk_get_env_obj(){ 
	$this->assertTrue(function_exists('igk_get_env_obj'), 'function igk_get_env_obj not exists'); 
	}
	/** @test */
	public function testigk_get_envs(){ 
	$this->assertTrue(function_exists('igk_get_envs'), 'function igk_get_envs not exists'); 
	}
	/** @test */
	public function testigk_get_error(){ 
	$this->assertTrue(function_exists('igk_get_error'), 'function igk_get_error not exists'); 
	}
	/** @test */
	public function testigk_get_error_key(){ 
	$this->assertTrue(function_exists('igk_get_error_key'), 'function igk_get_error_key not exists'); 
	}
	/** @test */
	public function testigk_get_eval_global_script_actions(){ 
	$this->assertTrue(function_exists('igk_get_eval_global_script_actions'), 'function igk_get_eval_global_script_actions not exists'); 
	}
	/** @test */
	public function testigk_get_event_key(){ 
	$this->assertTrue(function_exists('igk_get_event_key'), 'function igk_get_event_key not exists'); 
	}
	/** @test */
	public function testigk_get_exception_eval(){ 
	$this->assertTrue(function_exists('igk_get_exception_eval'), 'function igk_get_exception_eval not exists'); 
	}
	/** @test */
	public function testigk_get_form_args(){ 
	$this->assertTrue(function_exists('igk_get_form_args'), 'function igk_get_form_args not exists'); 
	}
	/** @test */
	public function testigk_get_form_builder_engines(){ 
	$this->assertTrue(function_exists('igk_get_form_builder_engines'), 'function igk_get_form_builder_engines not exists'); 
	}
	/** @test */
	public function testigk_get_frame(){ 
	$this->assertTrue(function_exists('igk_get_frame'), 'function igk_get_frame not exists'); 
	}
	/** @test */
	public function testigk_get_frame_ext(){ 
	$this->assertTrue(function_exists('igk_get_frame_ext'), 'function igk_get_frame_ext not exists'); 
	}
	/** @test */
	public function testigk_get_func_location(){ 
	$this->assertTrue(function_exists('igk_get_func_location'), 'function igk_get_func_location not exists'); 
	}
	/** @test */
	public function testigk_get_func_location_str(){ 
	$this->assertTrue(function_exists('igk_get_func_location_str'), 'function igk_get_func_location_str not exists'); 
	}
	/** @test */
	public function testigk_get_global_cookie(){ 
	$this->assertTrue(function_exists('igk_get_global_cookie'), 'function igk_get_global_cookie not exists'); 
	}
	/** @test */
	public function testigk_get_header_obj(){ 
	$this->assertTrue(function_exists('igk_get_header_obj'), 'function igk_get_header_obj not exists'); 
	}
	/** @test */
	public function testigk_get_header_status(){ 
	$this->assertTrue(function_exists('igk_get_header_status'), 'function igk_get_header_status not exists'); 
	}
	/** @test */
	public function testigk_get_host_component(){ 
	$this->assertTrue(function_exists('igk_get_host_component'), 'function igk_get_host_component not exists'); 
	}
	/** @test */
	public function testigk_get_html_components(){ 
	$this->assertTrue(function_exists('igk_get_html_components'), 'function igk_get_html_components not exists'); 
	}
	/** @test */
	public function testigk_get_identifier(){ 
	$this->assertTrue(function_exists('igk_get_identifier'), 'function igk_get_identifier not exists'); 
	}
	/** @test */
	public function testigk_get_image_uri(){ 
	$this->assertTrue(function_exists('igk_get_image_uri'), 'function igk_get_image_uri not exists'); 
	}
	/** @test */
	public function testigk_get_index(){ 
	$this->assertTrue(function_exists('igk_get_index'), 'function igk_get_index not exists'); 
	}
	/** @test */
	public function testigk_get_instance_key(){ 
	$this->assertTrue(function_exists('igk_get_instance_key'), 'function igk_get_instance_key not exists'); 
	}
	/** @test */
	public function testigk_get_last_rendered_document(){ 
	$this->assertTrue(function_exists('igk_get_last_rendered_document'), 'function igk_get_last_rendered_document not exists'); 
	}
	/** @test */
	public function testigk_get_live_data(){ 
	$this->assertTrue(function_exists('igk_get_live_data'), 'function igk_get_live_data not exists'); 
	}
	/** @test */
	public function testigk_get_local_file(){ 
	$this->assertTrue(function_exists('igk_get_local_file'), 'function igk_get_local_file not exists'); 
	}
	/** @test */
	public function testigk_get_manifest_content(){ 
	$this->assertTrue(function_exists('igk_get_manifest_content'), 'function igk_get_manifest_content not exists'); 
	}
	/** @test */
	public function testigk_get_module(){ 
	$this->assertTrue(function_exists('igk_get_module'), 'function igk_get_module not exists'); 
	}
	/** @test */
	public function testigk_get_module_dir(){ 
	$this->assertTrue(function_exists('igk_get_module_dir'), 'function igk_get_module_dir not exists'); 
	}
	/** @test */
	public function testigk_get_module_name(){ 
	$this->assertTrue(function_exists('igk_get_module_name'), 'function igk_get_module_name not exists'); 
	}
	/** @test */
	public function testigk_get_modules(){ 
	$this->assertTrue(function_exists('igk_get_modules'), 'function igk_get_modules not exists'); 
	}
	/** @test */
	public function testigk_get_new_data_adapter(){ 
	$this->assertTrue(function_exists('igk_get_new_data_adapter'), 'function igk_get_new_data_adapter not exists'); 
	}
	/** @test */
	public function testigk_get_nhru(){ 
	$this->assertTrue(function_exists('igk_get_nhru'), 'function igk_get_nhru not exists'); 
	}
	/** @test */
	public function testigk_get_node_attr_value(){ 
	$this->assertTrue(function_exists('igk_get_node_attr_value'), 'function igk_get_node_attr_value not exists'); 
	}
	/** @test */
	public function testigk_get_node_expression(){ 
	$this->assertTrue(function_exists('igk_get_node_expression'), 'function igk_get_node_expression not exists'); 
	}
	/** @test */
	public function testigk_get_ns(){ 
	$this->assertTrue(function_exists('igk_get_ns'), 'function igk_get_ns not exists'); 
	}
	/** @test */
	public function testigk_get_ns_func(){ 
	$this->assertTrue(function_exists('igk_get_ns_func'), 'function igk_get_ns_func not exists'); 
	}
	/** @test */
	public function testigk_get_packages_dir(){ 
	$this->assertTrue(function_exists('igk_get_packages_dir'), 'function igk_get_packages_dir not exists'); 
	}
	/** @test */
	public function testigk_get_palette(){ 
	$this->assertTrue(function_exists('igk_get_palette'), 'function igk_get_palette not exists'); 
	}
	/** @test */
	public function testigk_get_path_exec(){ 
	$this->assertTrue(function_exists('igk_get_path_exec'), 'function igk_get_path_exec not exists'); 
	}
	/** @test */
	public function testigk_get_platform_header_array(){ 
	$this->assertTrue(function_exists('igk_get_platform_header_array'), 'function igk_get_platform_header_array not exists'); 
	}
	/** @test */
	public function testigk_get_query_options(){ 
	$this->assertTrue(function_exists('igk_get_query_options'), 'function igk_get_query_options not exists'); 
	}
	/** @test */
	public function testigk_get_reg_class_file(){ 
	$this->assertTrue(function_exists('igk_get_reg_class_file'), 'function igk_get_reg_class_file not exists'); 
	}
	/** @test */
	public function testigk_get_reg_file(){ 
	$this->assertTrue(function_exists('igk_get_reg_file'), 'function igk_get_reg_file not exists'); 
	}
	/** @test */
	public function testigk_get_reg_func_file(){ 
	$this->assertTrue(function_exists('igk_get_reg_func_file'), 'function igk_get_reg_func_file not exists'); 
	}
	/** @test */
	public function testigk_get_regctrl(){ 
	$this->assertTrue(function_exists('igk_get_regctrl'), 'function igk_get_regctrl not exists'); 
	}
	/** @test */
	public function testigk_get_rendering_node(){ 
	$this->assertTrue(function_exists('igk_get_rendering_node'), 'function igk_get_rendering_node not exists'); 
	}
	/** @test */
	public function testigk_get_robj(){ 
	$this->assertTrue(function_exists('igk_get_robj'), 'function igk_get_robj not exists'); 
	}
	/** @test */
	public function testigk_get_run_script_path(){ 
	$this->assertTrue(function_exists('igk_get_run_script_path'), 'function igk_get_run_script_path not exists'); 
	}
	/** @test */
	public function testigk_get_selected_builder_engine(){ 
	$this->assertTrue(function_exists('igk_get_selected_builder_engine'), 'function igk_get_selected_builder_engine not exists'); 
	}
	/** @test */
	public function testigk_get_selector_map(){ 
	$this->assertTrue(function_exists('igk_get_selector_map'), 'function igk_get_selector_map not exists'); 
	}
	/** @test */
	public function testigk_get_services(){ 
	$this->assertTrue(function_exists('igk_get_services'), 'function igk_get_services not exists'); 
	}
	/** @test */
	public function testigk_get_session(){ 
	$this->assertTrue(function_exists('igk_get_session'), 'function igk_get_session not exists'); 
	}
	/** @test */
	public function testigk_get_session_event(){ 
	$this->assertTrue(function_exists('igk_get_session_event'), 'function igk_get_session_event not exists'); 
	}
	/** @test */
	public function testigk_get_session_event_handler(){ 
	$this->assertTrue(function_exists('igk_get_session_event_handler'), 'function igk_get_session_event_handler not exists'); 
	}
	/** @test */
	public function testigk_get_session_prefix(){ 
	$this->assertTrue(function_exists('igk_get_session_prefix'), 'function igk_get_session_prefix not exists'); 
	}
	/** @test */
	public function testigk_get_sizev(){ 
	$this->assertTrue(function_exists('igk_get_sizev'), 'function igk_get_sizev not exists'); 
	}
	/** @test */
	public function testigk_get_stack_depth(){ 
	$this->assertTrue(function_exists('igk_get_stack_depth'), 'function igk_get_stack_depth not exists'); 
	}
	/** @test */
	public function testigk_get_string_format(){ 
	$this->assertTrue(function_exists('igk_get_string_format'), 'function igk_get_string_format not exists'); 
	}
	/** @test */
	public function testigk_get_string_propvalue(){ 
	$this->assertTrue(function_exists('igk_get_string_propvalue'), 'function igk_get_string_propvalue not exists'); 
	}
	/** @test */
	public function testigk_get_system_user(){ 
	$this->assertTrue(function_exists('igk_get_system_user'), 'function igk_get_system_user not exists'); 
	}
	/** @test */
	public function testigk_get_template_bindingattributes(){ 
	$this->assertTrue(function_exists('igk_get_template_bindingattributes'), 'function igk_get_template_bindingattributes not exists'); 
	}
	/** @test */
	public function testigk_get_trace_array(){ 
	$this->assertTrue(function_exists('igk_get_trace_array'), 'function igk_get_trace_array not exists'); 
	}
	/** @test */
	public function testigk_get_type(){ 
	$this->assertTrue(function_exists('igk_get_type'), 'function igk_get_type not exists'); 
	}
	/** @test */
	public function testigk_get_user(){ 
	$this->assertTrue(function_exists('igk_get_user'), 'function igk_get_user not exists'); 
	}
	/** @test */
	public function testigk_get_user_bylogin(){ 
	$this->assertTrue(function_exists('igk_get_user_bylogin'), 'function igk_get_user_bylogin not exists'); 
	}
	/** @test */
	public function testigk_get_uvar(){ 
	$this->assertTrue(function_exists('igk_get_uvar'), 'function igk_get_uvar not exists'); 
	}
	/** @test */
	public function testigk_get_value(){ 
	$this->assertTrue(function_exists('igk_get_value'), 'function igk_get_value not exists'); 
	}
	/** @test */
	public function testigk_get_view_arg(){ 
	$this->assertTrue(function_exists('igk_get_view_arg'), 'function igk_get_view_arg not exists'); 
	}
	/** @test */
	public function testigk_get_view_args(){ 
	$this->assertTrue(function_exists('igk_get_view_args'), 'function igk_get_view_args not exists'); 
	}
	/** @test */
	public function testigk_get_viewparam(){ 
	$this->assertTrue(function_exists('igk_get_viewparam'), 'function igk_get_viewparam not exists'); 
	}
	/** @test */
	public function testigk_get_web_content(){ 
	$this->assertTrue(function_exists('igk_get_web_content'), 'function igk_get_web_content not exists'); 
	}
	/** @test */
	public function testigk_get_webpagecontent(){ 
	$this->assertTrue(function_exists('igk_get_webpagecontent'), 'function igk_get_webpagecontent not exists'); 
	}
	/** @test */
	public function testigk_get_widgets(){ 
	$this->assertTrue(function_exists('igk_get_widgets'), 'function igk_get_widgets not exists'); 
	}
	/** @test */
	public function testigk_getbase_access(){ 
	$this->assertTrue(function_exists('igk_getbase_access'), 'function igk_getbase_access not exists'); 
	}
	/** @test */
	public function testigk_getbaseindex_src(){ 
	$this->assertTrue(function_exists('igk_getbaseindex_src'), 'function igk_getbaseindex_src not exists'); 
	}
	/** @test */
	public function testigk_getbool(){ 
	$this->assertTrue(function_exists('igk_getbool'), 'function igk_getbool not exists'); 
	}
	/** @test */
	public function testigk_getconfig_access(){ 
	$this->assertTrue(function_exists('igk_getconfig_access'), 'function igk_getconfig_access not exists'); 
	}
	/** @test */
	public function testigk_getconfigwebpagectrl(){ 
	$this->assertTrue(function_exists('igk_getconfigwebpagectrl'), 'function igk_getconfigwebpagectrl not exists'); 
	}
	/** @test */
	public function testigk_getctrl(){ 
	$this->assertTrue(function_exists('igk_getctrl'), 'function igk_getctrl not exists'); 
	}
	/** @test */
	public function testigk_getctrl_byid(){ 
	$this->assertTrue(function_exists('igk_getctrl_byid'), 'function igk_getctrl_byid not exists'); 
	}
	/** @test */
	public function testigk_getctrl_from_classname(){ 
	$this->assertTrue(function_exists('igk_getctrl_from_classname'), 'function igk_getctrl_from_classname not exists'); 
	}
	/** @test */
	public function testigk_getctrls(){ 
	$this->assertTrue(function_exists('igk_getctrls'), 'function igk_getctrls not exists'); 
	}
	/** @test */
	public function testigk_getcv(){ 
	$this->assertTrue(function_exists('igk_getcv'), 'function igk_getcv not exists'); 
	}
	/** @test */
	public function testigk_getdv(){ 
	$this->assertTrue(function_exists('igk_getdv'), 'function igk_getdv not exists'); 
	}
	/** @test */
	public function testigk_geterror_code(){ 
	$this->assertTrue(function_exists('igk_geterror_code'), 'function igk_geterror_code not exists'); 
	}
	/** @test */
	public function testigk_getev(){ 
	$this->assertTrue(function_exists('igk_getev'), 'function igk_getev not exists'); 
	}
	/** @test */
	public function testigk_getf(){ 
	$this->assertTrue(function_exists('igk_getf'), 'function igk_getf not exists'); 
	}
	/** @test */
	public function testigk_getfn(){ 
	$this->assertTrue(function_exists('igk_getfn'), 'function igk_getfn not exists'); 
	}
	/** @test */
	public function testigk_getg(){ 
	$this->assertTrue(function_exists('igk_getg'), 'function igk_getg not exists'); 
	}
	/** @test */
	public function testigk_getp(){ 
	$this->assertTrue(function_exists('igk_getp'), 'function igk_getp not exists'); 
	}
	/** @test */
	public function testigk_getprop(){ 
	$this->assertTrue(function_exists('igk_getprop'), 'function igk_getprop not exists'); 
	}
	/** @test */
	public function testigk_getpv(){ 
	$this->assertTrue(function_exists('igk_getpv'), 'function igk_getpv not exists'); 
	}
	/** @test */
	public function testigk_getquery_args(){ 
	$this->assertTrue(function_exists('igk_getquery_args'), 'function igk_getquery_args not exists'); 
	}
	/** @test */
	public function testigk_getr(){ 
	$this->assertTrue(function_exists('igk_getr'), 'function igk_getr not exists'); 
	}
	/** @test */
	public function testigk_getr_k(){ 
	$this->assertTrue(function_exists('igk_getr_k'), 'function igk_getr_k not exists'); 
	}
	/** @test */
	public function testigk_getr_kv(){ 
	$this->assertTrue(function_exists('igk_getr_kv'), 'function igk_getr_kv not exists'); 
	}
	/** @test */
	public function testigk_getre(){ 
	$this->assertTrue(function_exists('igk_getre'), 'function igk_getre not exists'); 
	}
	/** @test */
	public function testigk_getrequest(){ 
	$this->assertTrue(function_exists('igk_getrequest'), 'function igk_getrequest not exists'); 
	}
	/** @test */
	public function testigk_getrs(){ 
	$this->assertTrue(function_exists('igk_getrs'), 'function igk_getrs not exists'); 
	}
	/** @test */
	public function testigk_getru(){ 
	$this->assertTrue(function_exists('igk_getru'), 'function igk_getru not exists'); 
	}
	/** @test */
	public function testigk_gets(){ 
	$this->assertTrue(function_exists('igk_gets'), 'function igk_gets not exists'); 
	}
	/** @test */
	public function testigk_getserverinfo(){ 
	$this->assertTrue(function_exists('igk_getserverinfo'), 'function igk_getserverinfo not exists'); 
	}
	/** @test */
	public function testigk_getsv(){ 
	$this->assertTrue(function_exists('igk_getsv'), 'function igk_getsv not exists'); 
	}
	/** @test */
	public function testigk_gettsv(){ 
	$this->assertTrue(function_exists('igk_gettsv'), 'function igk_gettsv not exists'); 
	}
	/** @test */
	public function testigk_gettv(){ 
	$this->assertTrue(function_exists('igk_gettv'), 'function igk_gettv not exists'); 
	}
	/** @test */
	public function testigk_getv(){ 
	$this->assertTrue(function_exists('igk_getv'), 'function igk_getv not exists'); 
	}
	/** @test */
	public function testigk_globalvars(){ 
	$this->assertTrue(function_exists('igk_globalvars'), 'function igk_globalvars not exists'); 
	}
	/** @test */
	public function testigk_globalvars_isset(){ 
	$this->assertTrue(function_exists('igk_globalvars_isset'), 'function igk_globalvars_isset not exists'); 
	}
	/** @test */
	public function testigk_glue(){ 
	$this->assertTrue(function_exists('igk_glue'), 'function igk_glue not exists'); 
	}
	/** @test */
	public function testigk_handle_cmd_line(){ 
	$this->assertTrue(function_exists('igk_handle_cmd_line'), 'function igk_handle_cmd_line not exists'); 
	}
	/** @test */
	public function testigk_handle_component_uri(){ 
	$this->assertTrue(function_exists('igk_handle_component_uri'), 'function igk_handle_component_uri not exists'); 
	}
	/** @test */
	public function testigk_handle_view_cmd(){ 
	$this->assertTrue(function_exists('igk_handle_view_cmd'), 'function igk_handle_view_cmd not exists'); 
	}
	/** @test */
	public function testigk_header_cache_output(){ 
	$this->assertTrue(function_exists('igk_header_cache_output'), 'function igk_header_cache_output not exists'); 
	}
	/** @test */
	public function testigk_header_content_file(){ 
	$this->assertTrue(function_exists('igk_header_content_file'), 'function igk_header_content_file not exists'); 
	}
	/** @test */
	public function testigk_header_mime(){ 
	$this->assertTrue(function_exists('igk_header_mime'), 'function igk_header_mime not exists'); 
	}
	/** @test */
	public function testigk_header_no_cache(){ 
	$this->assertTrue(function_exists('igk_header_no_cache'), 'function igk_header_no_cache not exists'); 
	}
	/** @test */
	public function testigk_header_set_contenttype(){ 
	$this->assertTrue(function_exists('igk_header_set_contenttype'), 'function igk_header_set_contenttype not exists'); 
	}
	/** @test */
	public function testigk_header_status(){ 
	$this->assertTrue(function_exists('igk_header_status'), 'function igk_header_status not exists'); 
	}
	/** @test */
	public function testigk_header_str2array(){ 
	$this->assertTrue(function_exists('igk_header_str2array'), 'function igk_header_str2array not exists'); 
	}
	/** @test */
	public function testigk_hook(){ 
	$this->assertTrue(function_exists('igk_hook'), 'function igk_hook not exists'); 
	}
	/** @test */
	public function testigk_html_a_link(){ 
	$this->assertTrue(function_exists('igk_html_a_link'), 'function igk_html_a_link not exists'); 
	}
	/** @test */
	public function testigk_html_add(){ 
	$this->assertTrue(function_exists('igk_html_add'), 'function igk_html_add not exists'); 
	}
	/** @test */
	public function testigk_html_add_balafonjsscriptfile(){ 
	$this->assertTrue(function_exists('igk_html_add_balafonjsscriptfile'), 'function igk_html_add_balafonjsscriptfile not exists'); 
	}
	/** @test */
	public function testigk_html_add_confirm(){ 
	$this->assertTrue(function_exists('igk_html_add_confirm'), 'function igk_html_add_confirm not exists'); 
	}
	/** @test */
	public function testigk_html_add_doc_script(){ 
	$this->assertTrue(function_exists('igk_html_add_doc_script'), 'function igk_html_add_doc_script not exists'); 
	}
	/** @test */
	public function testigk_html_array_attrs(){ 
	$this->assertTrue(function_exists('igk_html_array_attrs'), 'function igk_html_array_attrs not exists'); 
	}
	/** @test */
	public function testigk_html_article(){ 
	$this->assertTrue(function_exists('igk_html_article'), 'function igk_html_article not exists'); 
	}
	/** @test */
	public function testigk_html_article_options(){ 
	$this->assertTrue(function_exists('igk_html_article_options'), 'function igk_html_article_options not exists'); 
	}
	/** @test */
	public function testigk_html_beginbinding(){ 
	$this->assertTrue(function_exists('igk_html_beginbinding'), 'function igk_html_beginbinding not exists'); 
	}
	/** @test */
	public function testigk_html_bind_content(){ 
	$this->assertTrue(function_exists('igk_html_bind_content'), 'function igk_html_bind_content not exists'); 
	}
	/** @test */
	public function testigk_html_bind_node(){ 
	$this->assertTrue(function_exists('igk_html_bind_node'), 'function igk_html_bind_node not exists'); 
	}
	/** @test */
	public function testigk_html_bind_target(){ 
	$this->assertTrue(function_exists('igk_html_bind_target'), 'function igk_html_bind_target not exists'); 
	}
	/** @test */
	public function testigk_html_binddata(){ 
	$this->assertTrue(function_exists('igk_html_binddata'), 'function igk_html_binddata not exists'); 
	}
	/** @test */
	public function testigk_html_bindentry(){ 
	$this->assertTrue(function_exists('igk_html_bindentry'), 'function igk_html_bindentry not exists'); 
	}
	/** @test */
	public function testigk_html_bindinginfo(){ 
	$this->assertTrue(function_exists('igk_html_bindinginfo'), 'function igk_html_bindinginfo not exists'); 
	}
	/** @test */
	public function testigk_html_bindsetup(){ 
	$this->assertTrue(function_exists('igk_html_bindsetup'), 'function igk_html_bindsetup not exists'); 
	}
	/** @test */
	public function testigk_html_build_form_array(){ 
	$this->assertTrue(function_exists('igk_html_build_form_array'), 'function igk_html_build_form_array not exists'); 
	}
	/** @test */
	public function testigk_html_build_query_result_table(){ 
	$this->assertTrue(function_exists('igk_html_build_query_result_table'), 'function igk_html_build_query_result_table not exists'); 
	}
	/** @test */
	public function testigk_html_build_select_array(){ 
	$this->assertTrue(function_exists('igk_html_build_select_array'), 'function igk_html_build_select_array not exists'); 
	}
	/** @test */
	public function testigk_html_build_select_model(){ 
	$this->assertTrue(function_exists('igk_html_build_select_model'), 'function igk_html_build_select_model not exists'); 
	}
	/** @test */
	public function testigk_html_build_select_option(){ 
	$this->assertTrue(function_exists('igk_html_build_select_option'), 'function igk_html_build_select_option not exists'); 
	}
	/** @test */
	public function testigk_html_buildview(){ 
	$this->assertTrue(function_exists('igk_html_buildview'), 'function igk_html_buildview not exists'); 
	}
	/** @test */
	public function testigk_html_callback_is_webmaster(){ 
	$this->assertTrue(function_exists('igk_html_callback_is_webmaster'), 'function igk_html_callback_is_webmaster not exists'); 
	}
	/** @test */
	public function testigk_html_callback_production_minifycontent(){ 
	$this->assertTrue(function_exists('igk_html_callback_production_minifycontent'), 'function igk_html_callback_production_minifycontent not exists'); 
	}
	/** @test */
	public function testigk_html_clearbindinfo(){ 
	$this->assertTrue(function_exists('igk_html_clearbindinfo'), 'function igk_html_clearbindinfo not exists'); 
	}
	/** @test */
	public function testigk_html_clonenode(){ 
	$this->assertTrue(function_exists('igk_html_clonenode'), 'function igk_html_clonenode not exists'); 
	}
	/** @test */
	public function testigk_html_create_db_tab_select(){ 
	$this->assertTrue(function_exists('igk_html_create_db_tab_select'), 'function igk_html_create_db_tab_select not exists'); 
	}
	/** @test */
	public function testigk_html_createmenu(){ 
	$this->assertTrue(function_exists('igk_html_createmenu'), 'function igk_html_createmenu not exists'); 
	}
	/** @test */
	public function testigk_html_createmenui(){ 
	$this->assertTrue(function_exists('igk_html_createmenui'), 'function igk_html_createmenui not exists'); 
	}
	/** @test */
	public function testigk_html_ctrl_view_config(){ 
	$this->assertTrue(function_exists('igk_html_ctrl_view_config'), 'function igk_html_ctrl_view_config not exists'); 
	}
	/** @test */
	public function testigk_html_databinding_getobjforscripting(){ 
	$this->assertTrue(function_exists('igk_html_databinding_getobjforscripting'), 'function igk_html_databinding_getobjforscripting not exists'); 
	}
	/** @test */
	public function testigk_html_databinding_read_obj_litteral(){ 
	$this->assertTrue(function_exists('igk_html_databinding_read_obj_litteral'), 'function igk_html_databinding_read_obj_litteral not exists'); 
	}
	/** @test */
	public function testigk_html_databinding_treatresponse(){ 
	$this->assertTrue(function_exists('igk_html_databinding_treatresponse'), 'function igk_html_databinding_treatresponse not exists'); 
	}
	/** @test */
	public function testigk_html_db_build_table(){ 
	$this->assertTrue(function_exists('igk_html_db_build_table'), 'function igk_html_db_build_table not exists'); 
	}
	/** @test */
	public function testigk_html_debug_m(){ 
	$this->assertTrue(function_exists('igk_html_debug_m'), 'function igk_html_debug_m not exists'); 
	}
	/** @test */
	public function testigk_html_emptynode(){ 
	$this->assertTrue(function_exists('igk_html_emptynode'), 'function igk_html_emptynode not exists'); 
	}
	/** @test */
	public function testigk_html_emptytag(){ 
	$this->assertTrue(function_exists('igk_html_emptytag'), 'function igk_html_emptytag not exists'); 
	}
	/** @test */
	public function testigk_html_endbinding(){ 
	$this->assertTrue(function_exists('igk_html_endbinding'), 'function igk_html_endbinding not exists'); 
	}
	/** @test */
	public function testigk_html_engine_parent_node(){ 
	$this->assertTrue(function_exists('igk_html_engine_parent_node'), 'function igk_html_engine_parent_node not exists'); 
	}
	/** @test */
	public function testigk_html_engine_parent_pop_node(){ 
	$this->assertTrue(function_exists('igk_html_engine_parent_pop_node'), 'function igk_html_engine_parent_pop_node not exists'); 
	}
	/** @test */
	public function testigk_html_engine_parent_push_node(){ 
	$this->assertTrue(function_exists('igk_html_engine_parent_push_node'), 'function igk_html_engine_parent_push_node not exists'); 
	}
	/** @test */
	public function testigk_html_escape_tag(){ 
	$this->assertTrue(function_exists('igk_html_escape_tag'), 'function igk_html_escape_tag not exists'); 
	}
	/** @test */
	public function testigk_html_eval_article(){ 
	$this->assertTrue(function_exists('igk_html_eval_article'), 'function igk_html_eval_article not exists'); 
	}
	/** @test */
	public function testigk_html_eval_global_script(){ 
	$this->assertTrue(function_exists('igk_html_eval_global_script'), 'function igk_html_eval_global_script not exists'); 
	}
	/** @test */
	public function testigk_html_eval_script(){ 
	$this->assertTrue(function_exists('igk_html_eval_script'), 'function igk_html_eval_script not exists'); 
	}
	/** @test */
	public function testigk_html_eval_value_in_context(){ 
	$this->assertTrue(function_exists('igk_html_eval_value_in_context'), 'function igk_html_eval_value_in_context not exists'); 
	}
	/** @test */
	public function testigk_html_form_is_valid_token(){ 
	$this->assertTrue(function_exists('igk_html_form_is_valid_token'), 'function igk_html_form_is_valid_token not exists'); 
	}
	/** @test */
	public function testigk_html_form_tokenid(){ 
	$this->assertTrue(function_exists('igk_html_form_tokenid'), 'function igk_html_form_tokenid not exists'); 
	}
	/** @test */
	public function testigk_html_form_validate(){ 
	$this->assertTrue(function_exists('igk_html_form_validate'), 'function igk_html_form_validate not exists'); 
	}
	/** @test */
	public function testigk_html_frame(){ 
	$this->assertTrue(function_exists('igk_html_frame'), 'function igk_html_frame not exists'); 
	}
	/** @test */
	public function testigk_html_frame_ex(){ 
	$this->assertTrue(function_exists('igk_html_frame_ex'), 'function igk_html_frame_ex not exists'); 
	}
	/** @test */
	public function testigk_html_from_string(){ 
	$this->assertTrue(function_exists('igk_html_from_string'), 'function igk_html_from_string not exists'); 
	}
	/** @test */
	public function testigk_html_get_component_demo(){ 
	$this->assertTrue(function_exists('igk_html_get_component_demo'), 'function igk_html_get_component_demo not exists'); 
	}
	/** @test */
	public function testigk_html_get_component_packages(){ 
	$this->assertTrue(function_exists('igk_html_get_component_packages'), 'function igk_html_get_component_packages not exists'); 
	}
	/** @test */
	public function testigk_html_get_depth_indent(){ 
	$this->assertTrue(function_exists('igk_html_get_depth_indent'), 'function igk_html_get_depth_indent not exists'); 
	}
	/** @test */
	public function testigk_html_get_document_class(){ 
	$this->assertTrue(function_exists('igk_html_get_document_class'), 'function igk_html_get_document_class not exists'); 
	}
	/** @test */
	public function testigk_html_get_expression(){ 
	$this->assertTrue(function_exists('igk_html_get_expression'), 'function igk_html_get_expression not exists'); 
	}
	/** @test */
	public function testigk_html_get_func_param(){ 
	$this->assertTrue(function_exists('igk_html_get_func_param'), 'function igk_html_get_func_param not exists'); 
	}
	/** @test */
	public function testigk_html_get_heararchi(){ 
	$this->assertTrue(function_exists('igk_html_get_heararchi'), 'function igk_html_get_heararchi not exists'); 
	}
	/** @test */
	public function testigk_html_get_inner_heararchi(){ 
	$this->assertTrue(function_exists('igk_html_get_inner_heararchi'), 'function igk_html_get_inner_heararchi not exists'); 
	}
	/** @test */
	public function testigk_html_get_system_uri(){ 
	$this->assertTrue(function_exists('igk_html_get_system_uri'), 'function igk_html_get_system_uri not exists'); 
	}
	/** @test */
	public function testigk_html_get_title(){ 
	$this->assertTrue(function_exists('igk_html_get_title'), 'function igk_html_get_title not exists'); 
	}
	/** @test */
	public function testigk_html_getallchilds(){ 
	$this->assertTrue(function_exists('igk_html_getallchilds'), 'function igk_html_getallchilds not exists'); 
	}
	/** @test */
	public function testigk_html_hearachi(){ 
	$this->assertTrue(function_exists('igk_html_hearachi'), 'function igk_html_hearachi not exists'); 
	}
	/** @test */
	public function testigk_html_indent_line(){ 
	$this->assertTrue(function_exists('igk_html_indent_line'), 'function igk_html_indent_line not exists'); 
	}
	/** @test */
	public function testigk_html_index_of(){ 
	$this->assertTrue(function_exists('igk_html_index_of'), 'function igk_html_index_of not exists'); 
	}
	/** @test */
	public function testigk_html_init_node_page(){ 
	$this->assertTrue(function_exists('igk_html_init_node_page'), 'function igk_html_init_node_page not exists'); 
	}
	/** @test */
	public function testigk_html_initbindexpression(){ 
	$this->assertTrue(function_exists('igk_html_initbindexpression'), 'function igk_html_initbindexpression not exists'); 
	}
	/** @test */
	public function testigk_html_initbodymainscript(){ 
	$this->assertTrue(function_exists('igk_html_initbodymainscript'), 'function igk_html_initbodymainscript not exists'); 
	}
	/** @test */
	public function testigk_html_initform(){ 
	$this->assertTrue(function_exists('igk_html_initform'), 'function igk_html_initform not exists'); 
	}
	/** @test */
	public function testigk_html_initmenu(){ 
	$this->assertTrue(function_exists('igk_html_initmenu'), 'function igk_html_initmenu not exists'); 
	}
	/** @test */
	public function testigk_html_inlinedata(){ 
	$this->assertTrue(function_exists('igk_html_inlinedata'), 'function igk_html_inlinedata not exists'); 
	}
	/** @test */
	public function testigk_html_is_fullurirequest(){ 
	$this->assertTrue(function_exists('igk_html_is_fullurirequest'), 'function igk_html_is_fullurirequest not exists'); 
	}
	/** @test */
	public function testigk_html_is_ns_child(){ 
	$this->assertTrue(function_exists('igk_html_is_ns_child'), 'function igk_html_is_ns_child not exists'); 
	}
	/** @test */
	public function testigk_html_is_tagname(){ 
	$this->assertTrue(function_exists('igk_html_is_tagname'), 'function igk_html_is_tagname not exists'); 
	}
	/** @test */
	public function testigk_html_loading_frame(){ 
	$this->assertTrue(function_exists('igk_html_loading_frame'), 'function igk_html_loading_frame not exists'); 
	}
	/** @test */
	public function testigk_html_mustclosetag(){ 
	$this->assertTrue(function_exists('igk_html_mustclosetag'), 'function igk_html_mustclosetag not exists'); 
	}
	/** @test */
	public function testigk_html_new(){ 
	$this->assertTrue(function_exists('igk_html_new'), 'function igk_html_new not exists'); 
	}
	/** @test */
	public function testigk_html_newnode(){ 
	$this->assertTrue(function_exists('igk_html_newnode'), 'function igk_html_newnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_configsubmenu(){ 
	$this->assertTrue(function_exists('igk_html_node_configsubmenu'), 'function igk_html_node_configsubmenu not exists'); 
	}
	/** @test */
	public function testigk_html_node_text(){ 
	$this->assertTrue(function_exists('igk_html_node_text'), 'function igk_html_node_text not exists'); 
	}
	/** @test */
	public function testigk_html_output(){ 
	$this->assertTrue(function_exists('igk_html_output'), 'function igk_html_output not exists'); 
	}
	/** @test */
	public function testigk_html_parent_node(){ 
	$this->assertTrue(function_exists('igk_html_parent_node'), 'function igk_html_parent_node not exists'); 
	}
	/** @test */
	public function testigk_html_php_eval(){ 
	$this->assertTrue(function_exists('igk_html_php_eval'), 'function igk_html_php_eval not exists'); 
	}
	/** @test */
	public function testigk_html_php_evallocalized_expression(){ 
	$this->assertTrue(function_exists('igk_html_php_evallocalized_expression'), 'function igk_html_php_evallocalized_expression not exists'); 
	}
	/** @test */
	public function testigk_html_pop_node_parent(){ 
	$this->assertTrue(function_exists('igk_html_pop_node_parent'), 'function igk_html_pop_node_parent not exists'); 
	}
	/** @test */
	public function testigk_html_popt(){ 
	$this->assertTrue(function_exists('igk_html_popt'), 'function igk_html_popt not exists'); 
	}
	/** @test */
	public function testigk_html_push_node_parent(){ 
	$this->assertTrue(function_exists('igk_html_push_node_parent'), 'function igk_html_push_node_parent not exists'); 
	}
	/** @test */
	public function testigk_html_pusht(){ 
	$this->assertTrue(function_exists('igk_html_pusht'), 'function igk_html_pusht not exists'); 
	}
	/** @test */
	public function testigk_html_query_parse(){ 
	$this->assertTrue(function_exists('igk_html_query_parse'), 'function igk_html_query_parse not exists'); 
	}
	/** @test */
	public function testigk_html_reg_component_demo(){ 
	$this->assertTrue(function_exists('igk_html_reg_component_demo'), 'function igk_html_reg_component_demo not exists'); 
	}
	/** @test */
	public function testigk_html_reg_component_package(){ 
	$this->assertTrue(function_exists('igk_html_reg_component_package'), 'function igk_html_reg_component_package not exists'); 
	}
	/** @test */
	public function testigk_html_render_all(){ 
	$this->assertTrue(function_exists('igk_html_render_all'), 'function igk_html_render_all not exists'); 
	}
	/** @test */
	public function testigk_html_render_node(){ 
	$this->assertTrue(function_exists('igk_html_render_node'), 'function igk_html_render_node not exists'); 
	}
	/** @test */
	public function testigk_html_render_text_node(){ 
	$this->assertTrue(function_exists('igk_html_render_text_node'), 'function igk_html_render_text_node not exists'); 
	}
	/** @test */
	public function testigk_html_render_xml(){ 
	$this->assertTrue(function_exists('igk_html_render_xml'), 'function igk_html_render_xml not exists'); 
	}
	/** @test */
	public function testigk_html_reset_func_param(){ 
	$this->assertTrue(function_exists('igk_html_reset_func_param'), 'function igk_html_reset_func_param not exists'); 
	}
	/** @test */
	public function testigk_html_resolv_img_uri(){ 
	$this->assertTrue(function_exists('igk_html_resolv_img_uri'), 'function igk_html_resolv_img_uri not exists'); 
	}
	/** @test */
	public function testigk_html_rm(){ 
	$this->assertTrue(function_exists('igk_html_rm'), 'function igk_html_rm not exists'); 
	}
	/** @test */
	public function testigk_html_rm_base_uri(){ 
	$this->assertTrue(function_exists('igk_html_rm_base_uri'), 'function igk_html_rm_base_uri not exists'); 
	}
	/** @test */
	public function testigk_html_save_doc_formail(){ 
	$this->assertTrue(function_exists('igk_html_save_doc_formail'), 'function igk_html_save_doc_formail not exists'); 
	}
	/** @test */
	public function testigk_html_select(){ 
	$this->assertTrue(function_exists('igk_html_select'), 'function igk_html_select not exists'); 
	}
	/** @test */
	public function testigk_html_set_document_class(){ 
	$this->assertTrue(function_exists('igk_html_set_document_class'), 'function igk_html_set_document_class not exists'); 
	}
	/** @test */
	public function testigk_html_set_func_param(){ 
	$this->assertTrue(function_exists('igk_html_set_func_param'), 'function igk_html_set_func_param not exists'); 
	}
	/** @test */
	public function testigk_html_skip_comment(){ 
	$this->assertTrue(function_exists('igk_html_skip_comment'), 'function igk_html_skip_comment not exists'); 
	}
	/** @test */
	public function testigk_html_store_doc_form_mailtransport(){ 
	$this->assertTrue(function_exists('igk_html_store_doc_form_mailtransport'), 'function igk_html_store_doc_form_mailtransport not exists'); 
	}
	/** @test */
	public function testigk_html_strip_comment(){ 
	$this->assertTrue(function_exists('igk_html_strip_comment'), 'function igk_html_strip_comment not exists'); 
	}
	/** @test */
	public function testigk_html_toggle_class(){ 
	$this->assertTrue(function_exists('igk_html_toggle_class'), 'function igk_html_toggle_class not exists'); 
	}
	/** @test */
	public function testigk_html_treat_content(){ 
	$this->assertTrue(function_exists('igk_html_treat_content'), 'function igk_html_treat_content not exists'); 
	}
	/** @test */
	public function testigk_html_treatbinding(){ 
	$this->assertTrue(function_exists('igk_html_treatbinding'), 'function igk_html_treatbinding not exists'); 
	}
	/** @test */
	public function testigk_html_treatbinding_evaldata(){ 
	$this->assertTrue(function_exists('igk_html_treatbinding_evaldata'), 'function igk_html_treatbinding_evaldata not exists'); 
	}
	/** @test */
	public function testigk_html_treatinput(){ 
	$this->assertTrue(function_exists('igk_html_treatinput'), 'function igk_html_treatinput not exists'); 
	}
	/** @test */
	public function testigk_html_unreg_callback_node(){ 
	$this->assertTrue(function_exists('igk_html_unreg_callback_node'), 'function igk_html_unreg_callback_node not exists'); 
	}
	/** @test */
	public function testigk_html_unscape(){ 
	$this->assertTrue(function_exists('igk_html_unscape'), 'function igk_html_unscape not exists'); 
	}
	/** @test */
	public function testigk_html_unset_template_properties(){ 
	$this->assertTrue(function_exists('igk_html_unset_template_properties'), 'function igk_html_unset_template_properties not exists'); 
	}
	/** @test */
	public function testigk_html_use(){ 
	$this->assertTrue(function_exists('igk_html_use'), 'function igk_html_use not exists'); 
	}
	/** @test */
	public function testigk_html_view(){ 
	$this->assertTrue(function_exists('igk_html_view'), 'function igk_html_view not exists'); 
	}
	/** @test */
	public function testigk_html_wln_log(){ 
	$this->assertTrue(function_exists('igk_html_wln_log'), 'function igk_html_wln_log not exists'); 
	}
	/** @test */
	public function testigk_ilog(){ 
	$this->assertTrue(function_exists('igk_ilog'), 'function igk_ilog not exists'); 
	}
	/** @test */
	public function testigk_ilog_assert(){ 
	$this->assertTrue(function_exists('igk_ilog_assert'), 'function igk_ilog_assert not exists'); 
	}
	/** @test */
	public function testigk_ilog_clear(){ 
	$this->assertTrue(function_exists('igk_ilog_clear'), 'function igk_ilog_clear not exists'); 
	}
	/** @test */
	public function testigk_ilog_dump(){ 
	$this->assertTrue(function_exists('igk_ilog_dump'), 'function igk_ilog_dump not exists'); 
	}
	/** @test */
	public function testigk_ilog_file(){ 
	$this->assertTrue(function_exists('igk_ilog_file'), 'function igk_ilog_file not exists'); 
	}
	/** @test */
	public function testigk_ilog_get_trace(){ 
	$this->assertTrue(function_exists('igk_ilog_get_trace'), 'function igk_ilog_get_trace not exists'); 
	}
	/** @test */
	public function testigk_ilog_trace(){ 
	$this->assertTrue(function_exists('igk_ilog_trace'), 'function igk_ilog_trace not exists'); 
	}
	/** @test */
	public function testigk_implode(){ 
	$this->assertTrue(function_exists('igk_implode'), 'function igk_implode not exists'); 
	}
	/** @test */
	public function testigk_in_article(){ 
	$this->assertTrue(function_exists('igk_in_article'), 'function igk_in_article not exists'); 
	}
	/** @test */
	public function testigk_include(){ 
	$this->assertTrue(function_exists('igk_include'), 'function igk_include not exists'); 
	}
	/** @test */
	public function testigk_include_file(){ 
	$this->assertTrue(function_exists('igk_include_file'), 'function igk_include_file not exists'); 
	}
	/** @test */
	public function testigk_include_on_global(){ 
	$this->assertTrue(function_exists('igk_include_on_global'), 'function igk_include_on_global not exists'); 
	}
	/** @test */
	public function testigk_include_script(){ 
	$this->assertTrue(function_exists('igk_include_script'), 'function igk_include_script not exists'); 
	}
	/** @test */
	public function testigk_include_set_view(){ 
	$this->assertTrue(function_exists('igk_include_set_view'), 'function igk_include_set_view not exists'); 
	}
	/** @test */
	public function testigk_include_unset_view(){ 
	$this->assertTrue(function_exists('igk_include_unset_view'), 'function igk_include_unset_view not exists'); 
	}
	/** @test */
	public function testigk_include_utils(){ 
	$this->assertTrue(function_exists('igk_include_utils'), 'function igk_include_utils not exists'); 
	}
	/** @test */
	public function testigk_include_view(){ 
	$this->assertTrue(function_exists('igk_include_view'), 'function igk_include_view not exists'); 
	}
	/** @test */
	public function testigk_init_access(){ 
	$this->assertTrue(function_exists('igk_init_access'), 'function igk_init_access not exists'); 
	}
	/** @test */
	public function testigk_init_context_array_diff(){ 
	$this->assertTrue(function_exists('igk_init_context_array_diff'), 'function igk_init_context_array_diff not exists'); 
	}
	/** @test */
	public function testigk_init_controller(){ 
	$this->assertTrue(function_exists('igk_init_controller'), 'function igk_init_controller not exists'); 
	}
	/** @test */
	public function testigk_init_ctrl(){ 
	$this->assertTrue(function_exists('igk_init_ctrl'), 'function igk_init_ctrl not exists'); 
	}
	/** @test */
	public function testigk_init_html_basic_method(){ 
	$this->assertTrue(function_exists('igk_init_html_basic_method'), 'function igk_init_html_basic_method not exists'); 
	}
	/** @test */
	public function testigk_init_include(){ 
	$this->assertTrue(function_exists('igk_init_include'), 'function igk_init_include not exists'); 
	}
	/** @test */
	public function testigk_init_module(){ 
	$this->assertTrue(function_exists('igk_init_module'), 'function igk_init_module not exists'); 
	}
	/** @test */
	public function testigk_init_user_info(){ 
	$this->assertTrue(function_exists('igk_init_user_info'), 'function igk_init_user_info not exists'); 
	}
	/** @test */
	public function testigk_initenv(){ 
	$this->assertTrue(function_exists('igk_initenv'), 'function igk_initenv not exists'); 
	}
	/** @test */
	public function testigk_install_module(){ 
	$this->assertTrue(function_exists('igk_install_module'), 'function igk_install_module not exists'); 
	}
	/** @test */
	public function testigk_internal_reslinkaccess(){ 
	$this->assertTrue(function_exists('igk_internal_reslinkaccess'), 'function igk_internal_reslinkaccess not exists'); 
	}
	/** @test */
	public function testigk_invalidate_opcache(){ 
	$this->assertTrue(function_exists('igk_invalidate_opcache'), 'function igk_invalidate_opcache not exists'); 
	}
	/** @test */
	public function testigk_invoke_callback_obj(){ 
	$this->assertTrue(function_exists('igk_invoke_callback_obj'), 'function igk_invoke_callback_obj not exists'); 
	}
	/** @test */
	public function testigk_invoke_export_callback(){ 
	$this->assertTrue(function_exists('igk_invoke_export_callback'), 'function igk_invoke_export_callback not exists'); 
	}
	/** @test */
	public function testigk_invoke_in_session(){ 
	$this->assertTrue(function_exists('igk_invoke_in_session'), 'function igk_invoke_in_session not exists'); 
	}
	/** @test */
	public function testigk_invoke_param(){ 
	$this->assertTrue(function_exists('igk_invoke_param'), 'function igk_invoke_param not exists'); 
	}
	/** @test */
	public function testigk_invoke_pipe(){ 
	$this->assertTrue(function_exists('igk_invoke_pipe'), 'function igk_invoke_pipe not exists'); 
	}
	/** @test */
	public function testigk_invoke_script(){ 
	$this->assertTrue(function_exists('igk_invoke_script'), 'function igk_invoke_script not exists'); 
	}
	/** @test */
	public function testigk_invoke_session_event(){ 
	$this->assertTrue(function_exists('igk_invoke_session_event'), 'function igk_invoke_session_event not exists'); 
	}
	/** @test */
	public function testigk_invoke_widget_zone(){ 
	$this->assertTrue(function_exists('igk_invoke_widget_zone'), 'function igk_invoke_widget_zone not exists'); 
	}
	/** @test */
	public function testigk_io_a2file(){ 
	$this->assertTrue(function_exists('igk_io_a2file'), 'function igk_io_a2file not exists'); 
	}
	/** @test */
	public function testigk_io_access(){ 
	$this->assertTrue(function_exists('igk_io_access'), 'function igk_io_access not exists'); 
	}
	/** @test */
	public function testigk_io_append_to_file(){ 
	$this->assertTrue(function_exists('igk_io_append_to_file'), 'function igk_io_append_to_file not exists'); 
	}
	/** @test */
	public function testigk_io_applicationdatadir(){ 
	$this->assertTrue(function_exists('igk_io_applicationdatadir'), 'function igk_io_applicationdatadir not exists'); 
	}
	/** @test */
	public function testigk_io_applicationdir(){ 
	$this->assertTrue(function_exists('igk_io_applicationdir'), 'function igk_io_applicationdir not exists'); 
	}
	/** @test */
	public function testigk_io_arg_from(){ 
	$this->assertTrue(function_exists('igk_io_arg_from'), 'function igk_io_arg_from not exists'); 
	}
	/** @test */
	public function testigk_io_base_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_base_request_uri'), 'function igk_io_base_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_base_request_uri_info(){ 
	$this->assertTrue(function_exists('igk_io_base_request_uri_info'), 'function igk_io_base_request_uri_info not exists'); 
	}
	/** @test */
	public function testigk_io_basedatadir(){ 
	$this->assertTrue(function_exists('igk_io_basedatadir'), 'function igk_io_basedatadir not exists'); 
	}
	/** @test */
	public function testigk_io_basedir(){ 
	$this->assertTrue(function_exists('igk_io_basedir'), 'function igk_io_basedir not exists'); 
	}
	/** @test */
	public function testigk_io_basedir_is_root(){ 
	$this->assertTrue(function_exists('igk_io_basedir_is_root'), 'function igk_io_basedir_is_root not exists'); 
	}
	/** @test */
	public function testigk_io_basedomainuri(){ 
	$this->assertTrue(function_exists('igk_io_basedomainuri'), 'function igk_io_basedomainuri not exists'); 
	}
	/** @test */
	public function testigk_io_basepath(){ 
	$this->assertTrue(function_exists('igk_io_basepath'), 'function igk_io_basepath not exists'); 
	}
	/** @test */
	public function testigk_io_baserelativepath(){ 
	$this->assertTrue(function_exists('igk_io_baserelativepath'), 'function igk_io_baserelativepath not exists'); 
	}
	/** @test */
	public function testigk_io_baserelativeuri(){ 
	$this->assertTrue(function_exists('igk_io_baserelativeuri'), 'function igk_io_baserelativeuri not exists'); 
	}
	/** @test */
	public function testigk_io_baseuri(){ 
	$this->assertTrue(function_exists('igk_io_baseuri'), 'function igk_io_baseuri not exists'); 
	}
	/** @test */
	public function testigk_io_baseuri_i(){ 
	$this->assertTrue(function_exists('igk_io_baseuri_i'), 'function igk_io_baseuri_i not exists'); 
	}
	/** @test */
	public function testigk_io_cacheddist_jsdir(){ 
	$this->assertTrue(function_exists('igk_io_cacheddist_jsdir'), 'function igk_io_cacheddist_jsdir not exists'); 
	}
	/** @test */
	public function testigk_io_cachedir(){ 
	$this->assertTrue(function_exists('igk_io_cachedir'), 'function igk_io_cachedir not exists'); 
	}
	/** @test */
	public function testigk_io_cacheinfo(){ 
	$this->assertTrue(function_exists('igk_io_cacheinfo'), 'function igk_io_cacheinfo not exists'); 
	}
	/** @test */
	public function testigk_io_check_request_file(){ 
	$this->assertTrue(function_exists('igk_io_check_request_file'), 'function igk_io_check_request_file not exists'); 
	}
	/** @test */
	public function testigk_io_collapse_path(){ 
	$this->assertTrue(function_exists('igk_io_collapse_path'), 'function igk_io_collapse_path not exists'); 
	}
	/** @test */
	public function testigk_io_combine(){ 
	$this->assertTrue(function_exists('igk_io_combine'), 'function igk_io_combine not exists'); 
	}
	/** @test */
	public function testigk_io_controller_classes_lib_dir(){ 
	$this->assertTrue(function_exists('igk_io_controller_classes_lib_dir'), 'function igk_io_controller_classes_lib_dir not exists'); 
	}
	/** @test */
	public function testigk_io_controller_tests_lib_dir(){ 
	$this->assertTrue(function_exists('igk_io_controller_tests_lib_dir'), 'function igk_io_controller_tests_lib_dir not exists'); 
	}
	/** @test */
	public function testigk_io_copy_stream(){ 
	$this->assertTrue(function_exists('igk_io_copy_stream'), 'function igk_io_copy_stream not exists'); 
	}
	/** @test */
	public function testigk_io_corejs_uri(){ 
	$this->assertTrue(function_exists('igk_io_corejs_uri'), 'function igk_io_corejs_uri not exists'); 
	}
	/** @test */
	public function testigk_io_corestyle_uri(){ 
	$this->assertTrue(function_exists('igk_io_corestyle_uri'), 'function igk_io_corestyle_uri not exists'); 
	}
	/** @test */
	public function testigk_io_createdir(){ 
	$this->assertTrue(function_exists('igk_io_createdir'), 'function igk_io_createdir not exists'); 
	}
	/** @test */
	public function testigk_io_ctrl_db_dir(){ 
	$this->assertTrue(function_exists('igk_io_ctrl_db_dir'), 'function igk_io_ctrl_db_dir not exists'); 
	}
	/** @test */
	public function testigk_io_ctrl_handle_uri(){ 
	$this->assertTrue(function_exists('igk_io_ctrl_handle_uri'), 'function igk_io_ctrl_handle_uri not exists'); 
	}
	/** @test */
	public function testigk_io_current_page_folder(){ 
	$this->assertTrue(function_exists('igk_io_current_page_folder'), 'function igk_io_current_page_folder not exists'); 
	}
	/** @test */
	public function testigk_io_current_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_current_request_uri'), 'function igk_io_current_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_currentbasedomainuri(){ 
	$this->assertTrue(function_exists('igk_io_currentbasedomainuri'), 'function igk_io_currentbasedomainuri not exists'); 
	}
	/** @test */
	public function testigk_io_currentdomainuri(){ 
	$this->assertTrue(function_exists('igk_io_currentdomainuri'), 'function igk_io_currentdomainuri not exists'); 
	}
	/** @test */
	public function testigk_io_currentrelativepath(){ 
	$this->assertTrue(function_exists('igk_io_currentrelativepath'), 'function igk_io_currentrelativepath not exists'); 
	}
	/** @test */
	public function testigk_io_currentrelativeuri(){ 
	$this->assertTrue(function_exists('igk_io_currentrelativeuri'), 'function igk_io_currentrelativeuri not exists'); 
	}
	/** @test */
	public function testigk_io_currenturi(){ 
	$this->assertTrue(function_exists('igk_io_currenturi'), 'function igk_io_currenturi not exists'); 
	}
	/** @test */
	public function testigk_io_cwdrelativepath(){ 
	$this->assertTrue(function_exists('igk_io_cwdrelativepath'), 'function igk_io_cwdrelativepath not exists'); 
	}
	/** @test */
	public function testigk_io_dir(){ 
	$this->assertTrue(function_exists('igk_io_dir'), 'function igk_io_dir not exists'); 
	}
	/** @test */
	public function testigk_io_dir_level(){ 
	$this->assertTrue(function_exists('igk_io_dir_level'), 'function igk_io_dir_level not exists'); 
	}
	/** @test */
	public function testigk_io_dirs(){ 
	$this->assertTrue(function_exists('igk_io_dirs'), 'function igk_io_dirs not exists'); 
	}
	/** @test */
	public function testigk_io_dispatch_file(){ 
	$this->assertTrue(function_exists('igk_io_dispatch_file'), 'function igk_io_dispatch_file not exists'); 
	}
	/** @test */
	public function testigk_io_doc_root_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_doc_root_request_uri'), 'function igk_io_doc_root_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_domain_uri_name(){ 
	$this->assertTrue(function_exists('igk_io_domain_uri_name'), 'function igk_io_domain_uri_name not exists'); 
	}
	/** @test */
	public function testigk_io_entry_path_uri(){ 
	$this->assertTrue(function_exists('igk_io_entry_path_uri'), 'function igk_io_entry_path_uri not exists'); 
	}
	/** @test */
	public function testigk_io_entry_relative_path_uri(){ 
	$this->assertTrue(function_exists('igk_io_entry_relative_path_uri'), 'function igk_io_entry_relative_path_uri not exists'); 
	}
	/** @test */
	public function testigk_io_expand_path(){ 
	$this->assertTrue(function_exists('igk_io_expand_path'), 'function igk_io_expand_path not exists'); 
	}
	/** @test */
	public function testigk_io_fileispicture(){ 
	$this->assertTrue(function_exists('igk_io_fileispicture'), 'function igk_io_fileispicture not exists'); 
	}
	/** @test */
	public function testigk_io_force_dir_entry(){ 
	$this->assertTrue(function_exists('igk_io_force_dir_entry'), 'function igk_io_force_dir_entry not exists'); 
	}
	/** @test */
	public function testigk_io_fullbaserequesturi(){ 
	$this->assertTrue(function_exists('igk_io_fullbaserequesturi'), 'function igk_io_fullbaserequesturi not exists'); 
	}
	/** @test */
	public function testigk_io_fullpath(){ 
	$this->assertTrue(function_exists('igk_io_fullpath'), 'function igk_io_fullpath not exists'); 
	}
	/** @test */
	public function testigk_io_fullpath2fulluri(){ 
	$this->assertTrue(function_exists('igk_io_fullpath2fulluri'), 'function igk_io_fullpath2fulluri not exists'); 
	}
	/** @test */
	public function testigk_io_fullpath2uri(){ 
	$this->assertTrue(function_exists('igk_io_fullpath2uri'), 'function igk_io_fullpath2uri not exists'); 
	}
	/** @test */
	public function testigk_io_fullrequesturi(){ 
	$this->assertTrue(function_exists('igk_io_fullrequesturi'), 'function igk_io_fullrequesturi not exists'); 
	}
	/** @test */
	public function testigk_io_fulluri2basedir(){ 
	$this->assertTrue(function_exists('igk_io_fulluri2basedir'), 'function igk_io_fulluri2basedir not exists'); 
	}
	/** @test */
	public function testigk_io_get_article(){ 
	$this->assertTrue(function_exists('igk_io_get_article'), 'function igk_io_get_article not exists'); 
	}
	/** @test */
	public function testigk_io_get_article_file(){ 
	$this->assertTrue(function_exists('igk_io_get_article_file'), 'function igk_io_get_article_file not exists'); 
	}
	/** @test */
	public function testigk_io_get_entry_uri(){ 
	$this->assertTrue(function_exists('igk_io_get_entry_uri'), 'function igk_io_get_entry_uri not exists'); 
	}
	/** @test */
	public function testigk_io_get_full_entry_uri(){ 
	$this->assertTrue(function_exists('igk_io_get_full_entry_uri'), 'function igk_io_get_full_entry_uri not exists'); 
	}
	/** @test */
	public function testigk_io_get_relative_currenturi(){ 
	$this->assertTrue(function_exists('igk_io_get_relative_currenturi'), 'function igk_io_get_relative_currenturi not exists'); 
	}
	/** @test */
	public function testigk_io_get_uploaded_data(){ 
	$this->assertTrue(function_exists('igk_io_get_uploaded_data'), 'function igk_io_get_uploaded_data not exists'); 
	}
	/** @test */
	public function testigk_io_get_uri(){ 
	$this->assertTrue(function_exists('igk_io_get_uri'), 'function igk_io_get_uri not exists'); 
	}
	/** @test */
	public function testigk_io_get_wbom_files(){ 
	$this->assertTrue(function_exists('igk_io_get_wbom_files'), 'function igk_io_get_wbom_files not exists'); 
	}
	/** @test */
	public function testigk_io_getconf_file(){ 
	$this->assertTrue(function_exists('igk_io_getconf_file'), 'function igk_io_getconf_file not exists'); 
	}
	/** @test */
	public function testigk_io_getdbconf_file(){ 
	$this->assertTrue(function_exists('igk_io_getdbconf_file'), 'function igk_io_getdbconf_file not exists'); 
	}
	/** @test */
	public function testigk_io_getfiles(){ 
	$this->assertTrue(function_exists('igk_io_getfiles'), 'function igk_io_getfiles not exists'); 
	}
	/** @test */
	public function testigk_io_getfullpath(){ 
	$this->assertTrue(function_exists('igk_io_getfullpath'), 'function igk_io_getfullpath not exists'); 
	}
	/** @test */
	public function testigk_io_getrelativepath(){ 
	$this->assertTrue(function_exists('igk_io_getrelativepath'), 'function igk_io_getrelativepath not exists'); 
	}
	/** @test */
	public function testigk_io_getviewname(){ 
	$this->assertTrue(function_exists('igk_io_getviewname'), 'function igk_io_getviewname not exists'); 
	}
	/** @test */
	public function testigk_io_global_uri(){ 
	$this->assertTrue(function_exists('igk_io_global_uri'), 'function igk_io_global_uri not exists'); 
	}
	/** @test */
	public function testigk_io_handle_redirection_uri(){ 
	$this->assertTrue(function_exists('igk_io_handle_redirection_uri'), 'function igk_io_handle_redirection_uri not exists'); 
	}
	/** @test */
	public function testigk_io_handle_system_command(){ 
	$this->assertTrue(function_exists('igk_io_handle_system_command'), 'function igk_io_handle_system_command not exists'); 
	}
	/** @test */
	public function testigk_io_html_link(){ 
	$this->assertTrue(function_exists('igk_io_html_link'), 'function igk_io_html_link not exists'); 
	}
	/** @test */
	public function testigk_io_htmluri(){ 
	$this->assertTrue(function_exists('igk_io_htmluri'), 'function igk_io_htmluri not exists'); 
	}
	/** @test */
	public function testigk_io_idirs(){ 
	$this->assertTrue(function_exists('igk_io_idirs'), 'function igk_io_idirs not exists'); 
	}
	/** @test */
	public function testigk_io_invoke_uri(){ 
	$this->assertTrue(function_exists('igk_io_invoke_uri'), 'function igk_io_invoke_uri not exists'); 
	}
	/** @test */
	public function testigk_io_is_ctrl_uri(){ 
	$this->assertTrue(function_exists('igk_io_is_ctrl_uri'), 'function igk_io_is_ctrl_uri not exists'); 
	}
	/** @test */
	public function testigk_io_is_file(){ 
	$this->assertTrue(function_exists('igk_io_is_file'), 'function igk_io_is_file not exists'); 
	}
	/** @test */
	public function testigk_io_is_fullpath(){ 
	$this->assertTrue(function_exists('igk_io_is_fullpath'), 'function igk_io_is_fullpath not exists'); 
	}
	/** @test */
	public function testigk_io_is_subdir(){ 
	$this->assertTrue(function_exists('igk_io_is_subdir'), 'function igk_io_is_subdir not exists'); 
	}
	/** @test */
	public function testigk_io_is_subdomain_uri(){ 
	$this->assertTrue(function_exists('igk_io_is_subdomain_uri'), 'function igk_io_is_subdomain_uri not exists'); 
	}
	/** @test */
	public function testigk_io_libdiruri(){ 
	$this->assertTrue(function_exists('igk_io_libdiruri'), 'function igk_io_libdiruri not exists'); 
	}
	/** @test */
	public function testigk_io_locate_view_file(){ 
	$this->assertTrue(function_exists('igk_io_locate_view_file'), 'function igk_io_locate_view_file not exists'); 
	}
	/** @test */
	public function testigk_io_move_uploaded_file(){ 
	$this->assertTrue(function_exists('igk_io_move_uploaded_file'), 'function igk_io_move_uploaded_file not exists'); 
	}
	/** @test */
	public function testigk_io_moveuploadedfiletodatafolder(){ 
	$this->assertTrue(function_exists('igk_io_moveuploadedfiletodatafolder'), 'function igk_io_moveuploadedfiletodatafolder not exists'); 
	}
	/** @test */
	public function testigk_io_packagesdir(){ 
	$this->assertTrue(function_exists('igk_io_packagesdir'), 'function igk_io_packagesdir not exists'); 
	}
	/** @test */
	public function testigk_io_projectdir(){ 
	$this->assertTrue(function_exists('igk_io_projectdir'), 'function igk_io_projectdir not exists'); 
	}
	/** @test */
	public function testigk_io_protect_request(){ 
	$this->assertTrue(function_exists('igk_io_protect_request'), 'function igk_io_protect_request not exists'); 
	}
	/** @test */
	public function testigk_io_protect_request_ajx(){ 
	$this->assertTrue(function_exists('igk_io_protect_request_ajx'), 'function igk_io_protect_request_ajx not exists'); 
	}
	/** @test */
	public function testigk_io_push_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_push_request_uri'), 'function igk_io_push_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_query_info(){ 
	$this->assertTrue(function_exists('igk_io_query_info'), 'function igk_io_query_info not exists'); 
	}
	/** @test */
	public function testigk_io_query_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_query_request_uri'), 'function igk_io_query_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_read_allfile(){ 
	$this->assertTrue(function_exists('igk_io_read_allfile'), 'function igk_io_read_allfile not exists'); 
	}
	/** @test */
	public function testigk_io_read_header(){ 
	$this->assertTrue(function_exists('igk_io_read_header'), 'function igk_io_read_header not exists'); 
	}
	/** @test */
	public function testigk_io_realpath(){ 
	$this->assertTrue(function_exists('igk_io_realpath'), 'function igk_io_realpath not exists'); 
	}
	/** @test */
	public function testigk_io_remove_bom(){ 
	$this->assertTrue(function_exists('igk_io_remove_bom'), 'function igk_io_remove_bom not exists'); 
	}
	/** @test */
	public function testigk_io_removeemptyline(){ 
	$this->assertTrue(function_exists('igk_io_removeemptyline'), 'function igk_io_removeemptyline not exists'); 
	}
	/** @test */
	public function testigk_io_render_res_file(){ 
	$this->assertTrue(function_exists('igk_io_render_res_file'), 'function igk_io_render_res_file not exists'); 
	}
	/** @test */
	public function testigk_io_request_entry(){ 
	$this->assertTrue(function_exists('igk_io_request_entry'), 'function igk_io_request_entry not exists'); 
	}
	/** @test */
	public function testigk_io_request_for_firefox_thumbnails(){ 
	$this->assertTrue(function_exists('igk_io_request_for_firefox_thumbnails'), 'function igk_io_request_for_firefox_thumbnails not exists'); 
	}
	/** @test */
	public function testigk_io_request_uri(){ 
	$this->assertTrue(function_exists('igk_io_request_uri'), 'function igk_io_request_uri not exists'); 
	}
	/** @test */
	public function testigk_io_request_uri_path(){ 
	$this->assertTrue(function_exists('igk_io_request_uri_path'), 'function igk_io_request_uri_path not exists'); 
	}
	/** @test */
	public function testigk_io_reset_query_info(){ 
	$this->assertTrue(function_exists('igk_io_reset_query_info'), 'function igk_io_reset_query_info not exists'); 
	}
	/** @test */
	public function testigk_io_resolv(){ 
	$this->assertTrue(function_exists('igk_io_resolv'), 'function igk_io_resolv not exists'); 
	}
	/** @test */
	public function testigk_io_resourcesdir(){ 
	$this->assertTrue(function_exists('igk_io_resourcesdir'), 'function igk_io_resourcesdir not exists'); 
	}
	/** @test */
	public function testigk_io_rm_redirectvar(){ 
	$this->assertTrue(function_exists('igk_io_rm_redirectvar'), 'function igk_io_rm_redirectvar not exists'); 
	}
	/** @test */
	public function testigk_io_root_entryuri(){ 
	$this->assertTrue(function_exists('igk_io_root_entryuri'), 'function igk_io_root_entryuri not exists'); 
	}
	/** @test */
	public function testigk_io_root_pathrequest(){ 
	$this->assertTrue(function_exists('igk_io_root_pathrequest'), 'function igk_io_root_pathrequest not exists'); 
	}
	/** @test */
	public function testigk_io_root_uri(){ 
	$this->assertTrue(function_exists('igk_io_root_uri'), 'function igk_io_root_uri not exists'); 
	}
	/** @test */
	public function testigk_io_rootbasedir(){ 
	$this->assertTrue(function_exists('igk_io_rootbasedir'), 'function igk_io_rootbasedir not exists'); 
	}
	/** @test */
	public function testigk_io_rootbaserequesturi(){ 
	$this->assertTrue(function_exists('igk_io_rootbaserequesturi'), 'function igk_io_rootbaserequesturi not exists'); 
	}
	/** @test */
	public function testigk_io_rootdir(){ 
	$this->assertTrue(function_exists('igk_io_rootdir'), 'function igk_io_rootdir not exists'); 
	}
	/** @test */
	public function testigk_io_rootrequesturi(){ 
	$this->assertTrue(function_exists('igk_io_rootrequesturi'), 'function igk_io_rootrequesturi not exists'); 
	}
	/** @test */
	public function testigk_io_save_file_as_utf8(){ 
	$this->assertTrue(function_exists('igk_io_save_file_as_utf8'), 'function igk_io_save_file_as_utf8 not exists'); 
	}
	/** @test */
	public function testigk_io_save_file_as_utf8_wbom(){ 
	$this->assertTrue(function_exists('igk_io_save_file_as_utf8_wbom'), 'function igk_io_save_file_as_utf8_wbom not exists'); 
	}
	/** @test */
	public function testigk_io_save_posted_file(){ 
	$this->assertTrue(function_exists('igk_io_save_posted_file'), 'function igk_io_save_posted_file not exists'); 
	}
	/** @test */
	public function testigk_io_savecontentfromtextarea(){ 
	$this->assertTrue(function_exists('igk_io_savecontentfromtextarea'), 'function igk_io_savecontentfromtextarea not exists'); 
	}
	/** @test */
	public function testigk_io_server_name(){ 
	$this->assertTrue(function_exists('igk_io_server_name'), 'function igk_io_server_name not exists'); 
	}
	/** @test */
	public function testigk_io_set_dir_level(){ 
	$this->assertTrue(function_exists('igk_io_set_dir_level'), 'function igk_io_set_dir_level not exists'); 
	}
	/** @test */
	public function testigk_io_store_ajx_uploaded_data(){ 
	$this->assertTrue(function_exists('igk_io_store_ajx_uploaded_data'), 'function igk_io_store_ajx_uploaded_data not exists'); 
	}
	/** @test */
	public function testigk_io_store_conf(){ 
	$this->assertTrue(function_exists('igk_io_store_conf'), 'function igk_io_store_conf not exists'); 
	}
	/** @test */
	public function testigk_io_store_uploaded_base64(){ 
	$this->assertTrue(function_exists('igk_io_store_uploaded_base64'), 'function igk_io_store_uploaded_base64 not exists'); 
	}
	/** @test */
	public function testigk_io_store_uploaded_file(){ 
	$this->assertTrue(function_exists('igk_io_store_uploaded_file'), 'function igk_io_store_uploaded_file not exists'); 
	}
	/** @test */
	public function testigk_io_subdomain_uri_name(){ 
	$this->assertTrue(function_exists('igk_io_subdomain_uri_name'), 'function igk_io_subdomain_uri_name not exists'); 
	}
	/** @test */
	public function testigk_io_symlink(){ 
	$this->assertTrue(function_exists('igk_io_symlink'), 'function igk_io_symlink not exists'); 
	}
	/** @test */
	public function testigk_io_sys_datadir(){ 
	$this->assertTrue(function_exists('igk_io_sys_datadir'), 'function igk_io_sys_datadir not exists'); 
	}
	/** @test */
	public function testigk_io_sys_tempnam(){ 
	$this->assertTrue(function_exists('igk_io_sys_tempnam'), 'function igk_io_sys_tempnam not exists'); 
	}
	/** @test */
	public function testigk_io_syspath(){ 
	$this->assertTrue(function_exists('igk_io_syspath'), 'function igk_io_syspath not exists'); 
	}
	/** @test */
	public function testigk_io_to_uri(){ 
	$this->assertTrue(function_exists('igk_io_to_uri'), 'function igk_io_to_uri not exists'); 
	}
	/** @test */
	public function testigk_io_touch(){ 
	$this->assertTrue(function_exists('igk_io_touch'), 'function igk_io_touch not exists'); 
	}
	/** @test */
	public function testigk_io_treat_lnk_referer(){ 
	$this->assertTrue(function_exists('igk_io_treat_lnk_referer'), 'function igk_io_treat_lnk_referer not exists'); 
	}
	/** @test */
	public function testigk_io_unix_path(){ 
	$this->assertTrue(function_exists('igk_io_unix_path'), 'function igk_io_unix_path not exists'); 
	}
	/** @test */
	public function testigk_io_unlink(){ 
	$this->assertTrue(function_exists('igk_io_unlink'), 'function igk_io_unlink not exists'); 
	}
	/** @test */
	public function testigk_io_uri_is_dir(){ 
	$this->assertTrue(function_exists('igk_io_uri_is_dir'), 'function igk_io_uri_is_dir not exists'); 
	}
	/** @test */
	public function testigk_io_view_entry_uri(){ 
	$this->assertTrue(function_exists('igk_io_view_entry_uri'), 'function igk_io_view_entry_uri not exists'); 
	}
	/** @test */
	public function testigk_io_view_root_entry_uri(){ 
	$this->assertTrue(function_exists('igk_io_view_root_entry_uri'), 'function igk_io_view_root_entry_uri not exists'); 
	}
	/** @test */
	public function testigk_io_w2file(){ 
	$this->assertTrue(function_exists('igk_io_w2file'), 'function igk_io_w2file not exists'); 
	}
	/** @test */
	public function testigk_is_ajx_demand(){ 
	$this->assertTrue(function_exists('igk_is_ajx_demand'), 'function igk_is_ajx_demand not exists'); 
	}
	/** @test */
	public function testigk_is_ajx_form_request(){ 
	$this->assertTrue(function_exists('igk_is_ajx_form_request'), 'function igk_is_ajx_form_request not exists'); 
	}
	/** @test */
	public function testigk_is_array_key_present(){ 
	$this->assertTrue(function_exists('igk_is_array_key_present'), 'function igk_is_array_key_present not exists'); 
	}
	/** @test */
	public function testigk_is_atomic(){ 
	$this->assertTrue(function_exists('igk_is_atomic'), 'function igk_is_atomic not exists'); 
	}
	/** @test */
	public function testigk_is_callable(){ 
	$this->assertTrue(function_exists('igk_is_callable'), 'function igk_is_callable not exists'); 
	}
	/** @test */
	public function testigk_is_callback_obj(){ 
	$this->assertTrue(function_exists('igk_is_callback_obj'), 'function igk_is_callback_obj not exists'); 
	}
	/** @test */
	public function testigk_is_class_included(){ 
	$this->assertTrue(function_exists('igk_is_class_included'), 'function igk_is_class_included not exists'); 
	}
	/** @test */
	public function testigk_is_class_incomplete(){ 
	$this->assertTrue(function_exists('igk_is_class_incomplete'), 'function igk_is_class_incomplete not exists'); 
	}
	/** @test */
	public function testigk_is_class_instance_of(){ 
	$this->assertTrue(function_exists('igk_is_class_instance_of'), 'function igk_is_class_instance_of not exists'); 
	}
	/** @test */
	public function testigk_is_class_subclass_of(){ 
	$this->assertTrue(function_exists('igk_is_class_subclass_of'), 'function igk_is_class_subclass_of not exists'); 
	}
	/** @test */
	public function testigk_is_closure(){ 
	$this->assertTrue(function_exists('igk_is_closure'), 'function igk_is_closure not exists'); 
	}
	/** @test */
	public function testigk_is_conf_connected(){ 
	$this->assertTrue(function_exists('igk_is_conf_connected'), 'function igk_is_conf_connected not exists'); 
	}
	/** @test */
	public function testigk_is_confpagefolder(){ 
	$this->assertTrue(function_exists('igk_is_confpagefolder'), 'function igk_is_confpagefolder not exists'); 
	}
	/** @test */
	public function testigk_is_const_defined(){ 
	$this->assertTrue(function_exists('igk_is_const_defined'), 'function igk_is_const_defined not exists'); 
	}
	/** @test */
	public function testigk_is_controller(){ 
	$this->assertTrue(function_exists('igk_is_controller'), 'function igk_is_controller not exists'); 
	}
	/** @test */
	public function testigk_is_ctrl(){ 
	$this->assertTrue(function_exists('igk_is_ctrl'), 'function igk_is_ctrl not exists'); 
	}
	/** @test */
	public function testigk_is_debug(){ 
	$this->assertTrue(function_exists('igk_is_debug'), 'function igk_is_debug not exists'); 
	}
	/** @test */
	public function testigk_is_debuging(){ 
	$this->assertTrue(function_exists('igk_is_debuging'), 'function igk_is_debuging not exists'); 
	}
	/** @test */
	public function testigk_is_defaultwebpagectrl(){ 
	$this->assertTrue(function_exists('igk_is_defaultwebpagectrl'), 'function igk_is_defaultwebpagectrl not exists'); 
	}
	/** @test */
	public function testigk_is_design_mode(){ 
	$this->assertTrue(function_exists('igk_is_design_mode'), 'function igk_is_design_mode not exists'); 
	}
	/** @test */
	public function testigk_is_domain_name(){ 
	$this->assertTrue(function_exists('igk_is_domain_name'), 'function igk_is_domain_name not exists'); 
	}
	/** @test */
	public function testigk_is_empty(){ 
	$this->assertTrue(function_exists('igk_is_empty'), 'function igk_is_empty not exists'); 
	}
	/** @test */
	public function testigk_is_function_disable(){ 
	$this->assertTrue(function_exists('igk_is_function_disable'), 'function igk_is_function_disable not exists'); 
	}
	/** @test */
	public function testigk_is_html(){ 
	$this->assertTrue(function_exists('igk_is_html'), 'function igk_is_html not exists'); 
	}
	/** @test */
	public function testigk_is_html_node_overriding_view(){ 
	$this->assertTrue(function_exists('igk_is_html_node_overriding_view'), 'function igk_is_html_node_overriding_view not exists'); 
	}
	/** @test */
	public function testigk_is_identifier(){ 
	$this->assertTrue(function_exists('igk_is_identifier'), 'function igk_is_identifier not exists'); 
	}
	/** @test */
	public function testigk_is_included_view(){ 
	$this->assertTrue(function_exists('igk_is_included_view'), 'function igk_is_included_view not exists'); 
	}
	/** @test */
	public function testigk_is_module_present(){ 
	$this->assertTrue(function_exists('igk_is_module_present'), 'function igk_is_module_present not exists'); 
	}
	/** @test */
	public function testigk_is_singlecore_app(){ 
	$this->assertTrue(function_exists('igk_is_singlecore_app'), 'function igk_is_singlecore_app not exists'); 
	}
	/** @test */
	public function testigk_is_srv_request(){ 
	$this->assertTrue(function_exists('igk_is_srv_request'), 'function igk_is_srv_request not exists'); 
	}
	/** @test */
	public function testigk_is_thumbnail_request(){ 
	$this->assertTrue(function_exists('igk_is_thumbnail_request'), 'function igk_is_thumbnail_request not exists'); 
	}
	/** @test */
	public function testigk_is_uri_demand(){ 
	$this->assertTrue(function_exists('igk_is_uri_demand'), 'function igk_is_uri_demand not exists'); 
	}
	/** @test */
	public function testigk_is_webapp(){ 
	$this->assertTrue(function_exists('igk_is_webapp'), 'function igk_is_webapp not exists'); 
	}
	/** @test */
	public function testigk_is_xmlnode(){ 
	$this->assertTrue(function_exists('igk_is_xmlnode'), 'function igk_is_xmlnode not exists'); 
	}
	/** @test */
	public function testigk_js_a_postform(){ 
	$this->assertTrue(function_exists('igk_js_a_postform'), 'function igk_js_a_postform not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_aposturi(){ 
	$this->assertTrue(function_exists('igk_js_ajx_aposturi'), 'function igk_js_ajx_aposturi not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_post_auri(){ 
	$this->assertTrue(function_exists('igk_js_ajx_post_auri'), 'function igk_js_ajx_post_auri not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_post_body_uri(){ 
	$this->assertTrue(function_exists('igk_js_ajx_post_body_uri'), 'function igk_js_ajx_post_body_uri not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_post_luri(){ 
	$this->assertTrue(function_exists('igk_js_ajx_post_luri'), 'function igk_js_ajx_post_luri not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_postform_frame(){ 
	$this->assertTrue(function_exists('igk_js_ajx_postform_frame'), 'function igk_js_ajx_postform_frame not exists'); 
	}
	/** @test */
	public function testigk_js_ajx_view_ctrl(){ 
	$this->assertTrue(function_exists('igk_js_ajx_view_ctrl'), 'function igk_js_ajx_view_ctrl not exists'); 
	}
	/** @test */
	public function testigk_js_bind_script_folder(){ 
	$this->assertTrue(function_exists('igk_js_bind_script_folder'), 'function igk_js_bind_script_folder not exists'); 
	}
	/** @test */
	public function testigk_js_bind_wuiscript(){ 
	$this->assertTrue(function_exists('igk_js_bind_wuiscript'), 'function igk_js_bind_wuiscript not exists'); 
	}
	/** @test */
	public function testigk_js_ctrl_posturi(){ 
	$this->assertTrue(function_exists('igk_js_ctrl_posturi'), 'function igk_js_ctrl_posturi not exists'); 
	}
	/** @test */
	public function testigk_js_dist_scripts(){ 
	$this->assertTrue(function_exists('igk_js_dist_scripts'), 'function igk_js_dist_scripts not exists'); 
	}
	/** @test */
	public function testigk_js_enable_tinymce(){ 
	$this->assertTrue(function_exists('igk_js_enable_tinymce'), 'function igk_js_enable_tinymce not exists'); 
	}
	/** @test */
	public function testigk_js_get_posturi(){ 
	$this->assertTrue(function_exists('igk_js_get_posturi'), 'function igk_js_get_posturi not exists'); 
	}
	/** @test */
	public function testigk_js_get_temp_script_files(){ 
	$this->assertTrue(function_exists('igk_js_get_temp_script_files'), 'function igk_js_get_temp_script_files not exists'); 
	}
	/** @test */
	public function testigk_js_get_temp_script_host(){ 
	$this->assertTrue(function_exists('igk_js_get_temp_script_host'), 'function igk_js_get_temp_script_host not exists'); 
	}
	/** @test */
	public function testigk_js_init(){ 
	$this->assertTrue(function_exists('igk_js_init'), 'function igk_js_init not exists'); 
	}
	/** @test */
	public function testigk_js_init_doc(){ 
	$this->assertTrue(function_exists('igk_js_init_doc'), 'function igk_js_init_doc not exists'); 
	}
	/** @test */
	public function testigk_js_inline_text(){ 
	$this->assertTrue(function_exists('igk_js_inline_text'), 'function igk_js_inline_text not exists'); 
	}
	/** @test */
	public function testigk_js_lnk_confirm(){ 
	$this->assertTrue(function_exists('igk_js_lnk_confirm'), 'function igk_js_lnk_confirm not exists'); 
	}
	/** @test */
	public function testigk_js_load_found_script(){ 
	$this->assertTrue(function_exists('igk_js_load_found_script'), 'function igk_js_load_found_script not exists'); 
	}
	/** @test */
	public function testigk_js_load_script(){ 
	$this->assertTrue(function_exists('igk_js_load_script'), 'function igk_js_load_script not exists'); 
	}
	/** @test */
	public function testigk_js_minify(){ 
	$this->assertTrue(function_exists('igk_js_minify'), 'function igk_js_minify not exists'); 
	}
	/** @test */
	public function testigk_js_no_autoload(){ 
	$this->assertTrue(function_exists('igk_js_no_autoload'), 'function igk_js_no_autoload not exists'); 
	}
	/** @test */
	public function testigk_js_notify_danger(){ 
	$this->assertTrue(function_exists('igk_js_notify_danger'), 'function igk_js_notify_danger not exists'); 
	}
	/** @test */
	public function testigk_js_post_form_uri(){ 
	$this->assertTrue(function_exists('igk_js_post_form_uri'), 'function igk_js_post_form_uri not exists'); 
	}
	/** @test */
	public function testigk_js_post_frame(){ 
	$this->assertTrue(function_exists('igk_js_post_frame'), 'function igk_js_post_frame not exists'); 
	}
	/** @test */
	public function testigk_js_post_frame_cmd(){ 
	$this->assertTrue(function_exists('igk_js_post_frame_cmd'), 'function igk_js_post_frame_cmd not exists'); 
	}
	/** @test */
	public function testigk_js_post_uri(){ 
	$this->assertTrue(function_exists('igk_js_post_uri'), 'function igk_js_post_uri not exists'); 
	}
	/** @test */
	public function testigk_js_push_history_ajx(){ 
	$this->assertTrue(function_exists('igk_js_push_history_ajx'), 'function igk_js_push_history_ajx not exists'); 
	}
	/** @test */
	public function testigk_js_reg_global_script(){ 
	$this->assertTrue(function_exists('igk_js_reg_global_script'), 'function igk_js_reg_global_script not exists'); 
	}
	/** @test */
	public function testigk_js_render_script(){ 
	$this->assertTrue(function_exists('igk_js_render_script'), 'function igk_js_render_script not exists'); 
	}
	/** @test */
	public function testigk_js_winui_init_history(){ 
	$this->assertTrue(function_exists('igk_js_winui_init_history'), 'function igk_js_winui_init_history not exists'); 
	}
	/** @test */
	public function testigk_json(){ 
	$this->assertTrue(function_exists('igk_json'), 'function igk_json not exists'); 
	}
	/** @test */
	public function testigk_json_array_parse(){ 
	$this->assertTrue(function_exists('igk_json_array_parse'), 'function igk_json_array_parse not exists'); 
	}
	/** @test */
	public function testigk_json_encode(){ 
	$this->assertTrue(function_exists('igk_json_encode'), 'function igk_json_encode not exists'); 
	}
	/** @test */
	public function testigk_json_expression(){ 
	$this->assertTrue(function_exists('igk_json_expression'), 'function igk_json_expression not exists'); 
	}
	/** @test */
	public function testigk_json_expression_error(){ 
	$this->assertTrue(function_exists('igk_json_expression_error'), 'function igk_json_expression_error not exists'); 
	}
	/** @test */
	public function testigk_json_parse(){ 
	$this->assertTrue(function_exists('igk_json_parse'), 'function igk_json_parse not exists'); 
	}
	/** @test */
	public function testigk_json_readarray(){ 
	$this->assertTrue(function_exists('igk_json_readarray'), 'function igk_json_readarray not exists'); 
	}
	/** @test */
	public function testigk_json_value(){ 
	$this->assertTrue(function_exists('igk_json_value'), 'function igk_json_value not exists'); 
	}
	/** @test */
	public function testigk_key_sort(){ 
	$this->assertTrue(function_exists('igk_key_sort'), 'function igk_key_sort not exists'); 
	}
	/** @test */
	public function testigk_kill_all_sessions(){ 
	$this->assertTrue(function_exists('igk_kill_all_sessions'), 'function igk_kill_all_sessions not exists'); 
	}
	/** @test */
	public function testigk_kill_trace(){ 
	$this->assertTrue(function_exists('igk_kill_trace'), 'function igk_kill_trace not exists'); 
	}
	/** @test */
	public function testigk_last(){ 
	$this->assertTrue(function_exists('igk_last'), 'function igk_last not exists'); 
	}
	/** @test */
	public function testigk_load_class(){ 
	$this->assertTrue(function_exists('igk_load_class'), 'function igk_load_class not exists'); 
	}
	/** @test */
	public function testigk_load_env_files(){ 
	$this->assertTrue(function_exists('igk_load_env_files'), 'function igk_load_env_files not exists'); 
	}
	/** @test */
	public function testigk_loadcontroller(){ 
	$this->assertTrue(function_exists('igk_loadcontroller'), 'function igk_loadcontroller not exists'); 
	}
	/** @test */
	public function testigk_loadlib(){ 
	$this->assertTrue(function_exists('igk_loadlib'), 'function igk_loadlib not exists'); 
	}
	/** @test */
	public function testigk_loadr(){ 
	$this->assertTrue(function_exists('igk_loadr'), 'function igk_loadr not exists'); 
	}
	/** @test */
	public function testigk_log(){ 
	$this->assertTrue(function_exists('igk_log'), 'function igk_log not exists'); 
	}
	/** @test */
	public function testigk_log_append(){ 
	$this->assertTrue(function_exists('igk_log_append'), 'function igk_log_append not exists'); 
	}
	/** @test */
	public function testigk_log_enabled(){ 
	$this->assertTrue(function_exists('igk_log_enabled'), 'function igk_log_enabled not exists'); 
	}
	/** @test */
	public function testigk_log_var_dump(){ 
	$this->assertTrue(function_exists('igk_log_var_dump'), 'function igk_log_var_dump not exists'); 
	}
	/** @test */
	public function testigk_log_write(){ 
	$this->assertTrue(function_exists('igk_log_write'), 'function igk_log_write not exists'); 
	}
	/** @test */
	public function testigk_log_write_i(){ 
	$this->assertTrue(function_exists('igk_log_write_i'), 'function igk_log_write_i not exists'); 
	}
	/** @test */
	public function testigk_log_write_i_data(){ 
	$this->assertTrue(function_exists('igk_log_write_i_data'), 'function igk_log_write_i_data not exists'); 
	}
	/** @test */
	public function testigk_mail_admin_send(){ 
	$this->assertTrue(function_exists('igk_mail_admin_send'), 'function igk_mail_admin_send not exists'); 
	}
	/** @test */
	public function testigk_mail_from(){ 
	$this->assertTrue(function_exists('igk_mail_from'), 'function igk_mail_from not exists'); 
	}
	/** @test */
	public function testigk_mail_noreply_address(){ 
	$this->assertTrue(function_exists('igk_mail_noreply_address'), 'function igk_mail_noreply_address not exists'); 
	}
	/** @test */
	public function testigk_mail_sendmail(){ 
	$this->assertTrue(function_exists('igk_mail_sendmail'), 'function igk_mail_sendmail not exists'); 
	}
	/** @test */
	public function testigk_mail_split_str(){ 
	$this->assertTrue(function_exists('igk_mail_split_str'), 'function igk_mail_split_str not exists'); 
	}
	/** @test */
	public function testigk_mail_stylesheet(){ 
	$this->assertTrue(function_exists('igk_mail_stylesheet'), 'function igk_mail_stylesheet not exists'); 
	}
	/** @test */
	public function testigk_menu_getmenu(){ 
	$this->assertTrue(function_exists('igk_menu_getmenu'), 'function igk_menu_getmenu not exists'); 
	}
	/** @test */
	public function testigk_menu_getrootmenu(){ 
	$this->assertTrue(function_exists('igk_menu_getrootmenu'), 'function igk_menu_getrootmenu not exists'); 
	}
	/** @test */
	public function testigk_menu_getroots(){ 
	$this->assertTrue(function_exists('igk_menu_getroots'), 'function igk_menu_getroots not exists'); 
	}
	/** @test */
	public function testigk_menu_option_i(){ 
	$this->assertTrue(function_exists('igk_menu_option_i'), 'function igk_menu_option_i not exists'); 
	}
	/** @test */
	public function testigk_nav_session(){ 
	$this->assertTrue(function_exists('igk_nav_session'), 'function igk_nav_session not exists'); 
	}
	/** @test */
	public function testigk_navto(){ 
	$this->assertTrue(function_exists('igk_navto'), 'function igk_navto not exists'); 
	}
	/** @test */
	public function testigk_navto_home(){ 
	$this->assertTrue(function_exists('igk_navto_home'), 'function igk_navto_home not exists'); 
	}
	/** @test */
	public function testigk_navto_referer(){ 
	$this->assertTrue(function_exists('igk_navto_referer'), 'function igk_navto_referer not exists'); 
	}
	/** @test */
	public function testigk_navtobase(){ 
	$this->assertTrue(function_exists('igk_navtobase'), 'function igk_navtobase not exists'); 
	}
	/** @test */
	public function testigk_navtobaseuri(){ 
	$this->assertTrue(function_exists('igk_navtobaseuri'), 'function igk_navtobaseuri not exists'); 
	}
	/** @test */
	public function testigk_navtocurrent(){ 
	$this->assertTrue(function_exists('igk_navtocurrent'), 'function igk_navtocurrent not exists'); 
	}
	/** @test */
	public function testigk_network_available(){ 
	$this->assertTrue(function_exists('igk_network_available'), 'function igk_network_available not exists'); 
	}
	/** @test */
	public function testigk_new_id(){ 
	$this->assertTrue(function_exists('igk_new_id'), 'function igk_new_id not exists'); 
	}
	/** @test */
	public function testigk_new_response(){ 
	$this->assertTrue(function_exists('igk_new_response'), 'function igk_new_response not exists'); 
	}
	/** @test */
	public function testigk_node_get_uri(){ 
	$this->assertTrue(function_exists('igk_node_get_uri'), 'function igk_node_get_uri not exists'); 
	}
	/** @test */
	public function testigk_node_reg_function(){ 
	$this->assertTrue(function_exists('igk_node_reg_function'), 'function igk_node_reg_function not exists'); 
	}
	/** @test */
	public function testigk_notification_event(){ 
	$this->assertTrue(function_exists('igk_notification_event'), 'function igk_notification_event not exists'); 
	}
	/** @test */
	public function testigk_notification_id(){ 
	$this->assertTrue(function_exists('igk_notification_id'), 'function igk_notification_id not exists'); 
	}
	/** @test */
	public function testigk_notification_push_event(){ 
	$this->assertTrue(function_exists('igk_notification_push_event'), 'function igk_notification_push_event not exists'); 
	}
	/** @test */
	public function testigk_notification_reg_event(){ 
	$this->assertTrue(function_exists('igk_notification_reg_event'), 'function igk_notification_reg_event not exists'); 
	}
	/** @test */
	public function testigk_notification_reset(){ 
	$this->assertTrue(function_exists('igk_notification_reset'), 'function igk_notification_reset not exists'); 
	}
	/** @test */
	public function testigk_notification_response(){ 
	$this->assertTrue(function_exists('igk_notification_response'), 'function igk_notification_response not exists'); 
	}
	/** @test */
	public function testigk_notification_unreg_event(){ 
	$this->assertTrue(function_exists('igk_notification_unreg_event'), 'function igk_notification_unreg_event not exists'); 
	}
	/** @test */
	public function testigk_notify_assert(){ 
	$this->assertTrue(function_exists('igk_notify_assert'), 'function igk_notify_assert not exists'); 
	}
	/** @test */
	public function testigk_notify_danger(){ 
	$this->assertTrue(function_exists('igk_notify_danger'), 'function igk_notify_danger not exists'); 
	}
	/** @test */
	public function testigk_notify_error(){ 
	$this->assertTrue(function_exists('igk_notify_error'), 'function igk_notify_error not exists'); 
	}
	/** @test */
	public function testigk_notify_post(){ 
	$this->assertTrue(function_exists('igk_notify_post'), 'function igk_notify_post not exists'); 
	}
	/** @test */
	public function testigk_notify_reponse(){ 
	$this->assertTrue(function_exists('igk_notify_reponse'), 'function igk_notify_reponse not exists'); 
	}
	/** @test */
	public function testigk_notify_sethost(){ 
	$this->assertTrue(function_exists('igk_notify_sethost'), 'function igk_notify_sethost not exists'); 
	}
	/** @test */
	public function testigk_notify_success(){ 
	$this->assertTrue(function_exists('igk_notify_success'), 'function igk_notify_success not exists'); 
	}
	/** @test */
	public function testigk_notifybox(){ 
	$this->assertTrue(function_exists('igk_notifybox'), 'function igk_notifybox not exists'); 
	}
	/** @test */
	public function testigk_notifybox_ajx(){ 
	$this->assertTrue(function_exists('igk_notifybox_ajx'), 'function igk_notifybox_ajx not exists'); 
	}
	/** @test */
	public function testigk_notifyctrl(){ 
	$this->assertTrue(function_exists('igk_notifyctrl'), 'function igk_notifyctrl not exists'); 
	}
	/** @test */
	public function testigk_ob_clean(){ 
	$this->assertTrue(function_exists('igk_ob_clean'), 'function igk_ob_clean not exists'); 
	}
	/** @test */
	public function testigk_ob_get(){ 
	$this->assertTrue(function_exists('igk_ob_get'), 'function igk_ob_get not exists'); 
	}
	/** @test */
	public function testigk_ob_get_func(){ 
	$this->assertTrue(function_exists('igk_ob_get_func'), 'function igk_ob_get_func not exists'); 
	}
	/** @test */
	public function testigk_obj_append(){ 
	$this->assertTrue(function_exists('igk_obj_append'), 'function igk_obj_append not exists'); 
	}
	/** @test */
	public function testigk_obj_binddata(){ 
	$this->assertTrue(function_exists('igk_obj_binddata'), 'function igk_obj_binddata not exists'); 
	}
	/** @test */
	public function testigk_obj_call(){ 
	$this->assertTrue(function_exists('igk_obj_call'), 'function igk_obj_call not exists'); 
	}
	/** @test */
	public function testigk_own_view_ctrl(){ 
	$this->assertTrue(function_exists('igk_own_view_ctrl'), 'function igk_own_view_ctrl not exists'); 
	}
	/** @test */
	public function testigk_own_view_list(){ 
	$this->assertTrue(function_exists('igk_own_view_list'), 'function igk_own_view_list not exists'); 
	}
	/** @test */
	public function testigk_page(){ 
	$this->assertTrue(function_exists('igk_page'), 'function igk_page not exists'); 
	}
	/** @test */
	public function testigk_parse_num(){ 
	$this->assertTrue(function_exists('igk_parse_num'), 'function igk_parse_num not exists'); 
	}
	/** @test */
	public function testigk_parsebool(){ 
	$this->assertTrue(function_exists('igk_parsebool'), 'function igk_parsebool not exists'); 
	}
	/** @test */
	public function testigk_parsebools(){ 
	$this->assertTrue(function_exists('igk_parsebools'), 'function igk_parsebools not exists'); 
	}
	/** @test */
	public function testigk_parsexmlvalue(){ 
	$this->assertTrue(function_exists('igk_parsexmlvalue'), 'function igk_parsexmlvalue not exists'); 
	}
	/** @test */
	public function testigk_pattern_get_matches(){ 
	$this->assertTrue(function_exists('igk_pattern_get_matches'), 'function igk_pattern_get_matches not exists'); 
	}
	/** @test */
	public function testigk_pattern_get_uri_from_key(){ 
	$this->assertTrue(function_exists('igk_pattern_get_uri_from_key'), 'function igk_pattern_get_uri_from_key not exists'); 
	}
	/** @test */
	public function testigk_pattern_matcher_get_pattern(){ 
	$this->assertTrue(function_exists('igk_pattern_matcher_get_pattern'), 'function igk_pattern_matcher_get_pattern not exists'); 
	}
	/** @test */
	public function testigk_pattern_matcher_matchcallback(){ 
	$this->assertTrue(function_exists('igk_pattern_matcher_matchcallback'), 'function igk_pattern_matcher_matchcallback not exists'); 
	}
	/** @test */
	public function testigk_pattern_view_extract(){ 
	$this->assertTrue(function_exists('igk_pattern_view_extract'), 'function igk_pattern_view_extract not exists'); 
	}
	/** @test */
	public function testigk_peek_env(){ 
	$this->assertTrue(function_exists('igk_peek_env'), 'function igk_peek_env not exists'); 
	}
	/** @test */
	public function testigk_phar_available(){ 
	$this->assertTrue(function_exists('igk_phar_available'), 'function igk_phar_available not exists'); 
	}
	/** @test */
	public function testigk_phar_running(){ 
	$this->assertTrue(function_exists('igk_phar_running'), 'function igk_phar_running not exists'); 
	}
	/** @test */
	public function testigk_php_check_and_savescript(){ 
	$this->assertTrue(function_exists('igk_php_check_and_savescript'), 'function igk_php_check_and_savescript not exists'); 
	}
	/** @test */
	public function testigk_plain_text(){ 
	$this->assertTrue(function_exists('igk_plain_text'), 'function igk_plain_text not exists'); 
	}
	/** @test */
	public function testigk_pop_article_chain(){ 
	$this->assertTrue(function_exists('igk_pop_article_chain'), 'function igk_pop_article_chain not exists'); 
	}
	/** @test */
	public function testigk_pop_env(){ 
	$this->assertTrue(function_exists('igk_pop_env'), 'function igk_pop_env not exists'); 
	}
	/** @test */
	public function testigk_pop_tab(){ 
	$this->assertTrue(function_exists('igk_pop_tab'), 'function igk_pop_tab not exists'); 
	}
	/** @test */
	public function testigk_post_filter_menu(){ 
	$this->assertTrue(function_exists('igk_post_filter_menu'), 'function igk_post_filter_menu not exists'); 
	}
	/** @test */
	public function testigk_post_header(){ 
	$this->assertTrue(function_exists('igk_post_header'), 'function igk_post_header not exists'); 
	}
	/** @test */
	public function testigk_post_message(){ 
	$this->assertTrue(function_exists('igk_post_message'), 'function igk_post_message not exists'); 
	}
	/** @test */
	public function testigk_post_uri(){ 
	$this->assertTrue(function_exists('igk_post_uri'), 'function igk_post_uri not exists'); 
	}
	/** @test */
	public function testigk_post_uri_last_error(){ 
	$this->assertTrue(function_exists('igk_post_uri_last_error'), 'function igk_post_uri_last_error not exists'); 
	}
	/** @test */
	public function testigk_preg_match(){ 
	$this->assertTrue(function_exists('igk_preg_match'), 'function igk_preg_match not exists'); 
	}
	/** @test */
	public function testigk_prepare_components_storage(){ 
	$this->assertTrue(function_exists('igk_prepare_components_storage'), 'function igk_prepare_components_storage not exists'); 
	}
	/** @test */
	public function testigk_print(){ 
	$this->assertTrue(function_exists('igk_print'), 'function igk_print not exists'); 
	}
	/** @test */
	public function testigk_print_ln(){ 
	$this->assertTrue(function_exists('igk_print_ln'), 'function igk_print_ln not exists'); 
	}
	/** @test */
	public function testigk_print_stack_depth(){ 
	$this->assertTrue(function_exists('igk_print_stack_depth'), 'function igk_print_stack_depth not exists'); 
	}
	/** @test */
	public function testigk_push_article_chain(){ 
	$this->assertTrue(function_exists('igk_push_article_chain'), 'function igk_push_article_chain not exists'); 
	}
	/** @test */
	public function testigk_push_env(){ 
	$this->assertTrue(function_exists('igk_push_env'), 'function igk_push_env not exists'); 
	}
	/** @test */
	public function testigk_push_tab(){ 
	$this->assertTrue(function_exists('igk_push_tab'), 'function igk_push_tab not exists'); 
	}
	/** @test */
	public function testigk_qr_confirm(){ 
	$this->assertTrue(function_exists('igk_qr_confirm'), 'function igk_qr_confirm not exists'); 
	}
	/** @test */
	public function testigk_qr_restore(){ 
	$this->assertTrue(function_exists('igk_qr_restore'), 'function igk_qr_restore not exists'); 
	}
	/** @test */
	public function testigk_qr_save(){ 
	$this->assertTrue(function_exists('igk_qr_save'), 'function igk_qr_save not exists'); 
	}
	/** @test */
	public function testigk_r_getdisplay(){ 
	$this->assertTrue(function_exists('igk_r_getdisplay'), 'function igk_r_getdisplay not exists'); 
	}
	/** @test */
	public function testigk_raise_event(){ 
	$this->assertTrue(function_exists('igk_raise_event'), 'function igk_raise_event not exists'); 
	}
	/** @test */
	public function testigk_raise_globalcallback(){ 
	$this->assertTrue(function_exists('igk_raise_globalcallback'), 'function igk_raise_globalcallback not exists'); 
	}
	/** @test */
	public function testigk_raise_initenv_callback(){ 
	$this->assertTrue(function_exists('igk_raise_initenv_callback'), 'function igk_raise_initenv_callback not exists'); 
	}
	/** @test */
	public function testigk_realpath(){ 
	$this->assertTrue(function_exists('igk_realpath'), 'function igk_realpath not exists'); 
	}
	/** @test */
	public function testigk_reflection_class_exists(){ 
	$this->assertTrue(function_exists('igk_reflection_class_exists'), 'function igk_reflection_class_exists not exists'); 
	}
	/** @test */
	public function testigk_reflection_class_extends(){ 
	$this->assertTrue(function_exists('igk_reflection_class_extends'), 'function igk_reflection_class_extends not exists'); 
	}
	/** @test */
	public function testigk_reflection_class_implement(){ 
	$this->assertTrue(function_exists('igk_reflection_class_implement'), 'function igk_reflection_class_implement not exists'); 
	}
	/** @test */
	public function testigk_reflection_class_isabstract(){ 
	$this->assertTrue(function_exists('igk_reflection_class_isabstract'), 'function igk_reflection_class_isabstract not exists'); 
	}
	/** @test */
	public function testigk_reflection_func_get_args(){ 
	$this->assertTrue(function_exists('igk_reflection_func_get_args'), 'function igk_reflection_func_get_args not exists'); 
	}
	/** @test */
	public function testigk_reflection_get_constants(){ 
	$this->assertTrue(function_exists('igk_reflection_get_constants'), 'function igk_reflection_get_constants not exists'); 
	}
	/** @test */
	public function testigk_reflection_get_member(){ 
	$this->assertTrue(function_exists('igk_reflection_get_member'), 'function igk_reflection_get_member not exists'); 
	}
	/** @test */
	public function testigk_reflection_getclass_var(){ 
	$this->assertTrue(function_exists('igk_reflection_getclass_var'), 'function igk_reflection_getclass_var not exists'); 
	}
	/** @test */
	public function testigk_reflection_getdeclared_filename(){ 
	$this->assertTrue(function_exists('igk_reflection_getdeclared_filename'), 'function igk_reflection_getdeclared_filename not exists'); 
	}
	/** @test */
	public function testigk_reflection_interface_exists(){ 
	$this->assertTrue(function_exists('igk_reflection_interface_exists'), 'function igk_reflection_interface_exists not exists'); 
	}
	/** @test */
	public function testigk_reg_action_script(){ 
	$this->assertTrue(function_exists('igk_reg_action_script'), 'function igk_reg_action_script not exists'); 
	}
	/** @test */
	public function testigk_reg_class_file(){ 
	$this->assertTrue(function_exists('igk_reg_class_file'), 'function igk_reg_class_file not exists'); 
	}
	/** @test */
	public function testigk_reg_class_instance_key(){ 
	$this->assertTrue(function_exists('igk_reg_class_instance_key'), 'function igk_reg_class_instance_key not exists'); 
	}
	/** @test */
	public function testigk_reg_cmd_args(){ 
	$this->assertTrue(function_exists('igk_reg_cmd_args'), 'function igk_reg_cmd_args not exists'); 
	}
	/** @test */
	public function testigk_reg_cmd_command(){ 
	$this->assertTrue(function_exists('igk_reg_cmd_command'), 'function igk_reg_cmd_command not exists'); 
	}
	/** @test */
	public function testigk_reg_component(){ 
	$this->assertTrue(function_exists('igk_reg_component'), 'function igk_reg_component not exists'); 
	}
	/** @test */
	public function testigk_reg_component_ajx(){ 
	$this->assertTrue(function_exists('igk_reg_component_ajx'), 'function igk_reg_component_ajx not exists'); 
	}
	/** @test */
	public function testigk_reg_component_package(){ 
	$this->assertTrue(function_exists('igk_reg_component_package'), 'function igk_reg_component_package not exists'); 
	}
	/** @test */
	public function testigk_reg_ctrl(){ 
	$this->assertTrue(function_exists('igk_reg_ctrl'), 'function igk_reg_ctrl not exists'); 
	}
	/** @test */
	public function testigk_reg_env_closure(){ 
	$this->assertTrue(function_exists('igk_reg_env_closure'), 'function igk_reg_env_closure not exists'); 
	}
	/** @test */
	public function testigk_reg_event(){ 
	$this->assertTrue(function_exists('igk_reg_event'), 'function igk_reg_event not exists'); 
	}
	/** @test */
	public function testigk_reg_file(){ 
	$this->assertTrue(function_exists('igk_reg_file'), 'function igk_reg_file not exists'); 
	}
	/** @test */
	public function testigk_reg_form_builder_engine(){ 
	$this->assertTrue(function_exists('igk_reg_form_builder_engine'), 'function igk_reg_form_builder_engine not exists'); 
	}
	/** @test */
	public function testigk_reg_func_files(){ 
	$this->assertTrue(function_exists('igk_reg_func_files'), 'function igk_reg_func_files not exists'); 
	}
	/** @test */
	public function testigk_reg_global_setting(){ 
	$this->assertTrue(function_exists('igk_reg_global_setting'), 'function igk_reg_global_setting not exists'); 
	}
	/** @test */
	public function testigk_reg_handle_file_request(){ 
	$this->assertTrue(function_exists('igk_reg_handle_file_request'), 'function igk_reg_handle_file_request not exists'); 
	}
	/** @test */
	public function testigk_reg_hook(){ 
	$this->assertTrue(function_exists('igk_reg_hook'), 'function igk_reg_hook not exists'); 
	}
	/** @test */
	public function testigk_reg_html_component(){ 
	$this->assertTrue(function_exists('igk_reg_html_component'), 'function igk_reg_html_component not exists'); 
	}
	/** @test */
	public function testigk_reg_initenv_callback(){ 
	$this->assertTrue(function_exists('igk_reg_initenv_callback'), 'function igk_reg_initenv_callback not exists'); 
	}
	/** @test */
	public function testigk_reg_ns(){ 
	$this->assertTrue(function_exists('igk_reg_ns'), 'function igk_reg_ns not exists'); 
	}
	/** @test */
	public function testigk_reg_package(){ 
	$this->assertTrue(function_exists('igk_reg_package'), 'function igk_reg_package not exists'); 
	}
	/** @test */
	public function testigk_reg_path_exec(){ 
	$this->assertTrue(function_exists('igk_reg_path_exec'), 'function igk_reg_path_exec not exists'); 
	}
	/** @test */
	public function testigk_reg_pipe(){ 
	$this->assertTrue(function_exists('igk_reg_pipe'), 'function igk_reg_pipe not exists'); 
	}
	/** @test */
	public function testigk_reg_session_event(){ 
	$this->assertTrue(function_exists('igk_reg_session_event'), 'function igk_reg_session_event not exists'); 
	}
	/** @test */
	public function testigk_reg_subdomain(){ 
	$this->assertTrue(function_exists('igk_reg_subdomain'), 'function igk_reg_subdomain not exists'); 
	}
	/** @test */
	public function testigk_reg_template_bindingattributes(){ 
	$this->assertTrue(function_exists('igk_reg_template_bindingattributes'), 'function igk_reg_template_bindingattributes not exists'); 
	}
	/** @test */
	public function testigk_reg_widget(){ 
	$this->assertTrue(function_exists('igk_reg_widget'), 'function igk_reg_widget not exists'); 
	}
	/** @test */
	public function testigk_reg_widget_zone(){ 
	$this->assertTrue(function_exists('igk_reg_widget_zone'), 'function igk_reg_widget_zone not exists'); 
	}
	/** @test */
	public function testigk_regex_get(){ 
	$this->assertTrue(function_exists('igk_regex_get'), 'function igk_regex_get not exists'); 
	}
	/** @test */
	public function testigk_register_autoload_class(){ 
	$this->assertTrue(function_exists('igk_register_autoload_class'), 'function igk_register_autoload_class not exists'); 
	}
	/** @test */
	public function testigk_register_balafon_db_table(){ 
	$this->assertTrue(function_exists('igk_register_balafon_db_table'), 'function igk_register_balafon_db_table not exists'); 
	}
	/** @test */
	public function testigk_register_class_info(){ 
	$this->assertTrue(function_exists('igk_register_class_info'), 'function igk_register_class_info not exists'); 
	}
	/** @test */
	public function testigk_register_dataadapter(){ 
	$this->assertTrue(function_exists('igk_register_dataadapter'), 'function igk_register_dataadapter not exists'); 
	}
	/** @test */
	public function testigk_register_post_filter_menu(){ 
	$this->assertTrue(function_exists('igk_register_post_filter_menu'), 'function igk_register_post_filter_menu not exists'); 
	}
	/** @test */
	public function testigk_register_requirement(){ 
	$this->assertTrue(function_exists('igk_register_requirement'), 'function igk_register_requirement not exists'); 
	}
	/** @test */
	public function testigk_register_service(){ 
	$this->assertTrue(function_exists('igk_register_service'), 'function igk_register_service not exists'); 
	}
	/** @test */
	public function testigk_register_temp_uri(){ 
	$this->assertTrue(function_exists('igk_register_temp_uri'), 'function igk_register_temp_uri not exists'); 
	}
	/** @test */
	public function testigk_registerlib(){ 
	$this->assertTrue(function_exists('igk_registerlib'), 'function igk_registerlib not exists'); 
	}
	/** @test */
	public function testigk_reglib(){ 
	$this->assertTrue(function_exists('igk_reglib'), 'function igk_reglib not exists'); 
	}
	/** @test */
	public function testigk_reglib_once(){ 
	$this->assertTrue(function_exists('igk_reglib_once'), 'function igk_reglib_once not exists'); 
	}
	/** @test */
	public function testigk_regtowebpage(){ 
	$this->assertTrue(function_exists('igk_regtowebpage'), 'function igk_regtowebpage not exists'); 
	}
	/** @test */
	public function testigk_relection_get_properties_keys(){ 
	$this->assertTrue(function_exists('igk_relection_get_properties_keys'), 'function igk_relection_get_properties_keys not exists'); 
	}
	/** @test */
	public function testigk_render_doc(){ 
	$this->assertTrue(function_exists('igk_render_doc'), 'function igk_render_doc not exists'); 
	}
	/** @test */
	public function testigk_render_dummy_doc(){ 
	$this->assertTrue(function_exists('igk_render_dummy_doc'), 'function igk_render_dummy_doc not exists'); 
	}
	/** @test */
	public function testigk_render_node(){ 
	$this->assertTrue(function_exists('igk_render_node'), 'function igk_render_node not exists'); 
	}
	/** @test */
	public function testigk_render_resource(){ 
	$this->assertTrue(function_exists('igk_render_resource'), 'function igk_render_resource not exists'); 
	}
	/** @test */
	public function testigk_render_trace(){ 
	$this->assertTrue(function_exists('igk_render_trace'), 'function igk_render_trace not exists'); 
	}
	/** @test */
	public function testigk_render_xml_error(){ 
	$this->assertTrue(function_exists('igk_render_xml_error'), 'function igk_render_xml_error not exists'); 
	}
	/** @test */
	public function testigk_request_is(){ 
	$this->assertTrue(function_exists('igk_request_is'), 'function igk_request_is not exists'); 
	}
	/** @test */
	public function testigk_require_module(){ 
	$this->assertTrue(function_exists('igk_require_module'), 'function igk_require_module not exists'); 
	}
	/** @test */
	public function testigk_res_img(){ 
	$this->assertTrue(function_exists('igk_res_img'), 'function igk_res_img not exists'); 
	}
	/** @test */
	public function testigk_reset_db_dataadapter(){ 
	$this->assertTrue(function_exists('igk_reset_db_dataadapter'), 'function igk_reset_db_dataadapter not exists'); 
	}
	/** @test */
	public function testigk_reset_globalvars(){ 
	$this->assertTrue(function_exists('igk_reset_globalvars'), 'function igk_reset_globalvars not exists'); 
	}
	/** @test */
	public function testigk_reset_include(){ 
	$this->assertTrue(function_exists('igk_reset_include'), 'function igk_reset_include not exists'); 
	}
	/** @test */
	public function testigk_resetr(){ 
	$this->assertTrue(function_exists('igk_resetr'), 'function igk_resetr not exists'); 
	}
	/** @test */
	public function testigk_resources_gets(){ 
	$this->assertTrue(function_exists('igk_resources_gets'), 'function igk_resources_gets not exists'); 
	}
	/** @test */
	public function testigk_rm_article(){ 
	$this->assertTrue(function_exists('igk_rm_article'), 'function igk_rm_article not exists'); 
	}
	/** @test */
	public function testigk_rm_balafonscriptfile_callback(){ 
	$this->assertTrue(function_exists('igk_rm_balafonscriptfile_callback'), 'function igk_rm_balafonscriptfile_callback not exists'); 
	}
	/** @test */
	public function testigk_run_bg_script(){ 
	$this->assertTrue(function_exists('igk_run_bg_script'), 'function igk_run_bg_script not exists'); 
	}
	/** @test */
	public function testigk_run_scripts(){ 
	$this->assertTrue(function_exists('igk_run_scripts'), 'function igk_run_scripts not exists'); 
	}
	/** @test */
	public function testigk_save_config(){ 
	$this->assertTrue(function_exists('igk_save_config'), 'function igk_save_config not exists'); 
	}
	/** @test */
	public function testigk_save_module(){ 
	$this->assertTrue(function_exists('igk_save_module'), 'function igk_save_module not exists'); 
	}
	/** @test */
	public function testigk_secure_uri(){ 
	$this->assertTrue(function_exists('igk_secure_uri'), 'function igk_secure_uri not exists'); 
	}
	/** @test */
	public function testigk_send_request(){ 
	$this->assertTrue(function_exists('igk_send_request'), 'function igk_send_request not exists'); 
	}
	/** @test */
	public function testigk_server_is_linux(){ 
	$this->assertTrue(function_exists('igk_server_is_linux'), 'function igk_server_is_linux not exists'); 
	}
	/** @test */
	public function testigk_server_is_local(){ 
	$this->assertTrue(function_exists('igk_server_is_local'), 'function igk_server_is_local not exists'); 
	}
	/** @test */
	public function testigk_server_is_redirecting(){ 
	$this->assertTrue(function_exists('igk_server_is_redirecting'), 'function igk_server_is_redirecting not exists'); 
	}
	/** @test */
	public function testigk_server_is_refreshing(){ 
	$this->assertTrue(function_exists('igk_server_is_refreshing'), 'function igk_server_is_refreshing not exists'); 
	}
	/** @test */
	public function testigk_server_is_window(){ 
	$this->assertTrue(function_exists('igk_server_is_window'), 'function igk_server_is_window not exists'); 
	}
	/** @test */
	public function testigk_server_request_from_balafon(){ 
	$this->assertTrue(function_exists('igk_server_request_from_balafon'), 'function igk_server_request_from_balafon not exists'); 
	}
	/** @test */
	public function testigk_server_request_onlocal_server(){ 
	$this->assertTrue(function_exists('igk_server_request_onlocal_server'), 'function igk_server_request_onlocal_server not exists'); 
	}
	/** @test */
	public function testigk_session_block_exit_callback(){ 
	$this->assertTrue(function_exists('igk_session_block_exit_callback'), 'function igk_session_block_exit_callback not exists'); 
	}
	/** @test */
	public function testigk_session_destroy(){ 
	$this->assertTrue(function_exists('igk_session_destroy'), 'function igk_session_destroy not exists'); 
	}
	/** @test */
	public function testigk_session_exists(){ 
	$this->assertTrue(function_exists('igk_session_exists'), 'function igk_session_exists not exists'); 
	}
	/** @test */
	public function testigk_session_is_active(){ 
	$this->assertTrue(function_exists('igk_session_is_active'), 'function igk_session_is_active not exists'); 
	}
	/** @test */
	public function testigk_session_reset_handler(){ 
	$this->assertTrue(function_exists('igk_session_reset_handler'), 'function igk_session_reset_handler not exists'); 
	}
	/** @test */
	public function testigk_session_unlinkfile(){ 
	$this->assertTrue(function_exists('igk_session_unlinkfile'), 'function igk_session_unlinkfile not exists'); 
	}
	/** @test */
	public function testigk_session_update(){ 
	$this->assertTrue(function_exists('igk_session_update'), 'function igk_session_update not exists'); 
	}
	/** @test */
	public function testigk_set_cached(){ 
	$this->assertTrue(function_exists('igk_set_cached'), 'function igk_set_cached not exists'); 
	}
	/** @test */
	public function testigk_set_cookie(){ 
	$this->assertTrue(function_exists('igk_set_cookie'), 'function igk_set_cookie not exists'); 
	}
	/** @test */
	public function testigk_set_env(){ 
	$this->assertTrue(function_exists('igk_set_env'), 'function igk_set_env not exists'); 
	}
	/** @test */
	public function testigk_set_env_array(){ 
	$this->assertTrue(function_exists('igk_set_env_array'), 'function igk_set_env_array not exists'); 
	}
	/** @test */
	public function testigk_set_env_keys(){ 
	$this->assertTrue(function_exists('igk_set_env_keys'), 'function igk_set_env_keys not exists'); 
	}
	/** @test */
	public function testigk_set_error(){ 
	$this->assertTrue(function_exists('igk_set_error'), 'function igk_set_error not exists'); 
	}
	/** @test */
	public function testigk_set_error_msg(){ 
	$this->assertTrue(function_exists('igk_set_error_msg'), 'function igk_set_error_msg not exists'); 
	}
	/** @test */
	public function testigk_set_export_callback(){ 
	$this->assertTrue(function_exists('igk_set_export_callback'), 'function igk_set_export_callback not exists'); 
	}
	/** @test */
	public function testigk_set_form_args(){ 
	$this->assertTrue(function_exists('igk_set_form_args'), 'function igk_set_form_args not exists'); 
	}
	/** @test */
	public function testigk_set_form_value(){ 
	$this->assertTrue(function_exists('igk_set_form_value'), 'function igk_set_form_value not exists'); 
	}
	/** @test */
	public function testigk_set_global_cookie(){ 
	$this->assertTrue(function_exists('igk_set_global_cookie'), 'function igk_set_global_cookie not exists'); 
	}
	/** @test */
	public function testigk_set_globalvars(){ 
	$this->assertTrue(function_exists('igk_set_globalvars'), 'function igk_set_globalvars not exists'); 
	}
	/** @test */
	public function testigk_set_header(){ 
	$this->assertTrue(function_exists('igk_set_header'), 'function igk_set_header not exists'); 
	}
	/** @test */
	public function testigk_set_rendering_node(){ 
	$this->assertTrue(function_exists('igk_set_rendering_node'), 'function igk_set_rendering_node not exists'); 
	}
	/** @test */
	public function testigk_set_selected_builder_engine(){ 
	$this->assertTrue(function_exists('igk_set_selected_builder_engine'), 'function igk_set_selected_builder_engine not exists'); 
	}
	/** @test */
	public function testigk_set_session(){ 
	$this->assertTrue(function_exists('igk_set_session'), 'function igk_set_session not exists'); 
	}
	/** @test */
	public function testigk_set_session_redirection(){ 
	$this->assertTrue(function_exists('igk_set_session_redirection'), 'function igk_set_session_redirection not exists'); 
	}
	/** @test */
	public function testigk_set_timeout(){ 
	$this->assertTrue(function_exists('igk_set_timeout'), 'function igk_set_timeout not exists'); 
	}
	/** @test */
	public function testigk_setr(){ 
	$this->assertTrue(function_exists('igk_setr'), 'function igk_setr not exists'); 
	}
	/** @test */
	public function testigk_setv(){ 
	$this->assertTrue(function_exists('igk_setv'), 'function igk_setv not exists'); 
	}
	/** @test */
	public function testigk_show_code(){ 
	$this->assertTrue(function_exists('igk_show_code'), 'function igk_show_code not exists'); 
	}
	/** @test */
	public function testigk_show_error_doc(){ 
	$this->assertTrue(function_exists('igk_show_error_doc'), 'function igk_show_error_doc not exists'); 
	}
	/** @test */
	public function testigk_show_exception(){ 
	$this->assertTrue(function_exists('igk_show_exception'), 'function igk_show_exception not exists'); 
	}
	/** @test */
	public function testigk_show_keytype(){ 
	$this->assertTrue(function_exists('igk_show_keytype'), 'function igk_show_keytype not exists'); 
	}
	/** @test */
	public function testigk_show_prev(){ 
	$this->assertTrue(function_exists('igk_show_prev'), 'function igk_show_prev not exists'); 
	}
	/** @test */
	public function testigk_show_prevto(){ 
	$this->assertTrue(function_exists('igk_show_prevto'), 'function igk_show_prevto not exists'); 
	}
	/** @test */
	public function testigk_show_serverinfo(){ 
	$this->assertTrue(function_exists('igk_show_serverinfo'), 'function igk_show_serverinfo not exists'); 
	}
	/** @test */
	public function testigk_show_textarea(){ 
	$this->assertTrue(function_exists('igk_show_textarea'), 'function igk_show_textarea not exists'); 
	}
	/** @test */
	public function testigk_show_trace(){ 
	$this->assertTrue(function_exists('igk_show_trace'), 'function igk_show_trace not exists'); 
	}
	/** @test */
	public function testigk_sort_bynodeindex(){ 
	$this->assertTrue(function_exists('igk_sort_bynodeindex'), 'function igk_sort_bynodeindex not exists'); 
	}
	/** @test */
	public function testigk_sql_data_type(){ 
	$this->assertTrue(function_exists('igk_sql_data_type'), 'function igk_sql_data_type not exists'); 
	}
	/** @test */
	public function testigk_src_code(){ 
	$this->assertTrue(function_exists('igk_src_code'), 'function igk_src_code not exists'); 
	}
	/** @test */
	public function testigk_start_session(){ 
	$this->assertTrue(function_exists('igk_start_session'), 'function igk_start_session not exists'); 
	}
	/** @test */
	public function testigk_start_time(){ 
	$this->assertTrue(function_exists('igk_start_time'), 'function igk_start_time not exists'); 
	}
	/** @test */
	public function testigk_stop_timeout(){ 
	$this->assertTrue(function_exists('igk_stop_timeout'), 'function igk_stop_timeout not exists'); 
	}
	/** @test */
	public function testigk_str_append_to(){ 
	$this->assertTrue(function_exists('igk_str_append_to'), 'function igk_str_append_to not exists'); 
	}
	/** @test */
	public function testigk_str_array_rm_empty(){ 
	$this->assertTrue(function_exists('igk_str_array_rm_empty'), 'function igk_str_array_rm_empty not exists'); 
	}
	/** @test */
	public function testigk_str_capitalize(){ 
	$this->assertTrue(function_exists('igk_str_capitalize'), 'function igk_str_capitalize not exists'); 
	}
	/** @test */
	public function testigk_str_empty(){ 
	$this->assertTrue(function_exists('igk_str_empty'), 'function igk_str_empty not exists'); 
	}
	/** @test */
	public function testigk_str_endwith(){ 
	$this->assertTrue(function_exists('igk_str_endwith'), 'function igk_str_endwith not exists'); 
	}
	/** @test */
	public function testigk_str_escape_tag(){ 
	$this->assertTrue(function_exists('igk_str_escape_tag'), 'function igk_str_escape_tag not exists'); 
	}
	/** @test */
	public function testigk_str_escape_tag_replace(){ 
	$this->assertTrue(function_exists('igk_str_escape_tag_replace'), 'function igk_str_escape_tag_replace not exists'); 
	}
	/** @test */
	public function testigk_str_explode(){ 
	$this->assertTrue(function_exists('igk_str_explode'), 'function igk_str_explode not exists'); 
	}
	/** @test */
	public function testigk_str_explode_uppercase(){ 
	$this->assertTrue(function_exists('igk_str_explode_uppercase'), 'function igk_str_explode_uppercase not exists'); 
	}
	/** @test */
	public function testigk_str_expr(){ 
	$this->assertTrue(function_exists('igk_str_expr'), 'function igk_str_expr not exists'); 
	}
	/** @test */
	public function testigk_str_format(){ 
	$this->assertTrue(function_exists('igk_str_format'), 'function igk_str_format not exists'); 
	}
	/** @test */
	public function testigk_str_format_bind(){ 
	$this->assertTrue(function_exists('igk_str_format_bind'), 'function igk_str_format_bind not exists'); 
	}
	/** @test */
	public function testigk_str_get_pattern_keys(){ 
	$this->assertTrue(function_exists('igk_str_get_pattern_keys'), 'function igk_str_get_pattern_keys not exists'); 
	}
	/** @test */
	public function testigk_str_get_version(){ 
	$this->assertTrue(function_exists('igk_str_get_version'), 'function igk_str_get_version not exists'); 
	}
	/** @test */
	public function testigk_str_glue(){ 
	$this->assertTrue(function_exists('igk_str_glue'), 'function igk_str_glue not exists'); 
	}
	/** @test */
	public function testigk_str_index_of(){ 
	$this->assertTrue(function_exists('igk_str_index_of'), 'function igk_str_index_of not exists'); 
	}
	/** @test */
	public function testigk_str_insert(){ 
	$this->assertTrue(function_exists('igk_str_insert'), 'function igk_str_insert not exists'); 
	}
	/** @test */
	public function testigk_str_join(){ 
	$this->assertTrue(function_exists('igk_str_join'), 'function igk_str_join not exists'); 
	}
	/** @test */
	public function testigk_str_join_tab(){ 
	$this->assertTrue(function_exists('igk_str_join_tab'), 'function igk_str_join_tab not exists'); 
	}
	/** @test */
	public function testigk_str_pipe_args(){ 
	$this->assertTrue(function_exists('igk_str_pipe_args'), 'function igk_str_pipe_args not exists'); 
	}
	/** @test */
	public function testigk_str_pipe_data(){ 
	$this->assertTrue(function_exists('igk_str_pipe_data'), 'function igk_str_pipe_data not exists'); 
	}
	/** @test */
	public function testigk_str_pipe_value(){ 
	$this->assertTrue(function_exists('igk_str_pipe_value'), 'function igk_str_pipe_value not exists'); 
	}
	/** @test */
	public function testigk_str_quotes(){ 
	$this->assertTrue(function_exists('igk_str_quotes'), 'function igk_str_quotes not exists'); 
	}
	/** @test */
	public function testigk_str_read_args(){ 
	$this->assertTrue(function_exists('igk_str_read_args'), 'function igk_str_read_args not exists'); 
	}
	/** @test */
	public function testigk_str_read_bracket_source_code(){ 
	$this->assertTrue(function_exists('igk_str_read_bracket_source_code'), 'function igk_str_read_bracket_source_code not exists'); 
	}
	/** @test */
	public function testigk_str_read_brank(){ 
	$this->assertTrue(function_exists('igk_str_read_brank'), 'function igk_str_read_brank not exists'); 
	}
	/** @test */
	public function testigk_str_read_callback_list(){ 
	$this->assertTrue(function_exists('igk_str_read_callback_list'), 'function igk_str_read_callback_list not exists'); 
	}
	/** @test */
	public function testigk_str_read_clean_source_code(){ 
	$this->assertTrue(function_exists('igk_str_read_clean_source_code'), 'function igk_str_read_clean_source_code not exists'); 
	}
	/** @test */
	public function testigk_str_read_create_cleanup_source(){ 
	$this->assertTrue(function_exists('igk_str_read_create_cleanup_source'), 'function igk_str_read_create_cleanup_source not exists'); 
	}
	/** @test */
	public function testigk_str_read_createoptions(){ 
	$this->assertTrue(function_exists('igk_str_read_createoptions'), 'function igk_str_read_createoptions not exists'); 
	}
	/** @test */
	public function testigk_str_read_get_intent(){ 
	$this->assertTrue(function_exists('igk_str_read_get_intent'), 'function igk_str_read_get_intent not exists'); 
	}
	/** @test */
	public function testigk_str_read_in_brancket(){ 
	$this->assertTrue(function_exists('igk_str_read_in_brancket'), 'function igk_str_read_in_brancket not exists'); 
	}
	/** @test */
	public function testigk_str_read_source_code(){ 
	$this->assertTrue(function_exists('igk_str_read_source_code'), 'function igk_str_read_source_code not exists'); 
	}
	/** @test */
	public function testigk_str_read_source_code_bracket(){ 
	$this->assertTrue(function_exists('igk_str_read_source_code_bracket'), 'function igk_str_read_source_code_bracket not exists'); 
	}
	/** @test */
	public function testigk_str_remove_empty_line(){ 
	$this->assertTrue(function_exists('igk_str_remove_empty_line'), 'function igk_str_remove_empty_line not exists'); 
	}
	/** @test */
	public function testigk_str_remove_lines(){ 
	$this->assertTrue(function_exists('igk_str_remove_lines'), 'function igk_str_remove_lines not exists'); 
	}
	/** @test */
	public function testigk_str_remove_quote(){ 
	$this->assertTrue(function_exists('igk_str_remove_quote'), 'function igk_str_remove_quote not exists'); 
	}
	/** @test */
	public function testigk_str_repeat(){ 
	$this->assertTrue(function_exists('igk_str_repeat'), 'function igk_str_repeat not exists'); 
	}
	/** @test */
	public function testigk_str_rm_last(){ 
	$this->assertTrue(function_exists('igk_str_rm_last'), 'function igk_str_rm_last not exists'); 
	}
	/** @test */
	public function testigk_str_rm_start(){ 
	$this->assertTrue(function_exists('igk_str_rm_start'), 'function igk_str_rm_start not exists'); 
	}
	/** @test */
	public function testigk_str_split_lines(){ 
	$this->assertTrue(function_exists('igk_str_split_lines'), 'function igk_str_split_lines not exists'); 
	}
	/** @test */
	public function testigk_str_split_string(){ 
	$this->assertTrue(function_exists('igk_str_split_string'), 'function igk_str_split_string not exists'); 
	}
	/** @test */
	public function testigk_str_startwith(){ 
	$this->assertTrue(function_exists('igk_str_startwith'), 'function igk_str_startwith not exists'); 
	}
	/** @test */
	public function testigk_str_summary(){ 
	$this->assertTrue(function_exists('igk_str_summary'), 'function igk_str_summary not exists'); 
	}
	/** @test */
	public function testigk_str_toupperentities(){ 
	$this->assertTrue(function_exists('igk_str_toupperentities'), 'function igk_str_toupperentities not exists'); 
	}
	/** @test */
	public function testigk_str_toupperinvariant(){ 
	$this->assertTrue(function_exists('igk_str_toupperinvariant'), 'function igk_str_toupperinvariant not exists'); 
	}
	/** @test */
	public function testigk_str_uncollapsestring(){ 
	$this->assertTrue(function_exists('igk_str_uncollapsestring'), 'function igk_str_uncollapsestring not exists'); 
	}
	/** @test */
	public function testigk_str_view_uri(){ 
	$this->assertTrue(function_exists('igk_str_view_uri'), 'function igk_str_view_uri not exists'); 
	}
	/** @test */
	public function testigk_support_noextension_script(){ 
	$this->assertTrue(function_exists('igk_support_noextension_script'), 'function igk_support_noextension_script not exists'); 
	}
	/** @test */
	public function testigk_svg_bind_callable_list(){ 
	$this->assertTrue(function_exists('igk_svg_bind_callable_list'), 'function igk_svg_bind_callable_list not exists'); 
	}
	/** @test */
	public function testigk_svg_bind_svgs(){ 
	$this->assertTrue(function_exists('igk_svg_bind_svgs'), 'function igk_svg_bind_svgs not exists'); 
	}
	/** @test */
	public function testigk_svg_bindfile(){ 
	$this->assertTrue(function_exists('igk_svg_bindfile'), 'function igk_svg_bindfile not exists'); 
	}
	/** @test */
	public function testigk_svg_callable_list(){ 
	$this->assertTrue(function_exists('igk_svg_callable_list'), 'function igk_svg_callable_list not exists'); 
	}
	/** @test */
	public function testigk_svg_content(){ 
	$this->assertTrue(function_exists('igk_svg_content'), 'function igk_svg_content not exists'); 
	}
	/** @test */
	public function testigk_svg_get_regicons(){ 
	$this->assertTrue(function_exists('igk_svg_get_regicons'), 'function igk_svg_get_regicons not exists'); 
	}
	/** @test */
	public function testigk_svg_register(){ 
	$this->assertTrue(function_exists('igk_svg_register'), 'function igk_svg_register not exists'); 
	}
	/** @test */
	public function testigk_svg_register_icons(){ 
	$this->assertTrue(function_exists('igk_svg_register_icons'), 'function igk_svg_register_icons not exists'); 
	}
	/** @test */
	public function testigk_svg_render_ajx(){ 
	$this->assertTrue(function_exists('igk_svg_render_ajx'), 'function igk_svg_render_ajx not exists'); 
	}
	/** @test */
	public function testigk_svg_use(){ 
	$this->assertTrue(function_exists('igk_svg_use'), 'function igk_svg_use not exists'); 
	}
	/** @test */
	public function testigk_svg_use_callback(){ 
	$this->assertTrue(function_exists('igk_svg_use_callback'), 'function igk_svg_use_callback not exists'); 
	}
	/** @test */
	public function testigk_sys_ac_create_pattern(){ 
	$this->assertTrue(function_exists('igk_sys_ac_create_pattern'), 'function igk_sys_ac_create_pattern not exists'); 
	}
	/** @test */
	public function testigk_sys_ac_getpattern(){ 
	$this->assertTrue(function_exists('igk_sys_ac_getpattern'), 'function igk_sys_ac_getpattern not exists'); 
	}
	/** @test */
	public function testigk_sys_ac_getpatterninfo(){ 
	$this->assertTrue(function_exists('igk_sys_ac_getpatterninfo'), 'function igk_sys_ac_getpatterninfo not exists'); 
	}
	/** @test */
	public function testigk_sys_ac_register(){ 
	$this->assertTrue(function_exists('igk_sys_ac_register'), 'function igk_sys_ac_register not exists'); 
	}
	/** @test */
	public function testigk_sys_ac_unregister(){ 
	$this->assertTrue(function_exists('igk_sys_ac_unregister'), 'function igk_sys_ac_unregister not exists'); 
	}
	/** @test */
	public function testigk_sys_add_cache_uri(){ 
	$this->assertTrue(function_exists('igk_sys_add_cache_uri'), 'function igk_sys_add_cache_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_author(){ 
	$this->assertTrue(function_exists('igk_sys_author'), 'function igk_sys_author not exists'); 
	}
	/** @test */
	public function testigk_sys_authorize(){ 
	$this->assertTrue(function_exists('igk_sys_authorize'), 'function igk_sys_authorize not exists'); 
	}
	/** @test */
	public function testigk_sys_build_dist(){ 
	$this->assertTrue(function_exists('igk_sys_build_dist'), 'function igk_sys_build_dist not exists'); 
	}
	/** @test */
	public function testigk_sys_buildconfirm_ajx(){ 
	$this->assertTrue(function_exists('igk_sys_buildconfirm_ajx'), 'function igk_sys_buildconfirm_ajx not exists'); 
	}
	/** @test */
	public function testigk_sys_cache_lib_files(){ 
	$this->assertTrue(function_exists('igk_sys_cache_lib_files'), 'function igk_sys_cache_lib_files not exists'); 
	}
	/** @test */
	public function testigk_sys_cache_request(){ 
	$this->assertTrue(function_exists('igk_sys_cache_request'), 'function igk_sys_cache_request not exists'); 
	}
	/** @test */
	public function testigk_sys_cache_require(){ 
	$this->assertTrue(function_exists('igk_sys_cache_require'), 'function igk_sys_cache_require not exists'); 
	}
	/** @test */
	public function testigk_sys_cache_uri(){ 
	$this->assertTrue(function_exists('igk_sys_cache_uri'), 'function igk_sys_cache_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_cgi_folder(){ 
	$this->assertTrue(function_exists('igk_sys_cgi_folder'), 'function igk_sys_cgi_folder not exists'); 
	}
	/** @test */
	public function testigk_sys_class_is_component(){ 
	$this->assertTrue(function_exists('igk_sys_class_is_component'), 'function igk_sys_class_is_component not exists'); 
	}
	/** @test */
	public function testigk_sys_class_is_html_element(){ 
	$this->assertTrue(function_exists('igk_sys_class_is_html_element'), 'function igk_sys_class_is_html_element not exists'); 
	}
	/** @test */
	public function testigk_sys_config_view(){ 
	$this->assertTrue(function_exists('igk_sys_config_view'), 'function igk_sys_config_view not exists'); 
	}
	/** @test */
	public function testigk_sys_create_app_setting(){ 
	$this->assertTrue(function_exists('igk_sys_create_app_setting'), 'function igk_sys_create_app_setting not exists'); 
	}
	/** @test */
	public function testigk_sys_create_session_start_info(){ 
	$this->assertTrue(function_exists('igk_sys_create_session_start_info'), 'function igk_sys_create_session_start_info not exists'); 
	}
	/** @test */
	public function testigk_sys_create_user(){ 
	$this->assertTrue(function_exists('igk_sys_create_user'), 'function igk_sys_create_user not exists'); 
	}
	/** @test */
	public function testigk_sys_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_ctrl'), 'function igk_sys_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_ctrl_type(){ 
	$this->assertTrue(function_exists('igk_sys_ctrl_type'), 'function igk_sys_ctrl_type not exists'); 
	}
	/** @test */
	public function testigk_sys_current_domain_name(){ 
	$this->assertTrue(function_exists('igk_sys_current_domain_name'), 'function igk_sys_current_domain_name not exists'); 
	}
	/** @test */
	public function testigk_sys_current_user(){ 
	$this->assertTrue(function_exists('igk_sys_current_user'), 'function igk_sys_current_user not exists'); 
	}
	/** @test */
	public function testigk_sys_current_user_id(){ 
	$this->assertTrue(function_exists('igk_sys_current_user_id'), 'function igk_sys_current_user_id not exists'); 
	}
	/** @test */
	public function testigk_sys_db_constant_cache(){ 
	$this->assertTrue(function_exists('igk_sys_db_constant_cache'), 'function igk_sys_db_constant_cache not exists'); 
	}
	/** @test */
	public function testigk_sys_debug_components(){ 
	$this->assertTrue(function_exists('igk_sys_debug_components'), 'function igk_sys_debug_components not exists'); 
	}
	/** @test */
	public function testigk_sys_debugzone_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_debugzone_ctrl'), 'function igk_sys_debugzone_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_disable_html_caching(){ 
	$this->assertTrue(function_exists('igk_sys_disable_html_caching'), 'function igk_sys_disable_html_caching not exists'); 
	}
	/** @test */
	public function testigk_sys_domain_control(){ 
	$this->assertTrue(function_exists('igk_sys_domain_control'), 'function igk_sys_domain_control not exists'); 
	}
	/** @test */
	public function testigk_sys_domain_name(){ 
	$this->assertTrue(function_exists('igk_sys_domain_name'), 'function igk_sys_domain_name not exists'); 
	}
	/** @test */
	public function testigk_sys_enable_html_caching(){ 
	$this->assertTrue(function_exists('igk_sys_enable_html_caching'), 'function igk_sys_enable_html_caching not exists'); 
	}
	/** @test */
	public function testigk_sys_env(){ 
	$this->assertTrue(function_exists('igk_sys_env'), 'function igk_sys_env not exists'); 
	}
	/** @test */
	public function testigk_sys_env_enable_production_mode(){ 
	$this->assertTrue(function_exists('igk_sys_env_enable_production_mode'), 'function igk_sys_env_enable_production_mode not exists'); 
	}
	/** @test */
	public function testigk_sys_env_production(){ 
	$this->assertTrue(function_exists('igk_sys_env_production'), 'function igk_sys_env_production not exists'); 
	}
	/** @test */
	public function testigk_sys_error(){ 
	$this->assertTrue(function_exists('igk_sys_error'), 'function igk_sys_error not exists'); 
	}
	/** @test */
	public function testigk_sys_errorzone_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_errorzone_ctrl'), 'function igk_sys_errorzone_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_force_view(){ 
	$this->assertTrue(function_exists('igk_sys_force_view'), 'function igk_sys_force_view not exists'); 
	}
	/** @test */
	public function testigk_sys_g_handle_error(){ 
	$this->assertTrue(function_exists('igk_sys_g_handle_error'), 'function igk_sys_g_handle_error not exists'); 
	}
	/** @test */
	public function testigk_sys_gen_sitemap(){ 
	$this->assertTrue(function_exists('igk_sys_gen_sitemap'), 'function igk_sys_gen_sitemap not exists'); 
	}
	/** @test */
	public function testigk_sys_get_all_openedsessionid(){ 
	$this->assertTrue(function_exists('igk_sys_get_all_openedsessionid'), 'function igk_sys_get_all_openedsessionid not exists'); 
	}
	/** @test */
	public function testigk_sys_get_controller(){ 
	$this->assertTrue(function_exists('igk_sys_get_controller'), 'function igk_sys_get_controller not exists'); 
	}
	/** @test */
	public function testigk_sys_get_html_ns_prefix(){ 
	$this->assertTrue(function_exists('igk_sys_get_html_ns_prefix'), 'function igk_sys_get_html_ns_prefix not exists'); 
	}
	/** @test */
	public function testigk_sys_get_mtime_uid(){ 
	$this->assertTrue(function_exists('igk_sys_get_mtime_uid'), 'function igk_sys_get_mtime_uid not exists'); 
	}
	/** @test */
	public function testigk_sys_get_referencedir(){ 
	$this->assertTrue(function_exists('igk_sys_get_referencedir'), 'function igk_sys_get_referencedir not exists'); 
	}
	/** @test */
	public function testigk_sys_get_subdomain_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_get_subdomain_ctrl'), 'function igk_sys_get_subdomain_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_get_user_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_get_user_ctrl'), 'function igk_sys_get_user_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_getall_ctrl(){ 
	$this->assertTrue(function_exists('igk_sys_getall_ctrl'), 'function igk_sys_getall_ctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_getall_funclist(){ 
	$this->assertTrue(function_exists('igk_sys_getall_funclist'), 'function igk_sys_getall_funclist not exists'); 
	}
	/** @test */
	public function testigk_sys_getconfig(){ 
	$this->assertTrue(function_exists('igk_sys_getconfig'), 'function igk_sys_getconfig not exists'); 
	}
	/** @test */
	public function testigk_sys_getdefaultctrlconf(){ 
	$this->assertTrue(function_exists('igk_sys_getdefaultctrlconf'), 'function igk_sys_getdefaultctrlconf not exists'); 
	}
	/** @test */
	public function testigk_sys_getfunclist(){ 
	$this->assertTrue(function_exists('igk_sys_getfunclist'), 'function igk_sys_getfunclist not exists'); 
	}
	/** @test */
	public function testigk_sys_getuserctrls(){ 
	$this->assertTrue(function_exists('igk_sys_getuserctrls'), 'function igk_sys_getuserctrls not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_action(){ 
	$this->assertTrue(function_exists('igk_sys_handle_action'), 'function igk_sys_handle_action not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_cache(){ 
	$this->assertTrue(function_exists('igk_sys_handle_cache'), 'function igk_sys_handle_cache not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_ctrl_request_uri(){ 
	$this->assertTrue(function_exists('igk_sys_handle_ctrl_request_uri'), 'function igk_sys_handle_ctrl_request_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_entry_file(){ 
	$this->assertTrue(function_exists('igk_sys_handle_entry_file'), 'function igk_sys_handle_entry_file not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_error(){ 
	$this->assertTrue(function_exists('igk_sys_handle_error'), 'function igk_sys_handle_error not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_request(){ 
	$this->assertTrue(function_exists('igk_sys_handle_request'), 'function igk_sys_handle_request not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_request_method(){ 
	$this->assertTrue(function_exists('igk_sys_handle_request_method'), 'function igk_sys_handle_request_method not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_res(){ 
	$this->assertTrue(function_exists('igk_sys_handle_res'), 'function igk_sys_handle_res not exists'); 
	}
	/** @test */
	public function testigk_sys_handle_uri(){ 
	$this->assertTrue(function_exists('igk_sys_handle_uri'), 'function igk_sys_handle_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_html_cache_dir(){ 
	$this->assertTrue(function_exists('igk_sys_html_cache_dir'), 'function igk_sys_html_cache_dir not exists'); 
	}
	/** @test */
	public function testigk_sys_html_initdoc(){ 
	$this->assertTrue(function_exists('igk_sys_html_initdoc'), 'function igk_sys_html_initdoc not exists'); 
	}
	/** @test */
	public function testigk_sys_include(){ 
	$this->assertTrue(function_exists('igk_sys_include'), 'function igk_sys_include not exists'); 
	}
	/** @test */
	public function testigk_sys_include_once(){ 
	$this->assertTrue(function_exists('igk_sys_include_once'), 'function igk_sys_include_once not exists'); 
	}
	/** @test */
	public function testigk_sys_invoke_reg_uri(){ 
	$this->assertTrue(function_exists('igk_sys_invoke_reg_uri'), 'function igk_sys_invoke_reg_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_invoke_uri(){ 
	$this->assertTrue(function_exists('igk_sys_invoke_uri'), 'function igk_sys_invoke_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_is_action(){ 
	$this->assertTrue(function_exists('igk_sys_is_action'), 'function igk_sys_is_action not exists'); 
	}
	/** @test */
	public function testigk_sys_is_auth(){ 
	$this->assertTrue(function_exists('igk_sys_is_auth'), 'function igk_sys_is_auth not exists'); 
	}
	/** @test */
	public function testigk_sys_is_htmlcaching(){ 
	$this->assertTrue(function_exists('igk_sys_is_htmlcaching'), 'function igk_sys_is_htmlcaching not exists'); 
	}
	/** @test */
	public function testigk_sys_is_page(){ 
	$this->assertTrue(function_exists('igk_sys_is_page'), 'function igk_sys_is_page not exists'); 
	}
	/** @test */
	public function testigk_sys_is_rootdocument(){ 
	$this->assertTrue(function_exists('igk_sys_is_rootdocument'), 'function igk_sys_is_rootdocument not exists'); 
	}
	/** @test */
	public function testigk_sys_is_subdomain(){ 
	$this->assertTrue(function_exists('igk_sys_is_subdomain'), 'function igk_sys_is_subdomain not exists'); 
	}
	/** @test */
	public function testigk_sys_ischanged(){ 
	$this->assertTrue(function_exists('igk_sys_ischanged'), 'function igk_sys_ischanged not exists'); 
	}
	/** @test */
	public function testigk_sys_islanguagesupported(){ 
	$this->assertTrue(function_exists('igk_sys_islanguagesupported'), 'function igk_sys_islanguagesupported not exists'); 
	}
	/** @test */
	public function testigk_sys_ispagesupported(){ 
	$this->assertTrue(function_exists('igk_sys_ispagesupported'), 'function igk_sys_ispagesupported not exists'); 
	}
	/** @test */
	public function testigk_sys_isredirecting(){ 
	$this->assertTrue(function_exists('igk_sys_isredirecting'), 'function igk_sys_isredirecting not exists'); 
	}
	/** @test */
	public function testigk_sys_isuser_authorize(){ 
	$this->assertTrue(function_exists('igk_sys_isuser_authorize'), 'function igk_sys_isuser_authorize not exists'); 
	}
	/** @test */
	public function testigk_sys_js_ignore(){ 
	$this->assertTrue(function_exists('igk_sys_js_ignore'), 'function igk_sys_js_ignore not exists'); 
	}
	/** @test */
	public function testigk_sys_lib_ignore(){ 
	$this->assertTrue(function_exists('igk_sys_lib_ignore'), 'function igk_sys_lib_ignore not exists'); 
	}
	/** @test */
	public function testigk_sys_load_class_method(){ 
	$this->assertTrue(function_exists('igk_sys_load_class_method'), 'function igk_sys_load_class_method not exists'); 
	}
	/** @test */
	public function testigk_sys_meth_info(){ 
	$this->assertTrue(function_exists('igk_sys_meth_info'), 'function igk_sys_meth_info not exists'); 
	}
	/** @test */
	public function testigk_sys_mod_rewrite_available(){ 
	$this->assertTrue(function_exists('igk_sys_mod_rewrite_available'), 'function igk_sys_mod_rewrite_available not exists'); 
	}
	/** @test */
	public function testigk_sys_pagelist(){ 
	$this->assertTrue(function_exists('igk_sys_pagelist'), 'function igk_sys_pagelist not exists'); 
	}
	/** @test */
	public function testigk_sys_powered_node(){ 
	$this->assertTrue(function_exists('igk_sys_powered_node'), 'function igk_sys_powered_node not exists'); 
	}
	/** @test */
	public function testigk_sys_powered_view_callback(){ 
	$this->assertTrue(function_exists('igk_sys_powered_view_callback'), 'function igk_sys_powered_view_callback not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_action(){ 
	$this->assertTrue(function_exists('igk_sys_reg_action'), 'function igk_sys_reg_action not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_autoloadlib(){ 
	$this->assertTrue(function_exists('igk_sys_reg_autoloadlib'), 'function igk_sys_reg_autoloadlib not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_componentname(){ 
	$this->assertTrue(function_exists('igk_sys_reg_componentname'), 'function igk_sys_reg_componentname not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_controller(){ 
	$this->assertTrue(function_exists('igk_sys_reg_controller'), 'function igk_sys_reg_controller not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_debugcomponents(){ 
	$this->assertTrue(function_exists('igk_sys_reg_debugcomponents'), 'function igk_sys_reg_debugcomponents not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_display(){ 
	$this->assertTrue(function_exists('igk_sys_reg_display'), 'function igk_sys_reg_display not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_html_component(){ 
	$this->assertTrue(function_exists('igk_sys_reg_html_component'), 'function igk_sys_reg_html_component not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_referencedir(){ 
	$this->assertTrue(function_exists('igk_sys_reg_referencedir'), 'function igk_sys_reg_referencedir not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_severity(){ 
	$this->assertTrue(function_exists('igk_sys_reg_severity'), 'function igk_sys_reg_severity not exists'); 
	}
	/** @test */
	public function testigk_sys_reg_uri(){ 
	$this->assertTrue(function_exists('igk_sys_reg_uri'), 'function igk_sys_reg_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_regchange(){ 
	$this->assertTrue(function_exists('igk_sys_regchange'), 'function igk_sys_regchange not exists'); 
	}
	/** @test */
	public function testigk_sys_register_user(){ 
	$this->assertTrue(function_exists('igk_sys_register_user'), 'function igk_sys_register_user not exists'); 
	}
	/** @test */
	public function testigk_sys_regpagefolderchanged(){ 
	$this->assertTrue(function_exists('igk_sys_regpagefolderchanged'), 'function igk_sys_regpagefolderchanged not exists'); 
	}
	/** @test */
	public function testigk_sys_regsyscontroller(){ 
	$this->assertTrue(function_exists('igk_sys_regsyscontroller'), 'function igk_sys_regsyscontroller not exists'); 
	}
	/** @test */
	public function testigk_sys_regview(){ 
	$this->assertTrue(function_exists('igk_sys_regview'), 'function igk_sys_regview not exists'); 
	}
	/** @test */
	public function testigk_sys_render_default_uri(){ 
	$this->assertTrue(function_exists('igk_sys_render_default_uri'), 'function igk_sys_render_default_uri not exists'); 
	}
	/** @test */
	public function testigk_sys_render_index(){ 
	$this->assertTrue(function_exists('igk_sys_render_index'), 'function igk_sys_render_index not exists'); 
	}
	/** @test */
	public function testigk_sys_require(){ 
	$this->assertTrue(function_exists('igk_sys_require'), 'function igk_sys_require not exists'); 
	}
	/** @test */
	public function testigk_sys_root_user(){ 
	$this->assertTrue(function_exists('igk_sys_root_user'), 'function igk_sys_root_user not exists'); 
	}
	/** @test */
	public function testigk_sys_show_error_doc(){ 
	$this->assertTrue(function_exists('igk_sys_show_error_doc'), 'function igk_sys_show_error_doc not exists'); 
	}
	/** @test */
	public function testigk_sys_shutdown_function(){ 
	$this->assertTrue(function_exists('igk_sys_shutdown_function'), 'function igk_sys_shutdown_function not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_domain_name(){ 
	$this->assertTrue(function_exists('igk_sys_srv_domain_name'), 'function igk_sys_srv_domain_name not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_is_ip(){ 
	$this->assertTrue(function_exists('igk_sys_srv_is_ip'), 'function igk_sys_srv_is_ip not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_is_secure(){ 
	$this->assertTrue(function_exists('igk_sys_srv_is_secure'), 'function igk_sys_srv_is_secure not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_nocache_request(){ 
	$this->assertTrue(function_exists('igk_sys_srv_nocache_request'), 'function igk_sys_srv_nocache_request not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_referer(){ 
	$this->assertTrue(function_exists('igk_sys_srv_referer'), 'function igk_sys_srv_referer not exists'); 
	}
	/** @test */
	public function testigk_sys_srv_uri_scheme(){ 
	$this->assertTrue(function_exists('igk_sys_srv_uri_scheme'), 'function igk_sys_srv_uri_scheme not exists'); 
	}
	/** @test */
	public function testigk_sys_start_engine(){ 
	$this->assertTrue(function_exists('igk_sys_start_engine'), 'function igk_sys_start_engine not exists'); 
	}
	/** @test */
	public function testigk_sys_store_doc_cache(){ 
	$this->assertTrue(function_exists('igk_sys_store_doc_cache'), 'function igk_sys_store_doc_cache not exists'); 
	}
	/** @test */
	public function testigk_sys_store_str_cache(){ 
	$this->assertTrue(function_exists('igk_sys_store_str_cache'), 'function igk_sys_store_str_cache not exists'); 
	}
	/** @test */
	public function testigk_sys_store_uri_cache(){ 
	$this->assertTrue(function_exists('igk_sys_store_uri_cache'), 'function igk_sys_store_uri_cache not exists'); 
	}
	/** @test */
	public function testigk_sys_subdomain_name(){ 
	$this->assertTrue(function_exists('igk_sys_subdomain_name'), 'function igk_sys_subdomain_name not exists'); 
	}
	/** @test */
	public function testigk_sys_unregpagefolderchanged(){ 
	$this->assertTrue(function_exists('igk_sys_unregpagefolderchanged'), 'function igk_sys_unregpagefolderchanged not exists'); 
	}
	/** @test */
	public function testigk_sys_unregview(){ 
	$this->assertTrue(function_exists('igk_sys_unregview'), 'function igk_sys_unregview not exists'); 
	}
	/** @test */
	public function testigk_sys_version(){ 
	$this->assertTrue(function_exists('igk_sys_version'), 'function igk_sys_version not exists'); 
	}
	/** @test */
	public function testigk_sys_viewctrl(){ 
	$this->assertTrue(function_exists('igk_sys_viewctrl'), 'function igk_sys_viewctrl not exists'); 
	}
	/** @test */
	public function testigk_sys_zip_core(){ 
	$this->assertTrue(function_exists('igk_sys_zip_core'), 'function igk_sys_zip_core not exists'); 
	}
	/** @test */
	public function testigk_temp_bind_attribute(){ 
	$this->assertTrue(function_exists('igk_temp_bind_attribute'), 'function igk_temp_bind_attribute not exists'); 
	}
	/** @test */
	public function testigk_template_activate(){ 
	$this->assertTrue(function_exists('igk_template_activate'), 'function igk_template_activate not exists'); 
	}
	/** @test */
	public function testigk_template_active(){ 
	$this->assertTrue(function_exists('igk_template_active'), 'function igk_template_active not exists'); 
	}
	/** @test */
	public function testigk_template_footer(){ 
	$this->assertTrue(function_exists('igk_template_footer'), 'function igk_template_footer not exists'); 
	}
	/** @test */
	public function testigk_template_header(){ 
	$this->assertTrue(function_exists('igk_template_header'), 'function igk_template_header not exists'); 
	}
	/** @test */
	public function testigk_template_list(){ 
	$this->assertTrue(function_exists('igk_template_list'), 'function igk_template_list not exists'); 
	}
	/** @test */
	public function testigk_template_register(){ 
	$this->assertTrue(function_exists('igk_template_register'), 'function igk_template_register not exists'); 
	}
	/** @test */
	public function testigk_template_unregister(){ 
	$this->assertTrue(function_exists('igk_template_unregister'), 'function igk_template_unregister not exists'); 
	}
	/** @test */
	public function testigk_test_assert(){ 
	$this->assertTrue(function_exists('igk_test_assert'), 'function igk_test_assert not exists'); 
	}
	/** @test */
	public function testigk_text(){ 
	$this->assertTrue(function_exists('igk_text'), 'function igk_text not exists'); 
	}
	/** @test */
	public function testigk_throw_exception(){ 
	$this->assertTrue(function_exists('igk_throw_exception'), 'function igk_throw_exception not exists'); 
	}
	/** @test */
	public function testigk_time_max_info(){ 
	$this->assertTrue(function_exists('igk_time_max_info'), 'function igk_time_max_info not exists'); 
	}
	/** @test */
	public function testigk_time_span(){ 
	$this->assertTrue(function_exists('igk_time_span'), 'function igk_time_span not exists'); 
	}
	/** @test */
	public function testigk_to_array(){ 
	$this->assertTrue(function_exists('igk_to_array'), 'function igk_to_array not exists'); 
	}
	/** @test */
	public function testigk_tool_call(){ 
	$this->assertTrue(function_exists('igk_tool_call'), 'function igk_tool_call not exists'); 
	}
	/** @test */
	public function testigk_tool_reg(){ 
	$this->assertTrue(function_exists('igk_tool_reg'), 'function igk_tool_reg not exists'); 
	}
	/** @test */
	public function testigk_trace(){ 
	$this->assertTrue(function_exists('igk_trace'), 'function igk_trace not exists'); 
	}
	/** @test */
	public function testigk_trace_function(){ 
	$this->assertTrue(function_exists('igk_trace_function'), 'function igk_trace_function not exists'); 
	}
	/** @test */
	public function testigk_tracing(){ 
	$this->assertTrue(function_exists('igk_tracing'), 'function igk_tracing not exists'); 
	}
	/** @test */
	public function testigk_typeof(){ 
	$this->assertTrue(function_exists('igk_typeof'), 'function igk_typeof not exists'); 
	}
	/** @test */
	public function testigk_uninstall_module(){ 
	$this->assertTrue(function_exists('igk_uninstall_module'), 'function igk_uninstall_module not exists'); 
	}
	/** @test */
	public function testigk_unreg_hook(){ 
	$this->assertTrue(function_exists('igk_unreg_hook'), 'function igk_unreg_hook not exists'); 
	}
	/** @test */
	public function testigk_unreg_html_component(){ 
	$this->assertTrue(function_exists('igk_unreg_html_component'), 'function igk_unreg_html_component not exists'); 
	}
	/** @test */
	public function testigk_unreg_session_event(){ 
	$this->assertTrue(function_exists('igk_unreg_session_event'), 'function igk_unreg_session_event not exists'); 
	}
	/** @test */
	public function testigk_unseri_data(){ 
	$this->assertTrue(function_exists('igk_unseri_data'), 'function igk_unseri_data not exists'); 
	}
	/** @test */
	public function testigk_unset_document(){ 
	$this->assertTrue(function_exists('igk_unset_document'), 'function igk_unset_document not exists'); 
	}
	/** @test */
	public function testigk_update_include(){ 
	$this->assertTrue(function_exists('igk_update_include'), 'function igk_update_include not exists'); 
	}
	/** @test */
	public function testigk_uri_add_args(){ 
	$this->assertTrue(function_exists('igk_uri_add_args'), 'function igk_uri_add_args not exists'); 
	}
	/** @test */
	public function testigk_uri_invokecurrent(){ 
	$this->assertTrue(function_exists('igk_uri_invokecurrent'), 'function igk_uri_invokecurrent not exists'); 
	}
	/** @test */
	public function testigk_uri_is_match(){ 
	$this->assertTrue(function_exists('igk_uri_is_match'), 'function igk_uri_is_match not exists'); 
	}
	/** @test */
	public function testigk_uri_rquery(){ 
	$this->assertTrue(function_exists('igk_uri_rquery'), 'function igk_uri_rquery not exists'); 
	}
	/** @test */
	public function testigk_use_component_package(){ 
	$this->assertTrue(function_exists('igk_use_component_package'), 'function igk_use_component_package not exists'); 
	}
	/** @test */
	public function testigk_use_web_package(){ 
	$this->assertTrue(function_exists('igk_use_web_package'), 'function igk_use_web_package not exists'); 
	}
	/** @test */
	public function testigk_user(){ 
	$this->assertTrue(function_exists('igk_user'), 'function igk_user not exists'); 
	}
	/** @test */
	public function testigk_user_add_info_type(){ 
	$this->assertTrue(function_exists('igk_user_add_info_type'), 'function igk_user_add_info_type not exists'); 
	}
	/** @test */
	public function testigk_user_build_info(){ 
	$this->assertTrue(function_exists('igk_user_build_info'), 'function igk_user_build_info not exists'); 
	}
	/** @test */
	public function testigk_user_connectas(){ 
	$this->assertTrue(function_exists('igk_user_connectas'), 'function igk_user_connectas not exists'); 
	}
	/** @test */
	public function testigk_user_fullname(){ 
	$this->assertTrue(function_exists('igk_user_fullname'), 'function igk_user_fullname not exists'); 
	}
	/** @test */
	public function testigk_user_genpwd(){ 
	$this->assertTrue(function_exists('igk_user_genpwd'), 'function igk_user_genpwd not exists'); 
	}
	/** @test */
	public function testigk_user_get_env_param(){ 
	$this->assertTrue(function_exists('igk_user_get_env_param'), 'function igk_user_get_env_param not exists'); 
	}
	/** @test */
	public function testigk_user_info(){ 
	$this->assertTrue(function_exists('igk_user_info'), 'function igk_user_info not exists'); 
	}
	/** @test */
	public function testigk_user_pwd_required(){ 
	$this->assertTrue(function_exists('igk_user_pwd_required'), 'function igk_user_pwd_required not exists'); 
	}
	/** @test */
	public function testigk_user_set_env_param(){ 
	$this->assertTrue(function_exists('igk_user_set_env_param'), 'function igk_user_set_env_param not exists'); 
	}
	/** @test */
	public function testigk_user_set_info(){ 
	$this->assertTrue(function_exists('igk_user_set_info'), 'function igk_user_set_info not exists'); 
	}
	/** @test */
	public function testigk_user_store_tokenid(){ 
	$this->assertTrue(function_exists('igk_user_store_tokenid'), 'function igk_user_store_tokenid not exists'); 
	}
	/** @test */
	public function testigk_usort(){ 
	$this->assertTrue(function_exists('igk_usort'), 'function igk_usort not exists'); 
	}
	/** @test */
	public function testigk_val_add_error(){ 
	$this->assertTrue(function_exists('igk_val_add_error'), 'function igk_val_add_error not exists'); 
	}
	/** @test */
	public function testigk_val_cbcss(){ 
	$this->assertTrue(function_exists('igk_val_cbcss'), 'function igk_val_cbcss not exists'); 
	}
	/** @test */
	public function testigk_val_check(){ 
	$this->assertTrue(function_exists('igk_val_check'), 'function igk_val_check not exists'); 
	}
	/** @test */
	public function testigk_val_cibling(){ 
	$this->assertTrue(function_exists('igk_val_cibling'), 'function igk_val_cibling not exists'); 
	}
	/** @test */
	public function testigk_val_haserror(){ 
	$this->assertTrue(function_exists('igk_val_haserror'), 'function igk_val_haserror not exists'); 
	}
	/** @test */
	public function testigk_val_init(){ 
	$this->assertTrue(function_exists('igk_val_init'), 'function igk_val_init not exists'); 
	}
	/** @test */
	public function testigk_val_ispic(){ 
	$this->assertTrue(function_exists('igk_val_ispic'), 'function igk_val_ispic not exists'); 
	}
	/** @test */
	public function testigk_val_isstrnullorempty(){ 
	$this->assertTrue(function_exists('igk_val_isstrnullorempty'), 'function igk_val_isstrnullorempty not exists'); 
	}
	/** @test */
	public function testigk_val_node(){ 
	$this->assertTrue(function_exists('igk_val_node'), 'function igk_val_node not exists'); 
	}
	/** @test */
	public function testigk_val_regparam(){ 
	$this->assertTrue(function_exists('igk_val_regparam'), 'function igk_val_regparam not exists'); 
	}
	/** @test */
	public function testigk_val_unregparam(){ 
	$this->assertTrue(function_exists('igk_val_unregparam'), 'function igk_val_unregparam not exists'); 
	}
	/** @test */
	public function testigk_valid_cref(){ 
	$this->assertTrue(function_exists('igk_valid_cref'), 'function igk_valid_cref not exists'); 
	}
	/** @test */
	public function testigk_verbose_wln(){ 
	$this->assertTrue(function_exists('igk_verbose_wln'), 'function igk_verbose_wln not exists'); 
	}
	/** @test */
	public function testigk_view_action_path(){ 
	$this->assertTrue(function_exists('igk_view_action_path'), 'function igk_view_action_path not exists'); 
	}
	/** @test */
	public function testigk_view_args(){ 
	$this->assertTrue(function_exists('igk_view_args'), 'function igk_view_args not exists'); 
	}
	/** @test */
	public function testigk_view_article(){ 
	$this->assertTrue(function_exists('igk_view_article'), 'function igk_view_article not exists'); 
	}
	/** @test */
	public function testigk_view_bindfile(){ 
	$this->assertTrue(function_exists('igk_view_bindfile'), 'function igk_view_bindfile not exists'); 
	}
	/** @test */
	public function testigk_view_dispatch_args(){ 
	$this->assertTrue(function_exists('igk_view_dispatch_args'), 'function igk_view_dispatch_args not exists'); 
	}
	/** @test */
	public function testigk_view_env_actions(){ 
	$this->assertTrue(function_exists('igk_view_env_actions'), 'function igk_view_env_actions not exists'); 
	}
	/** @test */
	public function testigk_view_get_action_params(){ 
	$this->assertTrue(function_exists('igk_view_get_action_params'), 'function igk_view_get_action_params not exists'); 
	}
	/** @test */
	public function testigk_view_handle(){ 
	$this->assertTrue(function_exists('igk_view_handle'), 'function igk_view_handle not exists'); 
	}
	/** @test */
	public function testigk_view_handle_action(){ 
	$this->assertTrue(function_exists('igk_view_handle_action'), 'function igk_view_handle_action not exists'); 
	}
	/** @test */
	public function testigk_view_handle_actions(){ 
	$this->assertTrue(function_exists('igk_view_handle_actions'), 'function igk_view_handle_actions not exists'); 
	}
	/** @test */
	public function testigk_view_handle_name(){ 
	$this->assertTrue(function_exists('igk_view_handle_name'), 'function igk_view_handle_name not exists'); 
	}
	/** @test */
	public function testigk_view_handle_obj_action(){ 
	$this->assertTrue(function_exists('igk_view_handle_obj_action'), 'function igk_view_handle_obj_action not exists'); 
	}
	/** @test */
	public function testigk_view_handle_uri(){ 
	$this->assertTrue(function_exists('igk_view_handle_uri'), 'function igk_view_handle_uri not exists'); 
	}
	/** @test */
	public function testigk_view_init_bindinginfo(){ 
	$this->assertTrue(function_exists('igk_view_init_bindinginfo'), 'function igk_view_init_bindinginfo not exists'); 
	}
	/** @test */
	public function testigk_view_reg_action(){ 
	$this->assertTrue(function_exists('igk_view_reg_action'), 'function igk_view_reg_action not exists'); 
	}
	/** @test */
	public function testigk_warray(){ 
	$this->assertTrue(function_exists('igk_warray'), 'function igk_warray not exists'); 
	}
	/** @test */
	public function testigk_wcode(){ 
	$this->assertTrue(function_exists('igk_wcode'), 'function igk_wcode not exists'); 
	}
	/** @test */
	public function testigk_web_defaultpage(){ 
	$this->assertTrue(function_exists('igk_web_defaultpage'), 'function igk_web_defaultpage not exists'); 
	}
	/** @test */
	public function testigk_web_get_config(){ 
	$this->assertTrue(function_exists('igk_web_get_config'), 'function igk_web_get_config not exists'); 
	}
	/** @test */
	public function testigk_web_prefix(){ 
	$this->assertTrue(function_exists('igk_web_prefix'), 'function igk_web_prefix not exists'); 
	}
	/** @test */
	public function testigk_wl_e(){ 
	$this->assertTrue(function_exists('igk_wl_e'), 'function igk_wl_e not exists'); 
	}
	/** @test */
	public function testigk_wln_area(){ 
	$this->assertTrue(function_exists('igk_wln_area'), 'function igk_wln_area not exists'); 
	}
	/** @test */
	public function testigk_wln_assert(){ 
	$this->assertTrue(function_exists('igk_wln_assert'), 'function igk_wln_assert not exists'); 
	}
	/** @test */
	public function testigk_wln_html(){ 
	$this->assertTrue(function_exists('igk_wln_html'), 'function igk_wln_html not exists'); 
	}
	/** @test */
	public function testigk_wln_if(){ 
	$this->assertTrue(function_exists('igk_wln_if'), 'function igk_wln_if not exists'); 
	}
	/** @test */
	public function testigk_wln_ob_flushdata(){ 
	$this->assertTrue(function_exists('igk_wln_ob_flushdata'), 'function igk_wln_ob_flushdata not exists'); 
	}
	/** @test */
	public function testigk_wln_ob_get(){ 
	$this->assertTrue(function_exists('igk_wln_ob_get'), 'function igk_wln_ob_get not exists'); 
	}
	/** @test */
	public function testigk_wnode(){ 
	$this->assertTrue(function_exists('igk_wnode'), 'function igk_wnode not exists'); 
	}
	/** @test */
	public function testigk_xml(){ 
	$this->assertTrue(function_exists('igk_xml'), 'function igk_xml not exists'); 
	}
	/** @test */
	public function testigk_xml_create_readinfo(){ 
	$this->assertTrue(function_exists('igk_xml_create_readinfo'), 'function igk_xml_create_readinfo not exists'); 
	}
	/** @test */
	public function testigk_xml_create_render_option(){ 
	$this->assertTrue(function_exists('igk_xml_create_render_option'), 'function igk_xml_create_render_option not exists'); 
	}
	/** @test */
	public function testigk_xml_create_to_node_settings(){ 
	$this->assertTrue(function_exists('igk_xml_create_to_node_settings'), 'function igk_xml_create_to_node_settings not exists'); 
	}
	/** @test */
	public function testigk_xml_header(){ 
	$this->assertTrue(function_exists('igk_xml_header'), 'function igk_xml_header not exists'); 
	}
	/** @test */
	public function testigk_xml_initialize(){ 
	$this->assertTrue(function_exists('igk_xml_initialize'), 'function igk_xml_initialize not exists'); 
	}
	/** @test */
	public function testigk_xml_is_cachingrequired(){ 
	$this->assertTrue(function_exists('igk_xml_is_cachingrequired'), 'function igk_xml_is_cachingrequired not exists'); 
	}
	/** @test */
	public function testigk_xml_is_mailoptions(){ 
	$this->assertTrue(function_exists('igk_xml_is_mailoptions'), 'function igk_xml_is_mailoptions not exists'); 
	}
	/** @test */
	public function testigk_xml_is_validname(){ 
	$this->assertTrue(function_exists('igk_xml_is_validname'), 'function igk_xml_is_validname not exists'); 
	}
	/** @test */
	public function testigk_xml_read(){ 
	$this->assertTrue(function_exists('igk_xml_read'), 'function igk_xml_read not exists'); 
	}
	/** @test */
	public function testigk_xml_read_attribute(){ 
	$this->assertTrue(function_exists('igk_xml_read_attribute'), 'function igk_xml_read_attribute not exists'); 
	}
	/** @test */
	public function testigk_xml_read_content(){ 
	$this->assertTrue(function_exists('igk_xml_read_content'), 'function igk_xml_read_content not exists'); 
	}
	/** @test */
	public function testigk_xml_read_doctype(){ 
	$this->assertTrue(function_exists('igk_xml_read_doctype'), 'function igk_xml_read_doctype not exists'); 
	}
	/** @test */
	public function testigk_xml_read_node(){ 
	$this->assertTrue(function_exists('igk_xml_read_node'), 'function igk_xml_read_node not exists'); 
	}
	/** @test */
	public function testigk_xml_read_skip(){ 
	$this->assertTrue(function_exists('igk_xml_read_skip'), 'function igk_xml_read_skip not exists'); 
	}
	/** @test */
	public function testigk_xml_read_stream(){ 
	$this->assertTrue(function_exists('igk_xml_read_stream'), 'function igk_xml_read_stream not exists'); 
	}
	/** @test */
	public function testigk_xml_read_tagname(){ 
	$this->assertTrue(function_exists('igk_xml_read_tagname'), 'function igk_xml_read_tagname not exists'); 
	}
	/** @test */
	public function testigk_xml_read_xml(){ 
	$this->assertTrue(function_exists('igk_xml_read_xml'), 'function igk_xml_read_xml not exists'); 
	}
	/** @test */
	public function testigk_xml_render(){ 
	$this->assertTrue(function_exists('igk_xml_render'), 'function igk_xml_render not exists'); 
	}
	/** @test */
	public function testigk_xml_to_node(){ 
	$this->assertTrue(function_exists('igk_xml_to_node'), 'function igk_xml_to_node not exists'); 
	}
	/** @test */
	public function testigk_xml_to_obj(){ 
	$this->assertTrue(function_exists('igk_xml_to_obj'), 'function igk_xml_to_obj not exists'); 
	}
	/** @test */
	public function testigk_xml_type2str(){ 
	$this->assertTrue(function_exists('igk_xml_type2str'), 'function igk_xml_type2str not exists'); 
	}
	/** @test */
	public function testigk_xml_unset_read_info(){ 
	$this->assertTrue(function_exists('igk_xml_unset_read_info'), 'function igk_xml_unset_read_info not exists'); 
	}
	/** @test */
	public function testigk_xml_xpath_objectcallback(){ 
	$this->assertTrue(function_exists('igk_xml_xpath_objectcallback'), 'function igk_xml_xpath_objectcallback not exists'); 
	}
	/** @test */
	public function testigk_xml_xsl_transform(){ 
	$this->assertTrue(function_exists('igk_xml_xsl_transform'), 'function igk_xml_xsl_transform not exists'); 
	}
	/** @test */
	public function testigk_xml_xsl_transformnode(){ 
	$this->assertTrue(function_exists('igk_xml_xsl_transformnode'), 'function igk_xml_xsl_transformnode not exists'); 
	}
	/** @test */
	public function testigk_zip_content(){ 
	$this->assertTrue(function_exists('igk_zip_content'), 'function igk_zip_content not exists'); 
	}
	/** @test */
	public function testigk_zip_create_dir(){ 
	$this->assertTrue(function_exists('igk_zip_create_dir'), 'function igk_zip_create_dir not exists'); 
	}
	/** @test */
	public function testigk_zip_create_file(){ 
	$this->assertTrue(function_exists('igk_zip_create_file'), 'function igk_zip_create_file not exists'); 
	}
	/** @test */
	public function testigk_zip_delete(){ 
	$this->assertTrue(function_exists('igk_zip_delete'), 'function igk_zip_delete not exists'); 
	}
	/** @test */
	public function testigk_zip_dir(){ 
	$this->assertTrue(function_exists('igk_zip_dir'), 'function igk_zip_dir not exists'); 
	}
	/** @test */
	public function testigk_zip_excludedir(){ 
	$this->assertTrue(function_exists('igk_zip_excludedir'), 'function igk_zip_excludedir not exists'); 
	}
	/** @test */
	public function testigk_zip_extract(){ 
	$this->assertTrue(function_exists('igk_zip_extract'), 'function igk_zip_extract not exists'); 
	}
	/** @test */
	public function testigk_zip_folder(){ 
	$this->assertTrue(function_exists('igk_zip_folder'), 'function igk_zip_folder not exists'); 
	}
	/** @test */
	public function testigk_zip_isdirentry(){ 
	$this->assertTrue(function_exists('igk_zip_isdirentry'), 'function igk_zip_isdirentry not exists'); 
	}
	/** @test */
	public function testigk_zip_module(){ 
	$this->assertTrue(function_exists('igk_zip_module'), 'function igk_zip_module not exists'); 
	}
	/** @test */
	public function testigk_zip_output(){ 
	$this->assertTrue(function_exists('igk_zip_output'), 'function igk_zip_output not exists'); 
	}
	/** @test */
	public function testigk_zip_unzip(){ 
	$this->assertTrue(function_exists('igk_zip_unzip'), 'function igk_zip_unzip not exists'); 
	}
	/** @test */
	public function testigk_zip_unzip_callback(){ 
	$this->assertTrue(function_exists('igk_zip_unzip_callback'), 'function igk_zip_unzip_callback not exists'); 
	}
	/** @test */
	public function testigk_zip_unzip_entry(){ 
	$this->assertTrue(function_exists('igk_zip_unzip_entry'), 'function igk_zip_unzip_entry not exists'); 
	}
	/** @test */
	public function testigk_zip_unzip_filecontent(){ 
	$this->assertTrue(function_exists('igk_zip_unzip_filecontent'), 'function igk_zip_unzip_filecontent not exists'); 
	}
	/** @test */
	public function testigk_zip_unzip_to(){ 
	$this->assertTrue(function_exists('igk_zip_unzip_to'), 'function igk_zip_unzip_to not exists'); 
	}
}