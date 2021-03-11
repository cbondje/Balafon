<?php
namespace IGK\Tests\Ext\controllerModel\IGKCommunityCtrl;
use PHPUnit\Framework\TestCase;
class igk_html_func_itemsTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_html_func_items.php"; 
	}
	/** @test */
	public function testigk_css_link_callback(){ 
	$this->assertTrue(function_exists('igk_css_link_callback'), 'function igk_css_link_callback not exists'); 
	}
	/** @test */
	public function testigk_file_content(){ 
	$this->assertTrue(function_exists('igk_file_content'), 'function igk_file_content not exists'); 
	}
	/** @test */
	public function testigk_html__tabbutton_add(){ 
	$this->assertTrue(function_exists('igk_html__tabbutton_add'), 'function igk_html__tabbutton_add not exists'); 
	}
	/** @test */
	public function testigk_html_add_context_menu_item(){ 
	$this->assertTrue(function_exists('igk_html_add_context_menu_item'), 'function igk_html_add_context_menu_item not exists'); 
	}
	/** @test */
	public function testigk_html_callback_ajx_lnksettarget(){ 
	$this->assertTrue(function_exists('igk_html_callback_ajx_lnksettarget'), 'function igk_html_callback_ajx_lnksettarget not exists'); 
	}
	/** @test */
	public function testigk_html_callback_alinktn(){ 
	$this->assertTrue(function_exists('igk_html_callback_alinktn'), 'function igk_html_callback_alinktn not exists'); 
	}
	/** @test */
	public function testigk_html_callback_ctrlview_acceptrender(){ 
	$this->assertTrue(function_exists('igk_html_callback_ctrlview_acceptrender'), 'function igk_html_callback_ctrlview_acceptrender not exists'); 
	}
	/** @test */
	public function testigk_html_callback_replacecontent_acceptrender(){ 
	$this->assertTrue(function_exists('igk_html_callback_replacecontent_acceptrender'), 'function igk_html_callback_replacecontent_acceptrender not exists'); 
	}
	/** @test */
	public function testigk_html_code_copyright_callback(){ 
	$this->assertTrue(function_exists('igk_html_code_copyright_callback'), 'function igk_html_code_copyright_callback not exists'); 
	}
	/** @test */
	public function testigk_html_create_container_section(){ 
	$this->assertTrue(function_exists('igk_html_create_container_section'), 'function igk_html_create_container_section not exists'); 
	}
	/** @test */
	public function testigk_html_handle_cssstyle(){ 
	$this->assertTrue(function_exists('igk_html_handle_cssstyle'), 'function igk_html_handle_cssstyle not exists'); 
	}
	/** @test */
	public function testigk_html_node_a(){ 
	$this->assertTrue(function_exists('igk_html_node_a'), 'function igk_html_node_a not exists'); 
	}
	/** @test */
	public function testigk_html_node_abbr(){ 
	$this->assertTrue(function_exists('igk_html_node_abbr'), 'function igk_html_node_abbr not exists'); 
	}
	/** @test */
	public function testigk_html_node_abtn(){ 
	$this->assertTrue(function_exists('igk_html_node_abtn'), 'function igk_html_node_abtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_aclearsandreload(){ 
	$this->assertTrue(function_exists('igk_html_node_aclearsandreload'), 'function igk_html_node_aclearsandreload not exists'); 
	}
	/** @test */
	public function testigk_html_node_actionbar(){ 
	$this->assertTrue(function_exists('igk_html_node_actionbar'), 'function igk_html_node_actionbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_actions(){ 
	$this->assertTrue(function_exists('igk_html_node_actions'), 'function igk_html_node_actions not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajsbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_ajsbutton'), 'function igk_html_node_ajsbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajspickfile(){ 
	$this->assertTrue(function_exists('igk_html_node_ajspickfile'), 'function igk_html_node_ajspickfile not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxa(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxa'), 'function igk_html_node_ajxa not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxabutton(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxabutton'), 'function igk_html_node_ajxabutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxappendto(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxappendto'), 'function igk_html_node_ajxappendto not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxdoctitle(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxdoctitle'), 'function igk_html_node_ajxdoctitle not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxform(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxform'), 'function igk_html_node_ajxform not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxlnkreplace(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxlnkreplace'), 'function igk_html_node_ajxlnkreplace not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxpaginationview(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxpaginationview'), 'function igk_html_node_ajxpaginationview not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxpickfile(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxpickfile'), 'function igk_html_node_ajxpickfile not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxreplacecontent(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxreplacecontent'), 'function igk_html_node_ajxreplacecontent not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxreplacesource(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxreplacesource'), 'function igk_html_node_ajxreplacesource not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxupdateview(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxupdateview'), 'function igk_html_node_ajxupdateview not exists'); 
	}
	/** @test */
	public function testigk_html_node_ajxuriloader(){ 
	$this->assertTrue(function_exists('igk_html_node_ajxuriloader'), 'function igk_html_node_ajxuriloader not exists'); 
	}
	/** @test */
	public function testigk_html_node_arraydata(){ 
	$this->assertTrue(function_exists('igk_html_node_arraydata'), 'function igk_html_node_arraydata not exists'); 
	}
	/** @test */
	public function testigk_html_node_arraylist(){ 
	$this->assertTrue(function_exists('igk_html_node_arraylist'), 'function igk_html_node_arraylist not exists'); 
	}
	/** @test */
	public function testigk_html_node_article(){ 
	$this->assertTrue(function_exists('igk_html_node_article'), 'function igk_html_node_article not exists'); 
	}
	/** @test */
	public function testigk_html_node_attr_expression(){ 
	$this->assertTrue(function_exists('igk_html_node_attr_expression'), 'function igk_html_node_attr_expression not exists'); 
	}
	/** @test */
	public function testigk_html_node_backgroundlayer(){ 
	$this->assertTrue(function_exists('igk_html_node_backgroundlayer'), 'function igk_html_node_backgroundlayer not exists'); 
	}
	/** @test */
	public function testigk_html_node_badge(){ 
	$this->assertTrue(function_exists('igk_html_node_badge'), 'function igk_html_node_badge not exists'); 
	}
	/** @test */
	public function testigk_html_node_balafonjs(){ 
	$this->assertTrue(function_exists('igk_html_node_balafonjs'), 'function igk_html_node_balafonjs not exists'); 
	}
	/** @test */
	public function testigk_html_node_bindarticle(){ 
	$this->assertTrue(function_exists('igk_html_node_bindarticle'), 'function igk_html_node_bindarticle not exists'); 
	}
	/** @test */
	public function testigk_html_node_bindcontent(){ 
	$this->assertTrue(function_exists('igk_html_node_bindcontent'), 'function igk_html_node_bindcontent not exists'); 
	}
	/** @test */
	public function testigk_html_node_blocknode(){ 
	$this->assertTrue(function_exists('igk_html_node_blocknode'), 'function igk_html_node_blocknode not exists'); 
	}
	/** @test */
	public function testigk_html_node_bmcloginpage(){ 
	$this->assertTrue(function_exists('igk_html_node_bmcloginpage'), 'function igk_html_node_bmcloginpage not exists'); 
	}
	/** @test */
	public function testigk_html_node_bodybox(){ 
	$this->assertTrue(function_exists('igk_html_node_bodybox'), 'function igk_html_node_bodybox not exists'); 
	}
	/** @test */
	public function testigk_html_node_btn(){ 
	$this->assertTrue(function_exists('igk_html_node_btn'), 'function igk_html_node_btn not exists'); 
	}
	/** @test */
	public function testigk_html_node_buildselect(){ 
	$this->assertTrue(function_exists('igk_html_node_buildselect'), 'function igk_html_node_buildselect not exists'); 
	}
	/** @test */
	public function testigk_html_node_bullet(){ 
	$this->assertTrue(function_exists('igk_html_node_bullet'), 'function igk_html_node_bullet not exists'); 
	}
	/** @test */
	public function testigk_html_node_button(){ 
	$this->assertTrue(function_exists('igk_html_node_button'), 'function igk_html_node_button not exists'); 
	}
	/** @test */
	public function testigk_html_node_canvabalafonscript(){ 
	$this->assertTrue(function_exists('igk_html_node_canvabalafonscript'), 'function igk_html_node_canvabalafonscript not exists'); 
	}
	/** @test */
	public function testigk_html_node_canvaeditorsurface(){ 
	$this->assertTrue(function_exists('igk_html_node_canvaeditorsurface'), 'function igk_html_node_canvaeditorsurface not exists'); 
	}
	/** @test */
	public function testigk_html_node_cardid(){ 
	$this->assertTrue(function_exists('igk_html_node_cardid'), 'function igk_html_node_cardid not exists'); 
	}
	/** @test */
	public function testigk_html_node_cell(){ 
	$this->assertTrue(function_exists('igk_html_node_cell'), 'function igk_html_node_cell not exists'); 
	}
	/** @test */
	public function testigk_html_node_cellrow(){ 
	$this->assertTrue(function_exists('igk_html_node_cellrow'), 'function igk_html_node_cellrow not exists'); 
	}
	/** @test */
	public function testigk_html_node_centerbox(){ 
	$this->assertTrue(function_exists('igk_html_node_centerbox'), 'function igk_html_node_centerbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_circlewaiter(){ 
	$this->assertTrue(function_exists('igk_html_node_circlewaiter'), 'function igk_html_node_circlewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_node_clearboth(){ 
	$this->assertTrue(function_exists('igk_html_node_clearboth'), 'function igk_html_node_clearboth not exists'); 
	}
	/** @test */
	public function testigk_html_node_clearfloatbox(){ 
	$this->assertTrue(function_exists('igk_html_node_clearfloatbox'), 'function igk_html_node_clearfloatbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_cleartab(){ 
	$this->assertTrue(function_exists('igk_html_node_cleartab'), 'function igk_html_node_cleartab not exists'); 
	}
	/** @test */
	public function testigk_html_node_clonenode(){ 
	$this->assertTrue(function_exists('igk_html_node_clonenode'), 'function igk_html_node_clonenode not exists'); 
	}
	/** @test */
	public function testigk_html_node_code(){ 
	$this->assertTrue(function_exists('igk_html_node_code'), 'function igk_html_node_code not exists'); 
	}
	/** @test */
	public function testigk_html_node_col(){ 
	$this->assertTrue(function_exists('igk_html_node_col'), 'function igk_html_node_col not exists'); 
	}
	/** @test */
	public function testigk_html_node_colviewbox(){ 
	$this->assertTrue(function_exists('igk_html_node_colviewbox'), 'function igk_html_node_colviewbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_combobox(){ 
	$this->assertTrue(function_exists('igk_html_node_combobox'), 'function igk_html_node_combobox not exists'); 
	}
	/** @test */
	public function testigk_html_node_communitylink(){ 
	$this->assertTrue(function_exists('igk_html_node_communitylink'), 'function igk_html_node_communitylink not exists'); 
	}
	/** @test */
	public function testigk_html_node_communitylinks(){ 
	$this->assertTrue(function_exists('igk_html_node_communitylinks'), 'function igk_html_node_communitylinks not exists'); 
	}
	/** @test */
	public function testigk_html_node_component(){ 
	$this->assertTrue(function_exists('igk_html_node_component'), 'function igk_html_node_component not exists'); 
	}
	/** @test */
	public function testigk_html_node_conditionalnode(){ 
	$this->assertTrue(function_exists('igk_html_node_conditionalnode'), 'function igk_html_node_conditionalnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_container(){ 
	$this->assertTrue(function_exists('igk_html_node_container'), 'function igk_html_node_container not exists'); 
	}
	/** @test */
	public function testigk_html_node_containerrowcol(){ 
	$this->assertTrue(function_exists('igk_html_node_containerrowcol'), 'function igk_html_node_containerrowcol not exists'); 
	}
	/** @test */
	public function testigk_html_node_contextmenu(){ 
	$this->assertTrue(function_exists('igk_html_node_contextmenu'), 'function igk_html_node_contextmenu not exists'); 
	}
	/** @test */
	public function testigk_html_node_cookiewarning(){ 
	$this->assertTrue(function_exists('igk_html_node_cookiewarning'), 'function igk_html_node_cookiewarning not exists'); 
	}
	/** @test */
	public function testigk_html_node_copyright(){ 
	$this->assertTrue(function_exists('igk_html_node_copyright'), 'function igk_html_node_copyright not exists'); 
	}
	/** @test */
	public function testigk_html_node_csscomponentstyle(){ 
	$this->assertTrue(function_exists('igk_html_node_csscomponentstyle'), 'function igk_html_node_csscomponentstyle not exists'); 
	}
	/** @test */
	public function testigk_html_node_csslink(){ 
	$this->assertTrue(function_exists('igk_html_node_csslink'), 'function igk_html_node_csslink not exists'); 
	}
	/** @test */
	public function testigk_html_node_cssstyle(){ 
	$this->assertTrue(function_exists('igk_html_node_cssstyle'), 'function igk_html_node_cssstyle not exists'); 
	}
	/** @test */
	public function testigk_html_node_ctrlview(){ 
	$this->assertTrue(function_exists('igk_html_node_ctrlview'), 'function igk_html_node_ctrlview not exists'); 
	}
	/** @test */
	public function testigk_html_node_dataschema(){ 
	$this->assertTrue(function_exists('igk_html_node_dataschema'), 'function igk_html_node_dataschema not exists'); 
	}
	/** @test */
	public function testigk_html_node_dbdataschema(){ 
	$this->assertTrue(function_exists('igk_html_node_dbdataschema'), 'function igk_html_node_dbdataschema not exists'); 
	}
	/** @test */
	public function testigk_html_node_dbentriescallback(){ 
	$this->assertTrue(function_exists('igk_html_node_dbentriescallback'), 'function igk_html_node_dbentriescallback not exists'); 
	}
	/** @test */
	public function testigk_html_node_dbresult(){ 
	$this->assertTrue(function_exists('igk_html_node_dbresult'), 'function igk_html_node_dbresult not exists'); 
	}
	/** @test */
	public function testigk_html_node_dbselect(){ 
	$this->assertTrue(function_exists('igk_html_node_dbselect'), 'function igk_html_node_dbselect not exists'); 
	}
	/** @test */
	public function testigk_html_node_defercsslink(){ 
	$this->assertTrue(function_exists('igk_html_node_defercsslink'), 'function igk_html_node_defercsslink not exists'); 
	}
	/** @test */
	public function testigk_html_node_dialog(){ 
	$this->assertTrue(function_exists('igk_html_node_dialog'), 'function igk_html_node_dialog not exists'); 
	}
	/** @test */
	public function testigk_html_node_dialogbox(){ 
	$this->assertTrue(function_exists('igk_html_node_dialogbox'), 'function igk_html_node_dialogbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_dialogboxcontent(){ 
	$this->assertTrue(function_exists('igk_html_node_dialogboxcontent'), 'function igk_html_node_dialogboxcontent not exists'); 
	}
	/** @test */
	public function testigk_html_node_dialogboxoptions(){ 
	$this->assertTrue(function_exists('igk_html_node_dialogboxoptions'), 'function igk_html_node_dialogboxoptions not exists'); 
	}
	/** @test */
	public function testigk_html_node_divcontainer(){ 
	$this->assertTrue(function_exists('igk_html_node_divcontainer'), 'function igk_html_node_divcontainer not exists'); 
	}
	/** @test */
	public function testigk_html_node_domainlink(){ 
	$this->assertTrue(function_exists('igk_html_node_domainlink'), 'function igk_html_node_domainlink not exists'); 
	}
	/** @test */
	public function testigk_html_node_enginecontrol(){ 
	$this->assertTrue(function_exists('igk_html_node_enginecontrol'), 'function igk_html_node_enginecontrol not exists'); 
	}
	/** @test */
	public function testigk_html_node_error404(){ 
	$this->assertTrue(function_exists('igk_html_node_error404'), 'function igk_html_node_error404 not exists'); 
	}
	/** @test */
	public function testigk_html_node_expo(){ 
	$this->assertTrue(function_exists('igk_html_node_expo'), 'function igk_html_node_expo not exists'); 
	}
	/** @test */
	public function testigk_html_node_expression_node(){ 
	$this->assertTrue(function_exists('igk_html_node_expression_node'), 'function igk_html_node_expression_node not exists'); 
	}
	/** @test */
	public function testigk_html_node_extends(){ 
	$this->assertTrue(function_exists('igk_html_node_extends'), 'function igk_html_node_extends not exists'); 
	}
	/** @test */
	public function testigk_html_node_fields(){ 
	$this->assertTrue(function_exists('igk_html_node_fields'), 'function igk_html_node_fields not exists'); 
	}
	/** @test */
	public function testigk_html_node_fixedactionbar(){ 
	$this->assertTrue(function_exists('igk_html_node_fixedactionbar'), 'function igk_html_node_fixedactionbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_fontsymbol(){ 
	$this->assertTrue(function_exists('igk_html_node_fontsymbol'), 'function igk_html_node_fontsymbol not exists'); 
	}
	/** @test */
	public function testigk_html_node_formactionbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_formactionbutton'), 'function igk_html_node_formactionbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_formcref(){ 
	$this->assertTrue(function_exists('igk_html_node_formcref'), 'function igk_html_node_formcref not exists'); 
	}
	/** @test */
	public function testigk_html_node_formfields(){ 
	$this->assertTrue(function_exists('igk_html_node_formfields'), 'function igk_html_node_formfields not exists'); 
	}
	/** @test */
	public function testigk_html_node_formgroup(){ 
	$this->assertTrue(function_exists('igk_html_node_formgroup'), 'function igk_html_node_formgroup not exists'); 
	}
	/** @test */
	public function testigk_html_node_formusagecondition(){ 
	$this->assertTrue(function_exists('igk_html_node_formusagecondition'), 'function igk_html_node_formusagecondition not exists'); 
	}
	/** @test */
	public function testigk_html_node_frame(){ 
	$this->assertTrue(function_exists('igk_html_node_frame'), 'function igk_html_node_frame not exists'); 
	}
	/** @test */
	public function testigk_html_node_framedialog(){ 
	$this->assertTrue(function_exists('igk_html_node_framedialog'), 'function igk_html_node_framedialog not exists'); 
	}
	/** @test */
	public function testigk_html_node_galleryfolder(){ 
	$this->assertTrue(function_exists('igk_html_node_galleryfolder'), 'function igk_html_node_galleryfolder not exists'); 
	}
	/** @test */
	public function testigk_html_node_headerbar(){ 
	$this->assertTrue(function_exists('igk_html_node_headerbar'), 'function igk_html_node_headerbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_hlineseparator(){ 
	$this->assertTrue(function_exists('igk_html_node_hlineseparator'), 'function igk_html_node_hlineseparator not exists'); 
	}
	/** @test */
	public function testigk_html_node_hook(){ 
	$this->assertTrue(function_exists('igk_html_node_hook'), 'function igk_html_node_hook not exists'); 
	}
	/** @test */
	public function testigk_html_node_horizontalpageview(){ 
	$this->assertTrue(function_exists('igk_html_node_horizontalpageview'), 'function igk_html_node_horizontalpageview not exists'); 
	}
	/** @test */
	public function testigk_html_node_hostobdata(){ 
	$this->assertTrue(function_exists('igk_html_node_hostobdata'), 'function igk_html_node_hostobdata not exists'); 
	}
	/** @test */
	public function testigk_html_node_hscrollbar(){ 
	$this->assertTrue(function_exists('igk_html_node_hscrollbar'), 'function igk_html_node_hscrollbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_hsep(){ 
	$this->assertTrue(function_exists('igk_html_node_hsep'), 'function igk_html_node_hsep not exists'); 
	}
	/** @test */
	public function testigk_html_node_htmlnode(){ 
	$this->assertTrue(function_exists('igk_html_node_htmlnode'), 'function igk_html_node_htmlnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_huebar(){ 
	$this->assertTrue(function_exists('igk_html_node_huebar'), 'function igk_html_node_huebar not exists'); 
	}
	/** @test */
	public function testigk_html_node_igkcopyright(){ 
	$this->assertTrue(function_exists('igk_html_node_igkcopyright'), 'function igk_html_node_igkcopyright not exists'); 
	}
	/** @test */
	public function testigk_html_node_igkgloballangselector(){ 
	$this->assertTrue(function_exists('igk_html_node_igkgloballangselector'), 'function igk_html_node_igkgloballangselector not exists'); 
	}
	/** @test */
	public function testigk_html_node_igkglobalthemeselector(){ 
	$this->assertTrue(function_exists('igk_html_node_igkglobalthemeselector'), 'function igk_html_node_igkglobalthemeselector not exists'); 
	}
	/** @test */
	public function testigk_html_node_igkheaderbar(){ 
	$this->assertTrue(function_exists('igk_html_node_igkheaderbar'), 'function igk_html_node_igkheaderbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_igksitemap(){ 
	$this->assertTrue(function_exists('igk_html_node_igksitemap'), 'function igk_html_node_igksitemap not exists'); 
	}
	/** @test */
	public function testigk_html_node_imagenode(){ 
	$this->assertTrue(function_exists('igk_html_node_imagenode'), 'function igk_html_node_imagenode not exists'); 
	}
	/** @test */
	public function testigk_html_node_imglnk(){ 
	$this->assertTrue(function_exists('igk_html_node_imglnk'), 'function igk_html_node_imglnk not exists'); 
	}
	/** @test */
	public function testigk_html_node_innerimg(){ 
	$this->assertTrue(function_exists('igk_html_node_innerimg'), 'function igk_html_node_innerimg not exists'); 
	}
	/** @test */
	public function testigk_html_node_jombotron(){ 
	$this->assertTrue(function_exists('igk_html_node_jombotron'), 'function igk_html_node_jombotron not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsaextern(){ 
	$this->assertTrue(function_exists('igk_html_node_jsaextern'), 'function igk_html_node_jsaextern not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_jsbtn'), 'function igk_html_node_jsbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsbtnshowdialog(){ 
	$this->assertTrue(function_exists('igk_html_node_jsbtnshowdialog'), 'function igk_html_node_jsbtnshowdialog not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_jsbutton'), 'function igk_html_node_jsbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsclonenode(){ 
	$this->assertTrue(function_exists('igk_html_node_jsclonenode'), 'function igk_html_node_jsclonenode not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsclonetarget(){ 
	$this->assertTrue(function_exists('igk_html_node_jsclonetarget'), 'function igk_html_node_jsclonetarget not exists'); 
	}
	/** @test */
	public function testigk_html_node_jslogger(){ 
	$this->assertTrue(function_exists('igk_html_node_jslogger'), 'function igk_html_node_jslogger not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsreadyscript(){ 
	$this->assertTrue(function_exists('igk_html_node_jsreadyscript'), 'function igk_html_node_jsreadyscript not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsreplaceuri(){ 
	$this->assertTrue(function_exists('igk_html_node_jsreplaceuri'), 'function igk_html_node_jsreplaceuri not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsscript(){ 
	$this->assertTrue(function_exists('igk_html_node_jsscript'), 'function igk_html_node_jsscript not exists'); 
	}
	/** @test */
	public function testigk_html_node_jsview(){ 
	$this->assertTrue(function_exists('igk_html_node_jsview'), 'function igk_html_node_jsview not exists'); 
	}
	/** @test */
	public function testigk_html_node_label(){ 
	$this->assertTrue(function_exists('igk_html_node_label'), 'function igk_html_node_label not exists'); 
	}
	/** @test */
	public function testigk_html_node_labelinput(){ 
	$this->assertTrue(function_exists('igk_html_node_labelinput'), 'function igk_html_node_labelinput not exists'); 
	}
	/** @test */
	public function testigk_html_node_lborder(){ 
	$this->assertTrue(function_exists('igk_html_node_lborder'), 'function igk_html_node_lborder not exists'); 
	}
	/** @test */
	public function testigk_html_node_linewaiter(){ 
	$this->assertTrue(function_exists('igk_html_node_linewaiter'), 'function igk_html_node_linewaiter not exists'); 
	}
	/** @test */
	public function testigk_html_node_linkbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_linkbtn'), 'function igk_html_node_linkbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_list(){ 
	$this->assertTrue(function_exists('igk_html_node_list'), 'function igk_html_node_list not exists'); 
	}
	/** @test */
	public function testigk_html_node_livenodecallback(){ 
	$this->assertTrue(function_exists('igk_html_node_livenodecallback'), 'function igk_html_node_livenodecallback not exists'); 
	}
	/** @test */
	public function testigk_html_node_localizabletext(){ 
	$this->assertTrue(function_exists('igk_html_node_localizabletext'), 'function igk_html_node_localizabletext not exists'); 
	}
	/** @test */
	public function testigk_html_node_loremipsum(){ 
	$this->assertTrue(function_exists('igk_html_node_loremipsum'), 'function igk_html_node_loremipsum not exists'); 
	}
	/** @test */
	public function testigk_html_node_mailto(){ 
	$this->assertTrue(function_exists('igk_html_node_mailto'), 'function igk_html_node_mailto not exists'); 
	}
	/** @test */
	public function testigk_html_node_menu(){ 
	$this->assertTrue(function_exists('igk_html_node_menu'), 'function igk_html_node_menu not exists'); 
	}
	/** @test */
	public function testigk_html_node_menukey(){ 
	$this->assertTrue(function_exists('igk_html_node_menukey'), 'function igk_html_node_menukey not exists'); 
	}
	/** @test */
	public function testigk_html_node_menulist(){ 
	$this->assertTrue(function_exists('igk_html_node_menulist'), 'function igk_html_node_menulist not exists'); 
	}
	/** @test */
	public function testigk_html_node_moreview(){ 
	$this->assertTrue(function_exists('igk_html_node_moreview'), 'function igk_html_node_moreview not exists'); 
	}
	/** @test */
	public function testigk_html_node_msdialog(){ 
	$this->assertTrue(function_exists('igk_html_node_msdialog'), 'function igk_html_node_msdialog not exists'); 
	}
	/** @test */
	public function testigk_html_node_mstitle(){ 
	$this->assertTrue(function_exists('igk_html_node_mstitle'), 'function igk_html_node_mstitle not exists'); 
	}
	/** @test */
	public function testigk_html_node_navigationlink(){ 
	$this->assertTrue(function_exists('igk_html_node_navigationlink'), 'function igk_html_node_navigationlink not exists'); 
	}
	/** @test */
	public function testigk_html_node_newsletterregistration(){ 
	$this->assertTrue(function_exists('igk_html_node_newsletterregistration'), 'function igk_html_node_newsletterregistration not exists'); 
	}
	/** @test */
	public function testigk_html_node_notagnode(){ 
	$this->assertTrue(function_exists('igk_html_node_notagnode'), 'function igk_html_node_notagnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_notagobdata(){ 
	$this->assertTrue(function_exists('igk_html_node_notagobdata'), 'function igk_html_node_notagobdata not exists'); 
	}
	/** @test */
	public function testigk_html_node_notification(){ 
	$this->assertTrue(function_exists('igk_html_node_notification'), 'function igk_html_node_notification not exists'); 
	}
	/** @test */
	public function testigk_html_node_notifyhost(){ 
	$this->assertTrue(function_exists('igk_html_node_notifyhost'), 'function igk_html_node_notifyhost not exists'); 
	}
	/** @test */
	public function testigk_html_node_notifyhostbind(){ 
	$this->assertTrue(function_exists('igk_html_node_notifyhostbind'), 'function igk_html_node_notifyhostbind not exists'); 
	}
	/** @test */
	public function testigk_html_node_notifyzone(){ 
	$this->assertTrue(function_exists('igk_html_node_notifyzone'), 'function igk_html_node_notifyzone not exists'); 
	}
	/** @test */
	public function testigk_html_node_obdata(){ 
	$this->assertTrue(function_exists('igk_html_node_obdata'), 'function igk_html_node_obdata not exists'); 
	}
	/** @test */
	public function testigk_html_node_onrendercallback(){ 
	$this->assertTrue(function_exists('igk_html_node_onrendercallback'), 'function igk_html_node_onrendercallback not exists'); 
	}
	/** @test */
	public function testigk_html_node_page(){ 
	$this->assertTrue(function_exists('igk_html_node_page'), 'function igk_html_node_page not exists'); 
	}
	/** @test */
	public function testigk_html_node_paginationview(){ 
	$this->assertTrue(function_exists('igk_html_node_paginationview'), 'function igk_html_node_paginationview not exists'); 
	}
	/** @test */
	public function testigk_html_node_panelbox(){ 
	$this->assertTrue(function_exists('igk_html_node_panelbox'), 'function igk_html_node_panelbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_paneldialog(){ 
	$this->assertTrue(function_exists('igk_html_node_paneldialog'), 'function igk_html_node_paneldialog not exists'); 
	}
	/** @test */
	public function testigk_html_node_parallaxnode(){ 
	$this->assertTrue(function_exists('igk_html_node_parallaxnode'), 'function igk_html_node_parallaxnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_popupmenu(){ 
	$this->assertTrue(function_exists('igk_html_node_popupmenu'), 'function igk_html_node_popupmenu not exists'); 
	}
	/** @test */
	public function testigk_html_node_printbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_printbtn'), 'function igk_html_node_printbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_progressbar(){ 
	$this->assertTrue(function_exists('igk_html_node_progressbar'), 'function igk_html_node_progressbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_readonlytextzone(){ 
	$this->assertTrue(function_exists('igk_html_node_readonlytextzone'), 'function igk_html_node_readonlytextzone not exists'); 
	}
	/** @test */
	public function testigk_html_node_registermailform(){ 
	$this->assertTrue(function_exists('igk_html_node_registermailform'), 'function igk_html_node_registermailform not exists'); 
	}
	/** @test */
	public function testigk_html_node_renderingexpression(){ 
	$this->assertTrue(function_exists('igk_html_node_renderingexpression'), 'function igk_html_node_renderingexpression not exists'); 
	}
	/** @test */
	public function testigk_html_node_repeatcontent(){ 
	$this->assertTrue(function_exists('igk_html_node_repeatcontent'), 'function igk_html_node_repeatcontent not exists'); 
	}
	/** @test */
	public function testigk_html_node_replaceuri(){ 
	$this->assertTrue(function_exists('igk_html_node_replaceuri'), 'function igk_html_node_replaceuri not exists'); 
	}
	/** @test */
	public function testigk_html_node_responsenode(){ 
	$this->assertTrue(function_exists('igk_html_node_responsenode'), 'function igk_html_node_responsenode not exists'); 
	}
	/** @test */
	public function testigk_html_node_rollin(){ 
	$this->assertTrue(function_exists('igk_html_node_rollin'), 'function igk_html_node_rollin not exists'); 
	}
	/** @test */
	public function testigk_html_node_roundbullet(){ 
	$this->assertTrue(function_exists('igk_html_node_roundbullet'), 'function igk_html_node_roundbullet not exists'); 
	}
	/** @test */
	public function testigk_html_node_row(){ 
	$this->assertTrue(function_exists('igk_html_node_row'), 'function igk_html_node_row not exists'); 
	}
	/** @test */
	public function testigk_html_node_rowcolumn(){ 
	$this->assertTrue(function_exists('igk_html_node_rowcolumn'), 'function igk_html_node_rowcolumn not exists'); 
	}
	/** @test */
	public function testigk_html_node_rowcontainer(){ 
	$this->assertTrue(function_exists('igk_html_node_rowcontainer'), 'function igk_html_node_rowcontainer not exists'); 
	}
	/** @test */
	public function testigk_html_node_scrollimg(){ 
	$this->assertTrue(function_exists('igk_html_node_scrollimg'), 'function igk_html_node_scrollimg not exists'); 
	}
	/** @test */
	public function testigk_html_node_scrollloader(){ 
	$this->assertTrue(function_exists('igk_html_node_scrollloader'), 'function igk_html_node_scrollloader not exists'); 
	}
	/** @test */
	public function testigk_html_node_searchbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_searchbutton'), 'function igk_html_node_searchbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_sectiontitle(){ 
	$this->assertTrue(function_exists('igk_html_node_sectiontitle'), 'function igk_html_node_sectiontitle not exists'); 
	}
	/** @test */
	public function testigk_html_node_select_options(){ 
	$this->assertTrue(function_exists('igk_html_node_select_options'), 'function igk_html_node_select_options not exists'); 
	}
	/** @test */
	public function testigk_html_node_separator(){ 
	$this->assertTrue(function_exists('igk_html_node_separator'), 'function igk_html_node_separator not exists'); 
	}
	/** @test */
	public function testigk_html_node_sidemenunavigation(){ 
	$this->assertTrue(function_exists('igk_html_node_sidemenunavigation'), 'function igk_html_node_sidemenunavigation not exists'); 
	}
	/** @test */
	public function testigk_html_node_singlenodeviewer(){ 
	$this->assertTrue(function_exists('igk_html_node_singlenodeviewer'), 'function igk_html_node_singlenodeviewer not exists'); 
	}
	/** @test */
	public function testigk_html_node_singlerowcol(){ 
	$this->assertTrue(function_exists('igk_html_node_singlerowcol'), 'function igk_html_node_singlerowcol not exists'); 
	}
	/** @test */
	public function testigk_html_node_slabelcheckbox(){ 
	$this->assertTrue(function_exists('igk_html_node_slabelcheckbox'), 'function igk_html_node_slabelcheckbox not exists'); 
	}
	/** @test */
	public function testigk_html_node_slabelinput(){ 
	$this->assertTrue(function_exists('igk_html_node_slabelinput'), 'function igk_html_node_slabelinput not exists'); 
	}
	/** @test */
	public function testigk_html_node_slabelselect(){ 
	$this->assertTrue(function_exists('igk_html_node_slabelselect'), 'function igk_html_node_slabelselect not exists'); 
	}
	/** @test */
	public function testigk_html_node_slabeltextarea(){ 
	$this->assertTrue(function_exists('igk_html_node_slabeltextarea'), 'function igk_html_node_slabeltextarea not exists'); 
	}
	/** @test */
	public function testigk_html_node_spangroup(){ 
	$this->assertTrue(function_exists('igk_html_node_spangroup'), 'function igk_html_node_spangroup not exists'); 
	}
	/** @test */
	public function testigk_html_node_style(){ 
	$this->assertTrue(function_exists('igk_html_node_style'), 'function igk_html_node_style not exists'); 
	}
	/** @test */
	public function testigk_html_node_submit(){ 
	$this->assertTrue(function_exists('igk_html_node_submit'), 'function igk_html_node_submit not exists'); 
	}
	/** @test */
	public function testigk_html_node_submitbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_submitbtn'), 'function igk_html_node_submitbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_svga(){ 
	$this->assertTrue(function_exists('igk_html_node_svga'), 'function igk_html_node_svga not exists'); 
	}
	/** @test */
	public function testigk_html_node_svgajxformbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_svgajxformbtn'), 'function igk_html_node_svgajxformbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_svglnkbtn(){ 
	$this->assertTrue(function_exists('igk_html_node_svglnkbtn'), 'function igk_html_node_svglnkbtn not exists'); 
	}
	/** @test */
	public function testigk_html_node_svgsymbol(){ 
	$this->assertTrue(function_exists('igk_html_node_svgsymbol'), 'function igk_html_node_svgsymbol not exists'); 
	}
	/** @test */
	public function testigk_html_node_svguse(){ 
	$this->assertTrue(function_exists('igk_html_node_svguse'), 'function igk_html_node_svguse not exists'); 
	}
	/** @test */
	public function testigk_html_node_symbol(){ 
	$this->assertTrue(function_exists('igk_html_node_symbol'), 'function igk_html_node_symbol not exists'); 
	}
	/** @test */
	public function testigk_html_node_sysarticle(){ 
	$this->assertTrue(function_exists('igk_html_node_sysarticle'), 'function igk_html_node_sysarticle not exists'); 
	}
	/** @test */
	public function testigk_html_node_tabbutton(){ 
	$this->assertTrue(function_exists('igk_html_node_tabbutton'), 'function igk_html_node_tabbutton not exists'); 
	}
	/** @test */
	public function testigk_html_node_tableheader(){ 
	$this->assertTrue(function_exists('igk_html_node_tableheader'), 'function igk_html_node_tableheader not exists'); 
	}
	/** @test */
	public function testigk_html_node_tablehost(){ 
	$this->assertTrue(function_exists('igk_html_node_tablehost'), 'function igk_html_node_tablehost not exists'); 
	}
	/** @test */
	public function testigk_html_node_td(){ 
	$this->assertTrue(function_exists('igk_html_node_td'), 'function igk_html_node_td not exists'); 
	}
	/** @test */
	public function testigk_html_node_template(){ 
	$this->assertTrue(function_exists('igk_html_node_template'), 'function igk_html_node_template not exists'); 
	}
	/** @test */
	public function testigk_html_node_textarea(){ 
	$this->assertTrue(function_exists('igk_html_node_textarea'), 'function igk_html_node_textarea not exists'); 
	}
	/** @test */
	public function testigk_html_node_textedit(){ 
	$this->assertTrue(function_exists('igk_html_node_textedit'), 'function igk_html_node_textedit not exists'); 
	}
	/** @test */
	public function testigk_html_node_thumbnaildocument(){ 
	$this->assertTrue(function_exists('igk_html_node_thumbnaildocument'), 'function igk_html_node_thumbnaildocument not exists'); 
	}
	/** @test */
	public function testigk_html_node_tip(){ 
	$this->assertTrue(function_exists('igk_html_node_tip'), 'function igk_html_node_tip not exists'); 
	}
	/** @test */
	public function testigk_html_node_titlelevel(){ 
	$this->assertTrue(function_exists('igk_html_node_titlelevel'), 'function igk_html_node_titlelevel not exists'); 
	}
	/** @test */
	public function testigk_html_node_titlenode(){ 
	$this->assertTrue(function_exists('igk_html_node_titlenode'), 'function igk_html_node_titlenode not exists'); 
	}
	/** @test */
	public function testigk_html_node_toast(){ 
	$this->assertTrue(function_exists('igk_html_node_toast'), 'function igk_html_node_toast not exists'); 
	}
	/** @test */
	public function testigk_html_node_tooltip(){ 
	$this->assertTrue(function_exists('igk_html_node_tooltip'), 'function igk_html_node_tooltip not exists'); 
	}
	/** @test */
	public function testigk_html_node_topnavbar(){ 
	$this->assertTrue(function_exists('igk_html_node_topnavbar'), 'function igk_html_node_topnavbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_trackbarnode(){ 
	$this->assertTrue(function_exists('igk_html_node_trackbarnode'), 'function igk_html_node_trackbarnode not exists'); 
	}
	/** @test */
	public function testigk_html_node_transitionblock(){ 
	$this->assertTrue(function_exists('igk_html_node_transitionblock'), 'function igk_html_node_transitionblock not exists'); 
	}
	/** @test */
	public function testigk_html_node_underconstructionpage(){ 
	$this->assertTrue(function_exists('igk_html_node_underconstructionpage'), 'function igk_html_node_underconstructionpage not exists'); 
	}
	/** @test */
	public function testigk_html_node_usesvg(){ 
	$this->assertTrue(function_exists('igk_html_node_usesvg'), 'function igk_html_node_usesvg not exists'); 
	}
	/** @test */
	public function testigk_html_node_videofilestream(){ 
	$this->assertTrue(function_exists('igk_html_node_videofilestream'), 'function igk_html_node_videofilestream not exists'); 
	}
	/** @test */
	public function testigk_html_node_viewcallback(){ 
	$this->assertTrue(function_exists('igk_html_node_viewcallback'), 'function igk_html_node_viewcallback not exists'); 
	}
	/** @test */
	public function testigk_html_node_viewcontent(){ 
	$this->assertTrue(function_exists('igk_html_node_viewcontent'), 'function igk_html_node_viewcontent not exists'); 
	}
	/** @test */
	public function testigk_html_node_visible(){ 
	$this->assertTrue(function_exists('igk_html_node_visible'), 'function igk_html_node_visible not exists'); 
	}
	/** @test */
	public function testigk_html_node_vscrollbar(){ 
	$this->assertTrue(function_exists('igk_html_node_vscrollbar'), 'function igk_html_node_vscrollbar not exists'); 
	}
	/** @test */
	public function testigk_html_node_vsep(){ 
	$this->assertTrue(function_exists('igk_html_node_vsep'), 'function igk_html_node_vsep not exists'); 
	}
	/** @test */
	public function testigk_html_node_walk(){ 
	$this->assertTrue(function_exists('igk_html_node_walk'), 'function igk_html_node_walk not exists'); 
	}
	/** @test */
	public function testigk_html_node_webglgamesurface(){ 
	$this->assertTrue(function_exists('igk_html_node_webglgamesurface'), 'function igk_html_node_webglgamesurface not exists'); 
	}
	/** @test */
	public function testigk_html_node_webglscriptsurface(){ 
	$this->assertTrue(function_exists('igk_html_node_webglscriptsurface'), 'function igk_html_node_webglscriptsurface not exists'); 
	}
	/** @test */
	public function testigk_html_node_webmasternode(){ 
	$this->assertTrue(function_exists('igk_html_node_webmasternode'), 'function igk_html_node_webmasternode not exists'); 
	}
	/** @test */
	public function testigk_html_node_word(){ 
	$this->assertTrue(function_exists('igk_html_node_word'), 'function igk_html_node_word not exists'); 
	}
	/** @test */
	public function testigk_html_node_wordcasesplitter(){ 
	$this->assertTrue(function_exists('igk_html_node_wordcasesplitter'), 'function igk_html_node_wordcasesplitter not exists'); 
	}
	/** @test */
	public function testigk_html_node_wordsplitview(){ 
	$this->assertTrue(function_exists('igk_html_node_wordsplitview'), 'function igk_html_node_wordsplitview not exists'); 
	}
	/** @test */
	public function testigk_html_node_xslt(){ 
	$this->assertTrue(function_exists('igk_html_node_xslt'), 'function igk_html_node_xslt not exists'); 
	}
	/** @test */
	public function testigk_html_node_xsltranform(){ 
	$this->assertTrue(function_exists('igk_html_node_xsltranform'), 'function igk_html_node_xsltranform not exists'); 
	}
	/** @test */
	public function testigk_html_node_yield(){ 
	$this->assertTrue(function_exists('igk_html_node_yield'), 'function igk_html_node_yield not exists'); 
	}
	/** @test */
	public function testigk_html_set_tooltip(){ 
	$this->assertTrue(function_exists('igk_html_set_tooltip'), 'function igk_html_set_tooltip not exists'); 
	}
	/** @test */
	public function testigk_html_textareav_callback(){ 
	$this->assertTrue(function_exists('igk_html_textareav_callback'), 'function igk_html_textareav_callback not exists'); 
	}
	/** @test */
	public function testigk_html_viewcontentacceptrender(){ 
	$this->assertTrue(function_exists('igk_html_viewcontentacceptrender'), 'function igk_html_viewcontentacceptrender not exists'); 
	}
	/** @test */
	public function testigk_html_visibleconditionalnode(){ 
	$this->assertTrue(function_exists('igk_html_visibleconditionalnode'), 'function igk_html_visibleconditionalnode not exists'); 
	}
	/** @test */
	public function testigk_init_renderinglang(){ 
	$this->assertTrue(function_exists('igk_init_renderinglang'), 'function igk_init_renderinglang not exists'); 
	}
	/** @test */
	public function testigk_init_renderingtheme_callback(){ 
	$this->assertTrue(function_exists('igk_init_renderingtheme_callback'), 'function igk_init_renderingtheme_callback not exists'); 
	}
	/** @test */
	public function testigk_lang_display(){ 
	$this->assertTrue(function_exists('igk_lang_display'), 'function igk_lang_display not exists'); 
	}
	/** @test */
	public function testigk_min_script(){ 
	$this->assertTrue(function_exists('igk_min_script'), 'function igk_min_script not exists'); 
	}
	/** @test */
	public function testigk_notifyhostbind_callback(){ 
	$this->assertTrue(function_exists('igk_notifyhostbind_callback'), 'function igk_notifyhostbind_callback not exists'); 
	}
	/** @test */
	public function testigk_pic_zone(){ 
	$this->assertTrue(function_exists('igk_pic_zone'), 'function igk_pic_zone not exists'); 
	}
	/** @test */
	public function testigk_site_map_add_uri(){ 
	$this->assertTrue(function_exists('igk_site_map_add_uri'), 'function igk_site_map_add_uri not exists'); 
	}
}