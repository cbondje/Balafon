<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019

///<summary>Represente igk_html_demo_abtn function</summary>
///<param name="tg"></param>
/**
* Represente igk_html_demo_abtn function
* @param mixed $tg
*/
function igk_html_demo_abtn($tg){$tg->addABtn("#")->Content="Demo button";
}
///<summary>Represente igk_html_demo_code function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_code function
* @param mixed $t
*/
function igk_html_demo_code($t){
    $t->addCode()->setClass('php')->Content=<<<EOF
// a php code :
\$t->addCode()->Content = '//javascript';
EOF;
}
///<summary>Represente igk_html_demo_combobox function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_combobox function
* @param mixed $t
*/
function igk_html_demo_combobox($t){
    $t->addObData(function(){
        ?>
		<div>Exemple: </div>
<code class="dispb igk-code"  igk-code="php">$t->addCombobox("p-type", [
	["value"=>1, "text"=>"News"],
	["value"=>2, "text"=>"Orange"],
	["value"=>3, "text"=>"Blogs"]
],
[
"valuekey"=>"value",
"displaykey"=>"text|lang|uppercase",
"allowEmpty"=>1,
"emptyValue"=>-1,
"selected"=>2
])</code>
<?php
    });
    $t->addCombobox("p-type", [["value"=>1, "text"=>"News"], ["value"=>2, "text"=>"Orange"], ["value"=>3, "text"=>"Blogs"]], ["valuekey"=>"value", "displaykey"=>"text|lang|uppercase", "allowEmpty"=>1, "emptyValue"=>-1, "selected"=>2]);
}
///<summary>Represente igk_html_demo_facebookcomments function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_facebookcomments function
* @param mixed $t
*/
function igk_html_demo_facebookcomments($t){
    $t->addFacebookComments("https://facebook.com/bondjesonde");
}
///<summary>Represente igk_html_demo_huebar function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_huebar function
* @param mixed $t
*/
function igk_html_demo_huebar($t){
    $t->addDiv()->Content="Hubar -";
    $hbar=$t->add('huebar')->setStyle("width:200px; height:16px; border:1px solid black;");
    $t->addSpan()->setClass("huev")->Content='hsv';
}
///<summary>Represente igk_html_demo_progressbar function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_progressbar function
* @param mixed $t
*/
function igk_html_demo_progressbar($t){
    $n=igk_createNode();
    $n["class"]="igk-progressbar";
    $n["data-number"]="50.0";
    $n->m_cur=$n->addDiv()->setClass("igk-progressbar-cur -igk-progress-0 -igk-progress-10");
    $t->add($n);
    return $n;
}
///<summary>Represente igk_html_demo_symbol function</summary>
///<param name="tg"></param>
/**
* Represente igk_html_demo_symbol function
* @param mixed $tg
*/
function igk_html_demo_symbol($tg){$tg->addDiv()->Content="Load a symbol with integer code equal to 1 if registrated";
    $tg->addDiv()->setStyle("width:40px; height:40px")->addSymbol(1);
    $tg->addDiv()->Content="Code of this sample:";
    $tg->addCodeViewer()->Content=<<<EOF
\$tg->addDiv()->setStyle("width:40px; height:40px")->addSymbol(1);
EOF;
}
///<summary>Represente igk_html_demo_toast function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_toast function
* @param mixed $t
*/
function igk_html_demo_toast($t){
    $g=$t->addDiv();
    $g->addA("#")->setClass("igk-btn")->setAttribute("onclick", "javascript: ns_igk.winui.controls.toast.initDemo(); return false;")->Content="Show Toast";
}
///<summary>Represente igk_html_demo_xslt function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_xslt function
* @param mixed $t
*/
function igk_html_demo_xslt($t){
    $s=<<<EOF
<books>
	<book>
		<title>Balafon</title>
		<desc>452</desc>
	</book>
	<book>
		<title>DirectX</title>
		<desc>452</desc>
	</book>
	<book>
		<title>OpenGL</title>
		<desc>452</desc>
	</book>
</books>
EOF;
    $f1=<<<EOF
<div>
	<h2>Book Collection - Data</h2>
	<xsl:for-each select="books/book">
	<div>
		<xsl:value-of select='title' />
	</div>
	</xsl:for-each>
</div>
EOF;
    $n=igk_html_node_xslt($s, $f1);
    igk_html_title($t, "xml", 3);
    $t->addCode()->setAttribute("lang", "php")->Content=$s;
    igk_html_title($t, "xslt", 3);
    $t->addCode()->setAttribute("lang", "php")->Content=$f1;
    $t->add($n);
    return $t;
}
