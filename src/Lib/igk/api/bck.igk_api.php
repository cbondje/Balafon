<?php
// @file: bck.igk_api.php
// @author: C.A.D. BONDJE DOUE
// @description:
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

define("IGK_API_CTRL", "API");
define("IGK_API_VERSION", "1.0.0.0");
define("IGK_API_URI", "^/api/v2");
///<summary>Represente class: IGKApiFunctionCtrl</summary>
/**
* Represente IGKApiFunctionCtrl class
*/
final class IGKApiFunctionCtrl extends IGKApplicationController {
    public $message=array();
    ///<summary>Represente beginRequest function</summary>
    /**
    * Represente beginRequest function
    */
    public function beginRequest(){
        $u=igk_getr("u");
        $pwd=igk_getr("pwd");
        if(!$this->ConfigCtrl->IsConnected){
            $this->ConfigCtrl->connect($u, $pwd, false);
        }
        $node=IGKHtmlItem::CreateWebNode("APIResponse");
        if($this->ConfigCtrl->IsConnected){
            $node->add("status")->Content="OK";
            $this->setParam("api:u", $u);
            $this->setParam("api:pwd", $pwd);
            $node->add("SessionId")->Content=session_id();
            igk_show_prev(getallheaders());
        }
        else{
            $node->add("status")->Content="NOK";
            $node->add("message")->Content=$this->message[0];
        }
        $node->renderAJX();
        igk_exit();
    }
    ///<summary>Represente datadb function</summary>
    ///<param name="cmd" default="null"></param>
    /**
    * Represente datadb function
    * @param mixed $cmd the default value is null
    */
    public function datadb($cmd=null){
        $args=array_slice(func_get_args(), 1);
        $_data=null;
        $_api=$this;
        $_data=array(
            "syncto"=>function($cmd, $args) use ($_api){
                    $rep=igk_createNode("response");
                    $error=false;
                    $ctrl=igk_getctrl(igk_getv($args, 1));
                    $u=igk_get_user_bylogin(igk_getv($args, 2));
                    $srv=($srv=igk_getv($args, 0)) ? $srv: igk_getr("clServer");
                    if(!$ctrl || !$u || empty($srv)){
                        $error=true;
                        $rep->addNode("Status")->Content=-1;
                        $rep->addNode("message")->Content="Ctrl, Server or User is not found";
                    }
                    else{
                        IGKOb::Start();
                        $this->datadb("syncdata", $ctrl->Name, $u->clLogin);
                        $c=IGKOB::Content();
                        IGKOb::Clear();
                        igk_wl($c);
                        igk_exit();
                        // $g=igk_post_uri($srv."/api/v2/datadb/loadsyncdata", array("data"=>$c, "login"=>$u->clLogin, "ctrl"=>$ctrl->Name));
                        // igk_wln($g);
                    }
                    if(!$error){
                        $rep->addNode("Status")->Content=0;
                    }
                    igk_wln("DEBUGGER VIEW ::>>>>");
                    igk_debuggerview()->RenderAJX();
                    $rep->RenderAJX();
                    return !$error;
                },
            "syncdata"=>function($cmd, $args) use ($_api){
                    $sync=igk_createNode("igk-sync");
                    $ctrl=igk_getctrl(igk_getv($args, 0));
                    $uid=igk_get_user_bylogin(igk_getv($args, 1));
                    if($ctrl && $uid){
                        $_api->setParam("syncdata:info", array());
                        $u=$uid;
                        $tb=igk_db_get_ctrl_tables($ctrl);
                        $apt=igk_get_data_adapter($ctrl->getDataAdapterName());
                        $sync["Controller"]=$ctrl->Name;
                        $sync["namespace"]="igk://".$ctrl->Configs->Namespace;
                        if($apt->connect()){
                            $tables=(object)array("list"=>array());
                            $entries=$sync->addNode("Entries");
                            foreach($tb as  $v_tablen){
                                if(!isset($tables->list[$v_tablen])){
                                    $rep=$sync->addNode("DataDefinition")->setAttributes(array("TableName"=>$v_tablen));
                                    $_api->datadb("get_sync_definition", $rep, $v_tablen, $u, $apt, $ctrl->Db, $entries);
                                }
                            }
                            $_api->setParam("syncdata:info", null);
                            $apt->close();
                        }
                    }
                    else{
                        igk_wln("/!\\ Args don't match or user not found");
                        igk_exit();
                    }
                    $sync->RenderXML();
                    return;
                },
            
            "loadsyncdata"=>function($cmd, $args) use ($_api){
                    igk_debuggerview()->ClearChilds();
                    $rep=igk_createNode("reponse");
                    $c=igk_getr("data");
                    $login=igk_getr("login");
                    $u=igk_get_user_bylogin($login);
                    $ctrl=igk_getctrl(igk_getr("ctrl"));
                    if(!$u || !$ctrl){
                        $rep->addNode("Status")->Content=-1;
                        $rep->addNode("Error")->Content="user not found or ctrl with that name or namespace not found";
                        $rep->RenderXML();
                        return;
                    }
					//$error=false;
                    $c=preg_replace_callback("#\+@id:/{$u->clLogin}#", function($m) use ($u){
                        return $u->clId;
                    }
                    , $c);
                    $c=preg_replace_callback("#igk-sync#", function($m) use ($u){
                        return IGK_SCHEMA_TAGNAME;
                    }
                    , $c);
                    $n=IGKHtmlReader::LoadXML($c);
                    $p=igk_db_load_data_and_entries_schemas_node($n);
                    igk_wln_e($p->Entries);

                    // $refs=array();
                    // foreach($p->Entries as $k=>$v){
                    //     if(isset($p->Relations[$k])){
                    //         $tb=$p->Relations[$k];
                    //         foreach($v as $rr=>$row){
                    //             foreach($tb as $km=>$sm){
                    //                 $key=strtolower($sm["Table"]."/".$row[$km]);
                    //                 $i=igk_getv($refs, $key);
                    //                 if($i == null){
                    //                     $i=$ctrl->Db->getSyncDataID($sm["Table"], $row[$km], $v);
                    //                     if(empty($i)){
                    //                         igk_log_write_i(__FUNCTION__, " data not found for ".$sm["Table"]. ":::".$row[$km]);
                    //                     }
                    //                     $refs[$key]=$i;
                    //                 }
                    //                 $row[$km]=$i;
                    //             }
                    //             $v[$rr]=$row;
                    //         }
                    //         $p->Entries[$k]=$v;
                    //     }
                    //     foreach($v as $rr=>$row){
                    //         $ctrl->Db->insertIfNotExists($k, $row);
                    //     }
                    // }
                    // if(!$error){
                    //     $rep->addNode("Status")->Content=0;
                    // }
                    // igk_wln("debugger view ::: loadsyncdata");
                    // igk_debuggerview()->RenderAJX();
                    // $rep->RenderAJX();
                },
            "help"=>function() use (& $_data){
                    $doc=igk_get_document(__FUNCTION__);
                    $doc->Title="Api - MYSQL ";
                    $bbox=$doc->body->addBodyBox()->ClearChilds();
                    $b=$bbox->addDiv();
                    $b->addSectionTitle()->Content="Command list";
                    $b=$bbox->addDiv()->addContainer()->addRow();
                    foreach(array_keys($_data) as $k){
                        $b->addCol()->addDiv()->addA("#")->Content=$k;
                    }
                    $doc->RenderAJX();
                    igk_exit();
                }
        );
        if(isset($_data[$cmd])){
            $f=$_data[$cmd];
            return call_user_func_array($f, array($cmd, $args));
        }
        else{
            $file=IGKIO::GetDir(dirname(__FILE__)."/.mysql.inc");
            if(file_exists($file)){
                include_once($file);
            }
            $f="igk_api_mysql_".str_replace("-", "_", $cmd);
            if(!function_exists($f)){
                igk_log_write_i(__FUNCTION__."::", "function {$f} not exists");
                igk_wln("function not exists ".$file. " ".$f);

            }
            else{
                $tab=array();
                $tab[]=$this;
                $tab=array_merge($tab, $args);
                return call_user_func_array($f, $tab);
            }
        }
        return igk_exit();

    }
    ///<summary>Represente endRequest function</summary>
    /**
    * Represente endRequest function
    */
    public function endRequest(){
        $node=IGKHtmlItem::CreateWebNode("APIResponse");
        if($this->ConfigCtrl->IsConnected){
            $this->ConfigCtrl->logout(false, true);
            $node->Content="OK";
        }
        $node->renderAJX();
        igk_exit();
    }
    ///<summary>Represente getIsSystemController function</summary>
    /**
    * Represente getIsSystemController function
    */
    public function getIsSystemController(){
        return true;
    }
    ///<summary>Represente getIsVisible function</summary>
    /**
    * Represente getIsVisible function
    */
    public function getIsVisible(){
        return false;
    }
    ///<summary>Represente getName function</summary>
    /**
    * Represente getName function
    */
    public function getName(){
        return IGK_API_CTRL;
    }
    ///<summary>Represente getRegUriAction function</summary>
    /**
    * Represente getRegUriAction function
    */
    public function getRegUriAction(){
        return IGK_API_URI.IGK_REG_ACTION_METH;
    }
    ///<summary>Represente getVersion function</summary>
    /**
    * Represente getVersion function
    */
    public function getVersion(){
        return IGK_API_VERSION;
    }
    ///<summary>Represente IsFunctionExposed function</summary>
    ///<param name="function"></param>
    /**
    * Represente IsFunctionExposed function
    * @param mixed $function
    */
    public function IsFunctionExposed($function){
        return true;
    }
    ///<summary>Represente request function</summary>
    /**
    * Represente request function
    */
    public function request(){
        $u=igk_getr("u");
        $pwd=igk_getr("pwd");
        $node = igk_createnode("response");
        $this->ConfigCtrl->logout(false, true);
        if(!$this->ConfigCtrl->IsConnected){
            $this->ConfigCtrl->connect($u, $pwd, false);
        }
        if($this->ConfigCtrl->IsConnected){
            session_start();
            $q=base64_decode(igk_getr("q"));
            igk_resetr();
            igk_loadr($q);
            $node->add("ExecutionResponse")->Content=$this->App->ControllerManager->InvokeFunctionUri($q);
            $this->ConfigCtrl->logout(false, true);
        }

        igk_exit();
    }
    ///<summary>Represente sendRequest function</summary>
    /**
    * Represente sendRequest function
    */
    public function sendRequest(){
        $node=IGKHtmlItem::CreateWebNode("APIResponse");
        $q=base64_decode(igk_getr("q"));
        $node->add("Connected")->Content=igk_parsebool($this->ConfigCtrl->IsConnected);
        $node->add("Request")->Content=$q;
        if($q){
            igk_resetr();
            igk_loadr($q);
            $node->add("ExecutionResponse")->Content=$this->App->ControllerManager->InvokeFunctionUri($q);
        }
        $node->renderAJX();
        igk_exit();
    }
    ///<summary>Represente setup function</summary>
    ///<param name="cmd" default="null"></param>
    /**
    * Represente setup function
    * @param mixed $cmd the default value is null
    */
    public function setup($cmd=null){
        igk_wln(__FUNCTION__." command");
    }
}
?>