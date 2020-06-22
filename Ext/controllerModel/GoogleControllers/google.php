<?php
// file: google.php
// author: C.A.D. BONDJE DOUE
// description: BALAFON google's utility function. fonts, some components
// version: 1.0
//annotation: none, vertical-bubble, bubble
// default: //view

use IGK\Core\Ext\Google\IGKGoogleCssUri as GoogleCssUri;
use IGK\Core\Ext\Google\IGKGooglePackage as IGKGooglePackage;
use IGK\Core\Ext\Google\IGKHrefListValue as IGKHrefListValue;
///<summary>add google font to theme</summary>
///<param name="document"> document to attach the google font  </param>
///<param name="family"> Font's Name</param>
///<param name="sizes" default="100;200;400;700;900"> semi - column separated size</param>
///<param name="temp" default="1"> attached temporaly</param>
///<exemple>igk_google_addfont($doc, 'Roboto');</exemple>
/**
* add google font to theme
* @param document  document to attach the google font 
* @param family  Font's Name
* @param sizes  semi - column separated size
* @param temp  attached temporaly
*/
function igk_google_addfont($doc, $family, $size='100;200;400;700;900', $temp=1){
    $g=trim($family);
    if(empty($g)){
        igk_die("font name is empty");
    }
    $key=igk_google_font_api_uri($g, $size);
    if(!igk_is_webapp() && !igk_server_is_local()){
        $doc->head->addCssLink($key, $temp);
    }
    else{
        $doc->head->addCssLink((object)['callback'=>'igk_google_local_uri_callback', 'params'=>[$key, $family], 'refName'=>$key], $temp);
    }
    $n=str_replace(" ", "-", $family);
    $doc->Theme->def[".google-".$n]="font-family:'{$family}', sans-serif;";
	

    igk_hook("google_init_component", "font");
}
///<summary>Represente igk_google_apikey function</summary>
/**
* Represente igk_google_apikey function
*/
function igk_google_apikey(){
    $k=IGKGoogleConfigurationSetting::API_KEY;
    $ctrl=igk_getctrl("com.igkdev.googleapi");
    $api_key = null;
    (($ctrl &&  ($api_key=igk_ctrl_get_setting($ctrl, $k))) || 
    ($api_key = igk_app()->Configs->{"google.apikey"}));

    return $api_key;
}
///<summary>get condensed family name for URI </summary>
/**
* get condensed family name for URI 
*/
function igk_google_condensedfamilyname($family){
    $s=str_replace(" ", "", $family);
    $s=str_replace(":", "", $s);
    $s=str_replace(";", "x", $s);
    return $s;
}
///<summary>get local file path from family</summary>
///<param name="family">family name</param>
/**
* get local file path from family
* @param family family name
*/
function igk_google_filefromfamily($family){
    $file=igk_getv(igk_conf_get(igk_google_settings(), "fonts"), $family);
    if(file_exists($file=igk_google_get_css_fontfile($family))){
        return $file;
    }
    return null;
}
///<summary>get google uri form</summary>
/**
* get google uri form
*/
function igk_google_font_api_uri($n=null, $size=null){
    $s="https://fonts.googleapis.com/css";
    if($n){
        $s .= "?family=".str_replace(" ", "+", $n);
        if($size){
            $s .= ":".str_replace(";", ",", $size);
        }
    }
    return $s;
}
///<summary>Represente igk_google_get_css_fontfile function</summary>
///<param name="family"></param>
/**
* Represente igk_google_get_css_fontfile function
* @param  $family
*/
function igk_google_get_css_fontfile($family){
    return igk_io_dir(igk_google_get_fontdir()."/".igk_google_condensedfamilyname($family).".css");
}
///<summary>Represente igk_google_get_drive_uri function</summary>
///<param name="folderid"></param>
///<param name="filename"></param>
/**
* Represente igk_google_get_drive_uri function
* @param  $folderid
* @param  $filename
*/
function igk_google_get_drive_uri($folderid, $filename){
    return "//googledrive.com/host/".$folderid."/".$filename;
}
///<summary>download google font to file</summary>
///<return>array of files</return>
/**
* download google font to file
*/
function igk_google_get_font($ft="Open Sans", $dir=null){
    $files=array();
    $ft=str_replace(" ", "+", $ft);
    $options="";
    $url=igk_google_font_api_uri($ft, $options);
    $g=igk_curl_post_uri($url);
    if(preg_match_all(GOOGLE_URI_REGEX, $g, $tab) > 0){
        $dir=$dir ?? igk_google_get_fontdir();
        $dir="{$dir}/{$ft}";
        igk_io_createdir($dir);
        foreach($tab["link"] as $v){
            if(isset($files[$v])){
                continue;
            }
            $files[$v]=igk_io_dir($dir."/".basename($v));
            $b=igk_curl_post_uri($v);
        }
    }
    return $files;
}
///<summary>Represente igk_google_get_fontdir function</summary>
/**
* Represente igk_google_get_fontdir function
*/
function igk_google_get_fontdir(){
    return igk_io_dir(igk_io_basedir()."/".IGK_RES_FOLDER."/fonts/google");
}
///<summary>Represente igk_google_installfont function</summary>
///<param name="family"></param>
///<param name="sizes"></param>
/**
* Represente igk_google_installfont function
* @param  $family
* @param  $sizes
*/
function igk_google_installfont($family, $sizes){
    $fdir=igk_google_get_fontdir();
    if(!igk_io_createdir($fdir)){
        return 0;
    }
    $uri=igk_google_font_api_uri($family, $sizes);
    $file=igk_google_filefromfamily($family);
    $name=str_replace(" ", "+", $family);
    $_installdir=$fdir.DIRECTORY_SEPARATOR.$name;
    $result=array();
    foreach(explode(';', $sizes) as $k){
        $huri=igk_google_font_api_uri($family, trim($k));
        $s=igk_curl_post_uri($huri);
        $info=igk_curl_info();
        if(($ts=$info["Status"]) == 200){
            if(preg_match_all(GOOGLE_URI_REGEX, $s, $tab) > 0){
                $lnk=$tab["link"];
                foreach($lnk as $bs){
                    $b=igk_curl_post_uri($bs);
                    $sr=str_replace(" ", "+", basename($bs));
                    igk_io_w2file($_installdir."/".$sr, $b);
                    $s=str_replace($bs, "./".$name."/".$sr, $s);
                }
                igk_google_regfont($uri, $family);
            }
            $result[]=$s;
        }
        else{
            igk_ilog("queryfailed: uri:".$huri." status:".$ts);
        }
    }
    if(igk_count($result) > 0){
        $cfam=igk_google_condensedfamilyname($family);
        $file=igk_google_get_css_fontfile($cfam);
        igk_io_w2file($file, $s);
        return 1;
    }
    return 0;
}
///<summary>Represente igk_google_jsmap_acceptrender_callback function</summary>
///<param name="n"></param>
/**
* Represente igk_google_jsmap_acceptrender_callback function
* @param  $n
*/
function igk_google_jsmap_acceptrender_callback($n){
    return 1;
}
///<summary>convert google uri's font to App font resource</summary>
/**
* convert google uri's font to App font resource
*/
function igk_google_local_uri_callback($uri, $e=null){
    $s=igk_io_baseuri()."/!@res//getgooglefont?uri=".base64_encode($uri);
    $file="";
    $tab=[];
    parse_str(igk_getv(parse_url($uri), "query"), $tab);
    $family=igk_getv($tab, "family");
    $file="";
    if($file=igk_google_filefromfamily($family)){
        return new IGKHtmlRelativeUriValueAttribute($file);
    }
    if($e !== null){
        $f=igk_google_get_css_fontfile($family);
        return new IGKHrefListValue($s, new GoogleCssUri($f, $uri));
    }
    igk_ilog("the output : ".$s);
    return $s;
}
///<summary>register file that will respond to uri</summary>
/**
* register file that will respond to uri
*/
function igk_google_regfont($uri, $family){
    $s=igk_google_settings();
    $fonts=igk_conf_get($s, "fonts");
	if (!$fonts || !is_object($fonts)){
		$fonts = new Stdclass();
		$s->fonts = $fonts;		
	}
    $fonts->{$family}= $uri;
    $s->{"fonts"}=$fonts;
    igk_google_store_setting();
}
///<summary>get google settings</summary>
/**
* get google settings
*/
function igk_google_settings(){
    return igk_get_env("google://settings", function(){
        $v_file= GOOGLE_SETTINGS_FILE;
        $s=null;
		
        if(file_exists($v_file)){
			$str = igk_io_read_allfile($v_file);
            $s = igk_json_parse($str) ?? igk_createobj();
			// igk_wln($str, $s);
           // $s = json_decode($str) ?? igk_createobj();
        }
        return $s ?? igk_createobj();
    });
}
///<summary>store balafon controller configuration</summary>
/**
* store balafon controller configuration
*/
function igk_google_store_setting($setting=null){
	
	$g = igk_google_settings(); 
	
    igk_io_w2file(GOOGLE_SETTINGS_FILE, json_encode($g ?? igk_google_settings(),  JSON_FORCE_OBJECT |  JSON_UNESCAPED_SLASHES ));
}
///<summary>Represente igk_google_zip_fontlist function</summary>
///<param name="links"></param>
///<param name="download" default="1"></param>
/**
* Represente igk_google_zip_fontlist function
* @param  $links
* @param  $download the default value is 1
*/
function igk_google_zip_fontlist($links, $download=1){
    $zip=null;
    $temp=tempnam(sys_get_temp_dir(), "fxip");
    foreach($links as $v){
        $b=igk_curl_post_uri($v);
        if($zip == null){
            $zip=igk_zip_content($temp, basename($v), $b, 0);
        }
        else{
            $zip->addFromString(basename($v), $b);
        }
    }
    $zip->close();
    if($download){
        igk_download_file("fonts.zip", $temp);
        unlink(temp);
        return null;
    }
    return $temp;
}
///<summary>Represente igk_google_zonectrl function</summary>
/**
* Represente igk_google_zonectrl function
*/
function igk_google_zonectrl(){
    $CF=igk_ctrl_zone_init(__FILE__);
    return $CF;
}
///<summary> init google zone </summary>
/**
*  init google zone 
*/
function igk_google_zoneinit($g){
    $f=IGK_LIB_DIR."/../api/google-api-client/vendor/autoload.php";
    require_once($f);
}
///<summary>Represente igk_html_demo_googlecirclewaiter function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_googlecirclewaiter function
* @param  $t
*/
function igk_html_demo_googlecirclewaiter($t){
    $t->addDiv()->Content=R::ngets("msg.pleasewait");
    $t->addgoogleCircleWaiter();
}
///'https://local.com/Lib/igk/Ext/ControllerModel/GoogleControllers/Scripts/igk.google.maps.js'
/**
*/
function igk_html_demo_googlejsmaps($t){
    $n=$t->addGoogleJSMaps("{zoom:15,center:{lat:50.850402, lng:4.357879}}");
    $n["style"]="height:300px;";
    $t->addCode()->Content=htmlentities(<<<EOF
\$t->addGoogleJSMaps("{zoom:15,center:{lat:50.850402, lng:4.357879}}");
EOF
    );
}
///<summary>Represente igk_html_demo_googlelinewaiter function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_googlelinewaiter function
* @param  $t
*/
function igk_html_demo_googlelinewaiter($t){
    $n=igk_createNode();
    $n->setClass("igk-google-line-waiter");
    $t->add($n);
    return $n;
}
///<summary>Represente igk_html_demo_googlemapgeo function</summary>
///<param name="t"></param>
/**
* Represente igk_html_demo_googlemapgeo function
* @param  $t
*/
function igk_html_demo_googlemapgeo($t){
    $t->addDiv()->addPanelBox()->addCode()->Content="\$t->addGoogleMapGeo(\"50.847311,4.355072\");";
    return $t->addGoogleMapGeo("50.847311,4.355072");
}
///<summary>Represente igk_html_node_googlecirclewaiter function</summary>
/**
* Represente igk_html_node_googlecirclewaiter function
*/
function igk_html_node_googlecirclewaiter(){
    $n=igk_createNode();
    $n->setClass("igk-google-circle-waiter");
    return $n;
}
///<summary>add google follows us button</summary>
///rel: author or publisher
///height: 15,20,24
/**
* add google follows us button
*/
function igk_html_node_googlefollowusbutton($id, $height=15, $rel="author", $annotation="none"){
    $n=igk_createXmlNode("g:follow");
    $n["class"]="g-follow";
    $n["href"]="https://plus.google.com/".$id;
    $n["rel"]=$rel;
    $n["annotation"]=$rel;
    $n["height"]=$height;
    $b=igk_html_node_OnRenderCallback(igk_create_expression_callback(<<<EOF
\$doc = igk_getv(\$extra[0], "Document");
if (\$doc){
	\$d = \$doc->addTempScript('https://apis.google.com/js/platform.js',1);
	\$d->activate("async");
	return 1;
}
return 0;
EOF
    , array("n"=>$n)));
    $n->add($b);
    return $n;
}
///<summary>add google maps javascript api node</summary>
/**
* add google maps javascript api node
*/
function igk_html_node_googlejsmaps($data=null, $apikey=null){
    $apikey=$apikey ?? igk_google_apikey() ?? GOOGLE_GEO_APPKEY;
    $n=igk_createNode("div");
    $n["class"]="igk-gmaps";
    $srv=igk_getv(igk_get_services("google"), "googlemap");
    $mapuri=$srv("apiuri", null, (object)["Google"=>(object)["ApiKey"=>$apikey ]]);
    $n->setCallback("AcceptRender", "igk_google_jsmap_acceptrender_callback");
    $mapjs=igk_io_baseUri('Lib/igk/Ext/ControllerModel/GoogleControllers/Scripts/igk.google.maps.js');
    $n->addScript()->Content=<<<EOF
(function(q){
var b = ['{$mapuri}'];
if (!igk._\$exists('igk.google.maps'))
	b.push('{$mapjs}');
igk.js.require(b).promise(function(h){ns_igk.google.maps.initMap(h);}, q);

})(igk.getParentScript());
EOF;
$n["igk:data"]=$data ?? "{zoom:7, center:{lat:50.41438075875331, lng:4.904006734252908}}";
    return $n;
}
///<summary>Represente igk_html_node_googlelinewaiter function</summary>
/**
* Represente igk_html_node_googlelinewaiter function
*/
function igk_html_node_googlelinewaiter(){
    $n=igk_createNode();
    $n->setClass("igk-google-line-waiter");
    return $n;
}
///<summary>Represente igk_html_node_googlemapgeo function</summary>
///<param name="loc"></param>
/**
* Represente igk_html_node_googlemapgeo function
* @param  $loc
*/
function igk_html_node_googlemapgeo($loc){
    $n=igk_createNode("div");
    $n["class"]="igk-winui-google-map";
    $q=$loc;
    $key=igk_google_apikey() ?? GOOGLE_GEO_APPKEY;
    $t="place";
    $lnk="https://www.google.com/maps/embed/v1/{$t}?key={$key}&q={$q}";
    $iframe=$n->addHtmlNode("iframe");
    $iframe["class"]="fitw";
    $iframe["frameborder"]="0";
    $iframe["src"]=$lnk;
    $iframe["onerror"]="event.target.innerHTML ='---failed to load map---';";
    return $n;
}
igk_sys_reg_autoloadLib(dirname(__FILE__)."/Lib/Classes", "IGK\Core\Ext\Google");
define("GOOGLE_URI_REGEX", "/url\s*\((?P<link>[^)]+)\)/");
define("GOOGLE_GEO_APPKEY", "AIzaSyAhIEla-i89QTvwdQTQSqwljvf6XsE4akk");
define("GOOGLE_SETTINGS_FILE", dirname(__FILE__)."/Data/configs.json");
define("IGK_GOOGLE_DEFAULT_PROFILE_PIC", "//lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s120");
igk_reg_component_package("google", new IGKGooglePackage());
igk_reg_hook("google_init_component", function(){
    if(!igk_get_env("init_globalfont")){
        igk_set_env("init_globalfont", 1);
        igk_css_reg_global_style_file(dirname(__FILE__)."/Styles/igk.google.pgcss");
    }
});
igk_sys_reg_uri("^/!@res/(/)?google/cssfont".IGK_REG_ACTION_METH."[%q%]", function($u, $f){
    @session_write_close();
    $fdir=igk_google_get_fontdir();
    $file=igk_io_dir($fdir.$f);
    if(file_exists($file)){
        header("Content-Type:text/plain");
        igk_header_content_file($f);
        igk_wl(igk_io_read_allfile($file));
        igk_exit();
    }
    $file=igk_io_dir($fdir.$u.".xft");
    if(file_exists($file)){
        $g=igk_zip_unzip_entry($file, $f);
        igk_header_content_file($f);
        igk_wl($g);
    }
    else{
        igk_set_header(400);
    }
    igk_exit();
}
, 1);
igk_sys_reg_uri("^/!@res/(/)?getgooglefont[%q%]", function($c){
    @session_write_close();
    header("Content-Type:text/css");
    $q=array();
    parse_str($c, $q);
    $uri=base64_decode($q["uri"]);
    $file="";
    $tab=[];
    parse_str(igk_getv(parse_url($uri), "query"), $tab);
    $family=igk_getv($tab, "family");
    $fdir=igk_google_get_fontdir();
    igk_io_createdir($fdir);
    if($family){
        if(($file=igk_google_filefromfamily($family))){
            if(file_exists($file)){
                $uri=igk_io_baseuri().igk_html_uri(igk_io_baserelativepath($file));
                igk_navto($uri);
                igk_exit();
            }
            $s=igk_io_read_allfile($file);
            $baseu=igk_io_baseuri()."/";
            $s=str_replace("%baseuri%", $baseu, $s);
            igk_wl($s);
            igk_exit();
        }
        else{
            if(igk_is_webapp() || !igk_sys_env_production()){
                $result=array();
                $tn=explode(':', $family);
                $name=igk_getv($tn, 0);
                $fname=str_replace(" ", "_", $name);
                $prop=igk_getv($tn, 1);
                $_installdir=$fdir.DIRECTORY_SEPARATOR.$fname;
                igk_io_createdir($_installdir);
                foreach(explode(';', $prop) as $k){
                    $huri=igk_google_font_api_uri($name, trim($k));
                    $s=igk_curl_post_uri($huri);
                    $info=igk_curl_info();
                    if(($ts=$info["Status"]) == 200){
                        if(preg_match_all(GOOGLE_URI_REGEX, $s, $tab) > 0){
                            $lnk=$tab["link"];
                            foreach($lnk as $bs){
                                $b=igk_curl_post_uri($bs);
                                $sr=str_replace(" ", "_", basename($bs));
                                igk_io_w2file($_installdir."/".$sr, $b);
                                $s=str_replace($bs, "'./".$fname."/".$sr."'", $s);
                            }
                            igk_google_regfont($uri, $family);
                        }
                        $result[]=$s;
                    }
                }
                if(igk_count($result) > 0){
                    $s=implode("\n", $result);
                    $cfam=igk_google_condensedfamilyname($family);
                    $file=igk_google_get_css_fontfile($cfam);
                    igk_io_w2file($file, $s);
                    $uri=igk_io_fullpath2fulluri($file);
                    igk_exit();
                }
                if(is_dir($_installdir)){
                    IGKIO::RmDir($_installdir);
                }
                header("Content-Type: text/css");
                igk_set_header(500);
                igk_wl("/* Can't install google's font `{$fname}` to server {$_installdir}*/");
                igk_exit();
            }
            else{
                header("Content-Type: text/css");
                igk_set_header(500, "text/css");
                igk_wl("/* googlefont not on webapp context */");
            }
        }
        igk_exit();
    }
    $s=igk_curl_post_uri($uri);
    $info=igk_curl_info();
    if(($ts=$info["Status"]) != 200){
        igk_exit();
    }
    if($s){
        if(preg_match_all(GOOGLE_URI_REGEX, $s, $tab) > 0){
            $dir=igk_google_get_fontdir();
            igk_io_createdir($dir);
        }
        ob_clean();
        header("Content-Type: text/css");
        igk_zip_output($s);
    }
    else{
        igk_ilog("failed to load, ".__FILE__.":".__LINE__);
    }
    igk_exit();
}
, 1);
/// TODO : Google plus is die

igk_register_service("google", "googlemap", function($cmd, $t, $config=null){
    switch($cmd){
        case "apiuri":
        $c=igk_conf_get($config, "Google/ApiKey");
        return "https://maps.googleapis.com/maps/api/js?key=".$c;
        break;
        case "apikey":
        break;
    }
});
igk_sys_reg_componentname(["googlemapgeo"=>"GoogleMapGeo",
        "googlejsmaps"=>"GoogleJSMaps"
    ]);
igk_sys_reg_referencedir(__FILE__, igk_io_dir(dirname(__FILE__)."/Data/References"));