<?php
//
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// desc: mysql data adapter
// file: igk_mysql_db.php
 

if(!extension_loaded("mysql") && (!extension_loaded("mysqli"))){
    error_log("[BLF] - no extension mysql or mysqli installed. class will not be installed in that case.". extension_loaded("mysqli"));
    return;
}
if(!function_exists("mysqli_connect")){
    error_log("function not exists mysqli_connect");
    igk_exit();
}

///<summary>Represente igk_db_connect function</summary>
///<param name="srv"></param>
///<param name="dbu"></param>
///<param name="pwd"></param>
/**
* Represente igk_db_connect function
* @param mixed $srv
* @param mixed $dbu
* @param mixed $pwd
*/
function igk_db_connect($srv, $dbu, $pwd, $options=null){
    if(empty($srv))
        return false;
    $g=IGKDBQueryDriver::GetFunc("connect") ?? igk_die("not connect found for !!!! ".IGKDBQueryDriver::$Config["system"]);
    if(IGKDBQueryDriver::Is("MySQLI")){
        $b = @$g($srv, $dbu, $pwd);
        if (is_resource($b)){
            if ( $options && isset($options["charset"])){
                mysqli_set_charset($b, $options["charset"]);
            }else {
                mysqli_set_charset($b, "utf8");
            }
        }
		return $b;
    }
    return @$g($srv, $dbu, $pwd);
}
///<summary>Represente igk_db_escape_string function</summary>
///<param name="v"></param>
///<param name="r" default="null"></param>
/**
* Represente igk_db_escape_string function
* @param mixed $v
* @param mixed $r the default value is null
*/
function igk_db_escape_string($v, $r=null){
    $g=IGKDBQueryDriver::GetFunc("escapestring");
    if(IGKDBQueryDriver::Is("MySQLI")){
        $b=IGKDBQueryDriver::GetResId();
        if($b){
			if (is_array($v)){
                if (!igk_environment()->is("production")){
                    igk_wln("Passing Array not allowed", $v);
                }
				igk_die("escape failed");
			}
            return $g($b, $v);
		}
        $msg="Error: ".__FUNCTION__." - ResId :{$b} - for :".$v. " func is MySQLi ". $g;
        igk_ilog($msg);
        igk_die($msg);
        return $v;
    }
    if(!empty($g))
        return $g($v);
    return null;
}
///<summary>Represente igk_db_fetch_field function</summary>
///<param name="r"></param>
/**
* Represente igk_db_fetch_field function
* @param mixed $r
*/
function igk_db_fetch_field($r){
    $g=IGKDBQueryDriver::GetFunc("fetch_field");
    return $g($r);
}
///<summary>Represente igk_db_fetch_row function</summary>
///<param name="r"></param>
/**
* Represente igk_db_fetch_row function
* @param mixed $r
*/
function igk_db_fetch_row($r){
    $g=IGKDBQueryDriver::GetFunc("fetch_row");
    return $g($r);
}
///<summary>Represente igk_db_is_resource function</summary>
///<param name="r"></param>
/**
* Represente igk_db_is_resource function
* @param mixed $r
*/
function igk_db_is_resource($r){
    if(IGKDBQueryDriver::Is("MySQLI")){
        return is_object($r);
    }
    return is_resource($r);
}
///<summary>Represente igk_db_num_fields function</summary>
///<param name="r"></param>
/**
* Represente igk_db_num_fields function
* @param mixed $r
*/
function igk_db_num_fields($r){
    $g=IGKDBQueryDriver::GetFunc("num_fields");
    return $g($r);
}
///<summary>Represente igk_db_num_rows function</summary>
///<param name="r"></param>
/**
* Represente igk_db_num_rows function
* @param mixed $r
*/
function igk_db_num_rows($r){
    $g=IGKDBQueryDriver::GetFunc("num_rows");
    return $g($r);
}
///<summary>Represente igk_db_query function</summary>
///<param name="query"></param>
/**
* Represente igk_db_query function
* @param mixed $query
*/
function igk_db_query($query, $res=null){
    $g=IGKDBQueryDriver::GetFunc("query");
    if(IGKDBQueryDriver::Is("MySQLI")){
        $d=IGKDBQueryDriver::GetResId();
        if($d)
            return $g($d, $query);
        else{
            igk_debug_wln("res id is null to send query ".$query);
        }
        return null;
    }
    return $g($query);
}
function igk_db_multi_query($query, $res=null){
	$g=IGKDBQueryDriver::GetFunc("multi_query");
    if(IGKDBQueryDriver::Is("MySQLI")){
        $d= $res ? $res : IGKDBQueryDriver::GetResId();
        if($d){
            return $g($d, $query);
		}
        else{
            igk_debug_wln("res id is null to send query ".$query);
        }
        return null;
    }
    return $g($query);
}
///<summary>retreive the current server date </summary>
/**
* retreive the current server date
*/
function igk_mysql_datetime_now(){
    return date(IGK_MYSQL_DATETIME_FORMAT);
}
///<summary>Represente igk_mysql_db_close function</summary>
///<param name="r"></param>
/**
* Represente igk_mysql_db_close function
* @param mixed $r
*/
function igk_mysql_db_close($r){
    $g=IGKDBQueryDriver::GetFunc("close");
    return @$g($r);
}
///<summary>Represente igk_mysql_db_error function</summary>
///<param name="r" default="null"></param>
/**
* Represente igk_mysql_db_error function
* @param mixed $r the default value is null
*/
function igk_mysql_db_error($r=null){
    $g=IGKDBQueryDriver::GetFunc("error");
    if(IGKDBQueryDriver::Is("MySQLI")){
        $d=IGKDBQueryDriver::GetResId();
        if($d)
            return $g($d);
        return "";
    }
    return $g($r);
}
///<summary>Represente igk_mysql_db_errorc function</summary>
/**
* Represente igk_mysql_db_errorc function
*/
function igk_mysql_db_errorc(){
    $g=IGKDBQueryDriver::GetFunc("errorc");
    $r =$d=IGKDBQueryDriver::GetResId();
    if(IGKDBQueryDriver::Is("MySQLI")){
        if($d)
            return $g($d);
        return "";
    }
    return $g($r);
}
///<summary>Represente igk_mysql_db_gettypename function</summary>
///<param name="t"></param>
/**
* Represente igk_mysql_db_gettypename function
* @param mixed $t
*/
function igk_mysql_db_gettypename($t){
    $m_mysqli_data=array(
            1=>'boolean',
            2=>'smallint',
            3=>'int',
            4=>'float',
            5=>'double',
            10=>'date',
            11=>'time',
            12=>'datetime',
            252=>'text',
            253=>'varchar',
            254=>'binary'
        );
    if(is_numeric($t)){
        return igk_getv($m_mysqli_data, $t);
    }
    return $t;
}
///<summary>Represente igk_mysql_db_has_error function</summary>
/**
* Represente igk_mysql_db_has_error function
*/
function igk_mysql_db_has_error(){
    return igk_mysql_db_errorc() != 0;
}
///<summary>Represente igk_mysql_db_is_primary_key function</summary>
///<param name="flags"></param>
/**
* Represente igk_mysql_db_is_primary_key function
* @param mixed $flags
*/
function igk_mysql_db_is_primary_key($flags){
    return ($flags& 2) == 2;
}
///<summary>Represente igk_mysql_db_last_id function</summary>
///<param name="r" default="null"></param>
/**
* Represente igk_mysql_db_last_id function
* @param mixed $r the default value is null
*/
function igk_mysql_db_last_id($r=null){
    $g=IGKDBQueryDriver::GetFunc("lastid");
    if(IGKDBQueryDriver::Is("MySQLI")){
        $d=IGKDBQueryDriver::GetResId();
        if($d){
            return $g($d);
        }
        else{
            return -1;
        }
    }
    return $g($r);
}
///<summary>Represente igk_mysql_db_selected_db function</summary>
///<param name="mysql"></param>
/**
* Represente igk_mysql_db_selected_db function
* @param mixed $mysql
*/
function igk_mysql_db_selected_db($mysql){
    $r=$mysql->sendQuery("SELECT DATABASE();")->getRowAtIndex(0);
    $c="DATABASE()";
    return $r->$c;
}
///<summary>Represente igk_mysql_db_tbname function</summary>
///<param name="tbname"></param>
/**
* Represente igk_mysql_db_tbname function
* @param mixed $tbname
*/
function igk_mysql_db_tbname($tbname){
    return igk_db_escape_string(igk_db_get_table_name($tbname));
}
///<summary>Represente igk_mysql_result_table function</summary>
///<param name="resource"></param>
/**
* Represente igk_mysql_result_table function
* @param mixed $resource
*/
function igk_mysql_result_table($resource){
    $tab=igk_createNode("table");
    $tab["class"]="igk-table mysql-r";
    $tr=$tab->Add("tr");
    $c=igk_db_num_fields($resource);
    for($i=0; $i < igk_db_num_fields($resource); $i++){
        $tr->Add("th")->Content= mysqli_field_seek($resource, $i);
    }
    foreach(mysqli_fetch_assoc($resource) as $k){
        $tr=$tab->Add("tr");
        if(is_array($k)){
            foreach($k as $v){
                $tr->Add("td")->Content=$v;
            }
        }
        else{
            $tr->Add("td")->Content=$k;
        }
    }
    return $tab;
}
///<summary>Represente igk_mysql_time_span function</summary>
///<param name="date"></param>
/**
* Represente igk_mysql_time_span function
* @param mixed $date
*/
function igk_mysql_time_span($date){
    return igk_time_span(IGK_MYSQL_DATETIME_FORMAT, $date);
}
///<summary>Represente class: IGKMySQLDataAdapterBase</summary>
/**
* Represente IGKMySQLDataAdapterBase class
*/
abstract class IGKMySQLDataAdapterBase extends IGKSQLDataAdapter{
    private $m_controller;
    private $m_dbname;
    private $m_error;
    private $m_errormsg;
    private $m_time;
    private static $sm_emptyResult;
    protected $m_dbManager;
    ///<summary>Represente __construct function</summary>
    ///<param name="ctrl" default="null"></param>
    /**
    * Represente __construct function
    * @param mixed $ctrl the default value is null
    */
    public function __construct($ctrl=null){
        $this->m_controller=$ctrl;
        $this->m_dbManager=$this->__createManager();
        if($this->m_dbManager == null){
            if(defined('IGK_DEBUG')){
                throw new Exception("/!\\ Manager not created.");
            }
            else{
                igk_ilog(__METHOD__."::".__LINE__, "/!\\ Failed to create database manager.");
            }
            igk_die("failed to create MySQL database manager. msqli or mysql not present. please install it");
        }
        else{
            $this->m_dbManager->setCloseCallback(array($this, 'closeCallback'));
            $this->m_dbManager->setOpenCallback(array($this, 'openCallback'));
        }
    }

    ///<summary>Represente __createManager function</summary>
    /**
    * Represente __createManager function
    */
    protected function __createManager(){}
    ///<summary>Represente beginTransaction function</summary>
    /**
    * Represente beginTransaction function
    */
    public function beginTransaction(){
        $this->sendQuery("START TRANSACTION");
    }
    ///<summary>Represente close function</summary>
    ///<param name="leaveOpen" default="false"></param>
    /**
    * Represente close function
    * @param mixed $leaveOpen the default value is false
    */
    public function close($leaveOpen=false){
        if($this->m_dbManager != null){
            $this->m_dbManager->close($leaveOpen);
            if($this->m_dbManager->OpenCount()<=0){
                $this->m_dbname=null;
            }
        }
    }
    ///<summary>Represente closeAll function</summary>
    /**
    * Represente closeAll function
    */
    public function closeAll(){
        if($this->m_dbManager){
            $this->m_dbManager->closeAll();
        }
        $this->m_dbname=null;
    }
    ///<summary>Represente closeCallback function</summary>
    /**
    * Represente closeCallback function
    */
    public function closeCallback(){
        $this->m_dbname=null;
    }
    ///<summary>Represente commit function</summary>
    /**
    * Represente commit function
    */
    public function commit(){
        $this->sendQuery("COMMIT");
    }
    ///<summary>Represente configure function</summary>
    ///<param name="array"></param>
    /**
    * Represente configure function
    * @param mixed $array
    */
    public function configure($array){
        $this->m_dbManager->configure($array);
    }
    ///<summary>Represente connect function</summary>
    ///<param name="dbnamemix" default="null"></param>
    ///<param name="selectdb" default="true"></param>
    /**
    * Represente connect function
    * @param mixed $dbnamemix the default value is null
    * @param mixed $selectdb the default value is true
    */
    public function connect($dbnamemix=null, $selectdb=true){
        $this->makeCurrent();
        
        if(($this->m_dbManager == null) || (!$this->m_dbManager->connect())){
            igk_ilog_assert(!igk_sys_env_production(), $this->m_dbManager ? "can't connect with DBManager: ".get_class($this->m_dbManager): "dbManager is null");
            return false;
        }
        $dbs=igk_get_env("sys://Db/NODBSELECT");
        $dbname = $this->m_dbname;

        if(is_string($dbnamemix))
            $dbname=$dbnamemix;

        if(!$dbs && $selectdb){
            $dbname=$dbname == null ? $this->app->Configs->db_name: $dbname;
            if(!$this->selectdb($dbname)){
                $this->close();
                return false;
            }
            $this->m_dbname=$dbname;
        }
        return true;
    }
    ///<summary>Represente connectTo function</summary>
    ///<param name="dbserver"></param>
    ///<param name="dbname"></param>
    ///<param name="dbuser"></param>
    ///<param name="dbpwd"></param>
    /**
    * Represente connectTo function
    * @param mixed $dbserver
    * @param mixed $dbname
    * @param mixed $dbuser
    * @param mixed $dbpwd
    */
    public function connectTo($dbserver, $dbname, $dbuser, $dbpwd){
        return $this->m_dbManager->connectTo($dbserver, $dbname, $dbuser, $dbpwd);
    }
    ///<summary>Represente countAndWhere function</summary>
    ///<param name="tbname"></param>
    ///<param name="whereTab" default="null"></param>
    /**
    * Represente countAndWhere function
    * @param mixed $tbname
    * @param mixed $whereTab the default value is null
    */
    public function countAndWhere($tbname, $whereTab=null){
        $o="";
        $s=0;
        $q="SELECT Count(*) FROM `".igk_mysql_db_tbname($tbname)."`";
        if(is_array($whereTab) && igk_count($whereTab) > 0){
            $q .= " WHERE ".IGKSQLQueryUtils::GetCondString($whereTab);
        }
        else{
            if(is_string($whereTab)){
                $q .= " WHERE ".igk_db_escape_string($whereTab);
            }
        }
        $q .= ";";
        try {
            $g=$this->sendQuery($q, false);
            return $g;
        }
        catch(Exception $ex){
            igk_ilog("Exception: ".$ex->getMessage());
        }
        return 0;
    }
    ///<summary>Represente CreateEmptyResult function</summary>
    ///<param name="result" default="false"></param>
    /**
    * Represente CreateEmptyResult function
    * @param mixed $result the default value is false
    */
    public function CreateEmptyResult($result=false){
        return IGKMySQLQueryResult::CreateResult($result);
    }
    ///<summary>Represente delete function</summary>
    ///<param name="tablename"></param>
    ///<param name="entry"></param>
    /**
    * Represente delete function
    * @param mixed $tablename
    * @param mixed $entry
    * @return mixed
    */
    public function delete($tablename, $entry){
        $r = null;
        if($this->m_dbManager != null){
            $r = $this->m_dbManager->delete($tablename, $entry);
        }
        return $r;
    }
    ///<summary>Represente deleteAll function</summary>
    ///<param name="tablename"></param>
    /**
    * Represente deleteAll function
    * @param mixed $tablename
    * @return mixed
    */
    public function deleteAll($tablename, $condition=null){
        $r = null;
        if($this->m_dbManager != null)
            $r= $this->m_dbManager->deleteAll($tablename, $condition);
        return $r;
    }
    ///<summary>Represente dropAllRelations function</summary>
    /**
    * Represente dropAllRelations function
    */
    public function dropAllRelations(){
        return IGKMySQLDataCtrl::DropAllRelations($this, $this->m_dbname);
    }
    ///<summary>Represente dropTable function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente dropTable function
    * @param mixed $tbname
    */
    public function dropTable($tbname){
        if($this->m_dbManager != null)
            return IGKMySQLDataCtrl::DropTable($this, $tbname, $this->DbName);
        return null;
    }
    ///<summary>Represente flushForInitDb function</summary>
    /**
    * Represente flushForInitDb function
    */
    public function flushForInitDb($complete=null){
        if($this->m_dbManager)
            $this->m_dbManager->flushForInitDb($complete);
    }
    ///<summary>Represente getAllRelations function</summary>
    /**
    * Represente getAllRelations function
    */
    public function getAllRelations(){
        return IGKMySQLDataCtrl::GetAllRelations($this, $this->m_dbname);
    }
    ///<summary>Represente getConstraint_Index function</summary>
    ///<param name="s"></param>
    /**
    * Represente getConstraint_Index function
    * @param mixed $s
    */
    public function getConstraint_Index($s){
        if($this->m_dbManager != null)
            return IGKMySQLDataCtrl::GetConstraint_Index($this, $s, $this->DbName);
        return null;
    }
    ///<summary>Represente getDbName function</summary>
    /**
    * Represente getDbName function
    */
    public function getDbName(){
        return $this->m_dbname;
    }
    ///<summary>Represente getError function</summary>
    /**
    * Represente getError function
    */
    public function getError(){
        return $this->m_error;
    }
    ///<summary>Represente getFormat function</summary>
    ///<param name="type"></param>
    /**
    * Represente getFormat function
    * @param mixed $type
    */
    public function getFormat($type){
        switch(strtolower($type)){
            case 'time':
            return IGK_MYSQL_TIME_FORMAT;
            case 'datetime':
            return IGK_MYSQL_DATETIME_FORMAT;
            case 'date':
            return IGK_MYSQL_DATE_FORMAT;
        }
        return "";
    }
    ///<summary>Represente getIsAvailable function</summary>
    /**
    * Represente getIsAvailable function
    */
    public function getIsAvailable(){
        return ($this->m_dbManager != null);
    }
    ///<summary>Represente getIsConnect function</summary>
    /**
    * Represente getIsConnect function
    */
    public function getIsConnect(){
        return $this->m_dbManager->getIsConnect();
    }
    ///<summary>Represente getLastQuery function</summary>
    /**
    * Represente getLastQuery function
    */
    public function getLastQuery(){
        return $this->m_dbManager->getLastQuery();
    }
    ///<summary>Represente getResId function</summary>
    /**
    * Represente getResId function
    */
    public function getResId(){
        return IGKDBQueryDriver::GetResId();
    }
    ///<summary>Represente getStored function</summary>
    /**
    * Represente getStored function
    */
    public function getStored(){
        return $this->m_dbManager ? $this->m_dbManager->getStored(): null;
    }
    ///<summary>Represente getStoredRequired function</summary>
    /**
    * Represente getStoredRequired function
    */
    public function getStoredRequired(){
        return $this->m_dbManager ? $this->m_dbManager->getStoredRequired(): null;
    }
    ///<summary>Represente getTabInitInfo function</summary>
    /**
    * Represente getTabInitInfo function
    */
    public function getTabInitInfo(){
        return $this->m_dbManager->getTabInitInfo();
    }
    ///<summary>Represente getTime function</summary>
    /**
    * Represente getTime function
    */
    public function getTime(){
        $this->m_time=new IGKMySQLTimeManager($this);
        return $this->m_time;
    }
    ///<summary>Represente getUpateQuery function</summary>
    ///<param name="tablename"></param>
    ///<param name="entry"></param>
    ///<param name="where" default="null"></param>
    /**
    * Represente getUpateQuery function
    * @param mixed $tablename
    * @param mixed $entry
    * @param mixed $where the default value is null
    */
    public function getUpateQuery($tablename, $entry, $where=null){
        return IGKSQLQueryUtils::GetUdpateQuery($tablename, $entry, $where);
    }
    ///<summary>Represente GetUpdateQuery function</summary>
    ///<param name="tbname"></param>
    ///<param name="values"></param>
    ///<param name="condition" default="null"></param>
    ///<param name="tableInfo" default="null"></param>
    /**
    * Represente GetUpdateQuery function
    * @param mixed $tbname
    * @param mixed $values
    * @param mixed $condition the default value is null
    * @param mixed $tableInfo the default value is null
    */
    public function GetUpdateQuery($tbname, $values, $condition=null, $tableInfo=null){
        return IGKSQLQueryUtils::GetUpdateQuery($tbname, $values, $condition, $tableInfo);
    }
    ///<summary>Represente initForInitDb function</summary>
    /**
    * Represente initForInitDb function
    */
    public function initForInitDb(){
        if($this->m_dbManager)
            $this->m_dbManager->initForInitDb();
    }
    ///<summary>Represente initSystablePushInitItem function</summary>
    ///<param name="tablename"></param>
    ///<param name="callback"></param>
    /**
    * Represente initSystablePushInitItem function
    * @param mixed $tablename
    * @param mixed $callback
    */
    public function initSystablePushInitItem($tablename, $callback){
        return $this->m_dbManager && $this->m_dbManager->initSystablePushInitItem($tablename, $callback);
    }
    ///<summary>Represente initSystableRequired function</summary>
    ///<param name="tablename"></param>
    /**
    * Represente initSystableRequired function
    * @param mixed $tablename
    */
    public function initSystableRequired($tablename){
        return $this->m_dbManager && $this->m_dbManager->initSystableRequired($tablename);
    }
    ///<summary>Represente IsStoredTable function</summary>
    ///<param name="tbN"></param>
    /**
    * Represente IsStoredTable function
    * @param mixed $tbN
    */
    public function IsStoredTable($tbN){
        $g=$this->getStored();
        return isset($g[$tbN]);
    }
    ///<summary>Represente last_id function</summary>
    /**
    * Represente last_id function
    */
    public function last_id(){
        return $this->m_dbManager->lastId();
    }
    ///<summary>Represente listTables function</summary>
    /**
    * Represente listTables function
    */
    public function listTables(){
        return $this->sendQuery("SHOW TABLES;");
    }
    ///<summary>Represente openCallback function</summary>
    /**
    * Represente openCallback function
    */
    public function openCallback(){
        igk_log_write_i(__CLASS__, "open connection");
    }
    ///<summary>Represente OpenCount function</summary>
    /**
    * Represente OpenCount function
    */
    public function OpenCount(){
        if($this->m_dbManager)
            return $this->m_dbManager->OpenCount();
        return 0;
    }
    ///<summary>Represente Reset function</summary>
    /**
    * Represente Reset function
    */
    public function Reset(){
        if($this->m_dbManager != null)
            $this->m_dbManager->closeAll();
        $this->m_dbManager=$this->__createManager() ?? igk_die("failed to recreate db connection");
    }
    ///<summary>Represente rollback function</summary>
    /**
    * Represente rollback function
    */
    public function rollback(){
        $this->sendQuery("ROLLBACK");
    }
    ///<summary>Represente selectdb function</summary>
    ///<param name="dbname"></param>
    /**
    * Represente selectdb function
    * @param mixed $dbname
    */
    public function selectdb($dbname){
        if(($this->m_dbManager != null) && !empty($dbname)){
            $r=$this->m_dbManager->selectdb($dbname);
            if($r){
                $this->m_dbname=$dbname;
            }
            else{
                if(!igk_sys_env_production()){
                    igk_ilog(["can't select database \"{$dbname}\". Database not found.", __FILE__.":".__LINE__]);
                }
            }
            return $r;
        }
        return false;
    }
    ///<summary>Represente selectLastId function</summary>
    /**
    * Represente selectLastId function
    * @return mixed
    */
    public function selectLastId(){
        $r = null;
        if($this->m_dbManager != null)
            $r= $this->m_dbManager->selectLastId();
        return $r;
    }
    ///<summary>Represente setForeignKeyCheck function</summary>
    ///<param name="d"></param>
    /**
    * Represente setForeignKeyCheck function
    * @param mixed $d
    */
    public function setForeignKeyCheck($d){
        if(is_integer($d))
            $this->sendQuery("SET foreign_key_checks=".igk_db_escape_string($d).";");
    }
    ///<summary>Represente setLastQuery function</summary>
    ///<param name="v"></param>
    /**
    * Represente setLastQuery function
    * @param mixed $v
    */
    protected function setLastQuery($v){
        throw new IGKNotImplementException(__FUNCTION__);
    }
    ///<summary>Represente update function</summary>
    ///<param name="tbname"></param>
    ///<param name="entries" default="null"></param>
    ///<param name="where" default="null"></param>
    ///<param name="querytabinfo" default="null"></param>
    /**
    * Represente update function
    * @param mixed $tbname
    * @param mixed $entries the default value is null
    * @param mixed $where the default value is null
    * @param mixed $querytabinfo the default value is null
    */
    public function update($tbname, $entries, $where=null, $querytabinfo=null){
        if(($entries == null) || ($this->m_dbManager == null)){
           
            return false;
        }
        return $this->m_dbManager->update($tbname, $entries, $where, $querytabinfo);
    }
}
///<summary>Represente class: IGKMYSQLDataAdapter</summary>
/**
* Represente IGKMYSQLDataAdapter class
*/
class IGKMYSQLDataAdapter extends IGKMySQLDataAdapterBase {
    private $queryListener;
    ///<summary>Represente __construct function</summary>
    ///<param name="ctrl" default="null"></param>
    /**
    * Represente __construct function
    * @param mixed $ctrl the default value is null
    */
    public function __construct($ctrl=null){
        parent::__construct($ctrl);
    }
    ///<summary>Represente __createManager function</summary>
    /**
    * Represente __createManager function
    */
    protected function __createManager(){
        if(class_exists(IGKDBQueryDriver::class)){
            $this->makeCurrent();
            $cnf=$this->app->Configs;
            $s=IGKDBQueryDriver::Create($cnf->db_server, $cnf->db_user, $cnf->db_pwd);
            if($s == null){
                ob_start();
                igk_wln("CreateManager Error");
                igk_wln("Error : ". igk_mysql_db_error());
                igk_wln("server : ".$cnf->db_server);
                igk_wln("user : ".$cnf->db_user);
                igk_wln("pwd : :-)");
                $v=ob_get_contents();
                ob_end_clean();
                igk_set_env("sys://db/error", $v);
                $s=new IGKNoDbConnection();
            }
            else{
                $s->setAdapter($this);
            }
            return $s;
        }
        return null;
    }
	public function escape_string($v){
		 $b=IGKDBQueryDriver::GetResId();
		 if ($b){
			 return mysqli_real_escape_string($b, $v);
		 }
		 return addslashes($v);
	}
    ///<summary>Represente __toString function</summary>
    /**
    * Represente __toString function
    */
    public function __toString(){
        return __CLASS__;
    }

	public function get_charset(){
		 $b=IGKDBQueryDriver::GetResId();
		 if ($b){
			 return mysqli_character_set_name($b);
		 }
		return "";
	}
	public function set_charset($charset="utf-8"){
		 $b=IGKDBQueryDriver::GetResId();
		 if ($b){
			 return mysqli_set_charset($b, $charset);
		 }
		return "";
	}
    ///<summary> add column</summary>
    ///<param name="tbname">the table name</param>
    ///<param name="name">the table name</param>
    /**
    *  add column
    * @param string $tbname the table name
    * @param string $name column name
    */
    public function addColumn($tbname, $name){
        if(empty($tbname))
            return false;
        $tbname=igk_db_escape_string($tbname);
        $columninfo="";
        if(is_object($name)){
            $columninfo=IGKSQLQueryUtils::GetColumnDefinition($name);
            $name=igk_db_escape_string($name->clName);
        }
        else{
            $columninfo .= "Int(9) NOT NULL";
            $name=igk_db_escape_string($name);
        }
        $query="ALTER TABLE `{$tbname}` ADD `{$name}` ".$columninfo;
        return $this->sendQuery($query, false);
    }
	public function resetAutoIncrement($table, $value=1){
		$table =  $tbname=igk_db_escape_string($table);
		$query = "SELECT count(*) FROM `{$table}`";
		$value = max($value, 1);
		if (($r = $this->sendQuery($query)) && ($r->getRowCount() == 0)){
			return $this->sendQuery("ALTER `{$table}` AUTO_INCREMENT {$value}");
		}
		return false;

	}
    ///<summary>Represente clearTable function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente clearTable function
    * @param mixed $tbname
    */
    public function clearTable($tbname){
        $tbname=igk_mysql_db_tbname($tbname);
        return $this->sendQuery("TRUNCATE `".$tbname."` ;")->Success && $this->sendQuery("ALTER TABLE `".$tbname."` AUTO_INCREMENT =1;")->Success;
    }
    ///<summary>Represente createdb function</summary>
    ///<param name="dbname"></param>
    /**
    * Represente createdb function
    * @param mixed $dbname
    */
    public function createdb($dbname){
        if($this->m_dbManager != null)
            return $this->m_dbManager->createDb($dbname);
        return false;
    }
    ///<summary>Represente createTable function</summary>
    ///<param name="tablename"></param>
    ///<param name="columninfoArray"></param>
    ///<param name="entries" default="null"></param>
    ///<param name="desc" default="null"></param>
    /**
    * Represente createTable function
    * @param mixed $tablename
    * @param mixed $columninfoArray
    * @param mixed $entries the default value is null
    * @param mixed $desc the default value is null
    */
    public function createTable($tablename, $columninfoArray, $entries=null, $desc=null){
        if($this->m_dbManager != null){
            if(!empty($tablename) && !$this->tableExists($tablename)){
                $s=$this->m_dbManager->createTable($tablename, $columninfoArray, $entries, $desc, $this->DbName);
                if(!$s){
                    igk_ilog("failed to create table [".$tablename."] - !!!! check ");
                    igk_ilog($this->m_dbManager->getError(), __METHOD__);
                }
                return $s;
            }
        }
        return false;
    }
    ///<summary>Represente die_error function</summary>
    /**
    * Represente die_error function
    */
    public function die_error(){
        return igk_mysql_db_error();
    }
    ///<summary>Represente getDbIdentifier function</summary>
    /**
    * Represente getDbIdentifier function
    */
    public function getDbIdentifier(){
        return "mysqli";
    }
    ///<summary>Represente getError function</summary>
    /**
    * Represente getError function
    */
    public function getError(){
        return $this->m_dbManager->getError();
    }
    ///<summary>Represente getErrorCode function</summary>
    /**
    * Represente getErrorCode function
    */
    public function getErrorCode(){
        return $this->m_dbManager->getErrorCode();
    }
    ///<summary>Represente getHasError function</summary>
    /**
    * Represente getHasError function
    */
    public function getHasError(){
        return $this->m_dbManager->getHasError();
    }
    ///<summary>Represente getInsertQuery function</summary>
    ///<param name="tablename"></param>
    ///<param name="entry"></param>
    /**
    * Represente getInsertQuery function
    * @param mixed $tablename
    * @param mixed $entry
    */
    public function getInsertQuery($tablename, $entry){
        return IGKSQLQueryUtils::GetInsertQuery($tablename, $entry);
    }
    ///<summary>create table links definition </summary>
    ///return true if this table still have link an register ctrl data
    /**
    * create table links definition
    */
    public function haveNoLinks($tablename, $ctrl=null){
        return $this->m_dbManager->haveNoLinks($tablename, $ctrl);
    }
    ///<summary>Represente insert function</summary>
    ///<param name="tablename"></param>
    ///<param name="entry"></param>
    ///<param name="tableinfo" default="null"></param>
    /**
    * Represente insert function
    * @param mixed $tablename
    * @param mixed $entry
    * @param mixed $tableinfo the default value is null
    */
    public function insert($tablename, $entry, $tableinfo=null){
        if($this->m_dbManager != null){
            $v=$this->m_dbManager->insert($tablename, $entry, $tableinfo);
            return $v;
        }
        return null;
    }
	///<summary>insert array in items by building as semi-column separated query</summary>
	public function insert_array($tbname, $values, $throwex=1){

		$query = "";
		$ch = "";
		foreach($values as  $v){
			 $query .= $ch.IGKSQLQueryUtils::GetInsertQuery($tbname, $v, null);
			 $ch = " ";
		}
		return $this->sendMultiQuery($query, $throwex);
	}
    ///<summary>Represente restoreRelationChecking function</summary>
    /**
    * Represente restoreRelationChecking function
    */
    public function restoreRelationChecking(){
        return $this->sendQuery("SET foreign_key_checks=1;");
    }
    ///<summary>Represente rmColumn function</summary>
    ///<param name="tbname"></param>
    ///<param name="name"></param>
    /**
    * Represente rmColumn function
    * @param mixed $tbname
    * @param mixed $name
    */
    public function rmColumn($tbname, $name){
        $tbname=igk_db_escape_string($tbname);
        $name=igk_db_escape_string($name);
        $query="ALTER TABLE `{$tbname}` DROP `{$name}` ";
        return $this->sendQuery($query, false);
    }
    ///<summary>Represente selectAll function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente selectAll function
    * @param mixed $tbname
    */
    public function selectAll($tbname){
        $q="SELECT * FROM `".igk_mysql_db_tbname($tbname)."` ";
        return $this->sendQuery($q);
    }
    ///<summary>Represente sendQuery function</summary>
    ///<param name="query"></param>
    ///<param name="throwex" default="true">throw exception</param>
    ///<param name="options" default="null">use to filter the query result. the default value is null</param>
    /**
    * Represente sendQuery function
    * @param mixed $query
    * @param mixed $throwex the default value is true
    * @param mixed $options use to filter the query result. the default value is null
    */
    public function sendQuery($query, $throwex=true, $options=null){
        $sendquery=$this->queryListener ?? $this->m_dbManager;
        if($sendquery){            
            $options=$options ?? (object)[];
            $r=$sendquery->sendQuery($query, $throwex);
            if($r !== null)
                return IGKMySQLQueryResult::CreateResult($r, $query, $options);
        }
        return null;
    }
	public function sendMultiQuery($query, $throwex=true){
        $sendquery=$this->queryListener ?? $this->m_dbManager;
        if($sendquery){
            $r = $sendquery->sendMultiQuery($query, $throwex);
            if($r !== null){
                return 1;
			}
        }
        return null;
    }
    ///<summary>Represente setSendDbQueryListener function</summary>
    ///<param name="listener"></param>
    /**
    * Represente setSendDbQueryListener function
    * @param mixed $listener
    */
    public function setSendDbQueryListener($listener){
        $this->queryListener=$listener;
    }
    ///<summary>Represente stopRelationChecking function</summary>
    /**
    * Represente stopRelationChecking function
    */
    public function stopRelationChecking(){
        return $this->sendQuery("SET foreign_key_checks=0;");
    }
    ///<summary>Represente tableExists function</summary>
    ///<param name="tablename"></param>
    /**
    * Represente tableExists function
    * @param mixed $tablename
    */
    public function tableExists($tablename){
        return $this->m_dbManager->tableExists($tablename);
    }
}
///<summary>Represente class: IGKMySQLDataCtrl</summary>
/**
* Represente IGKMySQLDataCtrl class
*/
class IGKMySQLDataCtrl extends IGKControllerBase{
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        parent::__construct();
    }
    ////!\ not realible
    ///<summar>/!\ delete all table from data base. return a node of</summary>
    /**
    */
    public function drop_all_tables(){
        $d=igk_get_data_adapter($this);
        $node=null;
        if($d->connect()){
            $node=igk_createNode("div");
            $r=$d->sendQuery("SHOW TABLES");
            $table=igk_html_build_query_result_table($r);
            $node->add($table);
            $dbname=$d->dbName;
            $tablelist=array();
            $deleted=array();
            foreach($r->Rows as $k=>$v){
                $i=$r->Columns[0]->name;
                $tablelist[$v->$i]=1;
                self::DropTableRelation($d, $v->$i, $dbname, $tablelist, $deleted);
            }
            $d->selectdb($dbname);
            $c=0;
            foreach($tablelist as $tbname=>$k){
                if(!$d->sendQuery("Drop Table IF EXISTS `".igk_db_escape_string($tbname)."` ")->Success){
                    $node->addNotifyBox("danger")->Content="Table ".$tbname. " not deleted ".igk_mysql_db_error();
                }
                $c++;
            }
            $d->selectdb($dbname);
            $d->close();
        }
        return $node;
    }
    ///<summary>Represente DropAllRelations function</summary>
    ///<param name="adapt"></param>
    ///<param name="dbname"></param>
    /**
    * Represente DropAllRelations function
    * @param mixed $adapt
    * @param mixed $dbname
    */
    public static function DropAllRelations($adapt, $dbname){
        $bck=$dbname;
        $adapt->selectdb("information_schema");
        $g=$adapt->sendQuery("DELETE FROM `TABLE_CONSTRAINTS` WHERE `TABLE_SCHEMA`='".igk_db_escape_string($dbname)."'");
        $adapt->selectdb($bck);
        return $g;
    }
    ///<summary>Represente DropConstraints function</summary>
    ///<param name="adapt"></param>
    ///<param name="dbname"></param>
    ///<param name="qregex"></param>
    /**
    * Represente DropConstraints function
    * @param mixed $adapt
    * @param mixed $dbname
    * @param mixed $qregex
    */
    public static function DropConstraints($adapt, $dbname, $qregex){
        $r=0;
        $g=0;
        $bck=$dbname;
        $adapt->selectdb("information_schema");
        $e=$adapt->sendQuery("SELECT * FROM `TABLE_CONSTRAINTS` WHERE `CONSTRAINT_NAME` LIKE '".igk_db_escape_string($qregex)."' AND `CONSTRAINT_SCHEMA`='".igk_db_escape_string($dbname)."'");
        $adapt->selectdb($bck);
        if($e && ($e->RowCount > 0)){
            $adapt->begintransaction();
            $r=1;
            foreach($e->Rows as  $v){
                $q="ALTER TABLE `".$v->TABLE_NAME."` DROP ".$v->CONSTRAINT_TYPE. " `".$v->CONSTRAINT_NAME."` ";
                $r=$r && $adapt->sendQuery($q);
            }
            if($r){
                $adapt->commit();
            }
            else{
                $adapt->rollback();
            }
        }
        $adapt->selectdb($dbname);
        return $r;
    }
    ///<summary>drop table</summary>
    ///<param name="tbname" type="mixed">mixed single table name or array of table name</param>
    /**
    * drop table
    * @param mixed tbname mixed single table name or array of table name
    */
    public static function DropTable($adapter, $tbname, $dbname, $node=null){
        if(is_array($tbname)){

            $tablelist=array();
            $deleted=array();
            foreach($tbname as $k=>$v){
                $i=$v;
                $tablelist[$i]=1;
                $deleted=array();
                self::DropTableRelation($adapter, $i, $dbname, $tablelist, $deleted, $node);
            }
            $adapter->selectdb($dbname);
            $r=true;
            foreach($tablelist as $ktbname=>$k){
                if(!$adapter->sendQuery("Drop Table IF EXISTS `".igk_db_escape_string($ktbname)."` ")->Success){
                    if($node)
                        $node->addNotifyBox("danger")->Content="Table ".$ktbname. " not deleted ".igk_mysql_db_error();
                    $r=false;
                }
            }
            igk_hook(IGK_NOTIFICATION_DB_TABLEDROPPED, [$adapter, $tbname]);

        }
        else{
            $delete=null;
            self::DropTableRelation($adapter, $tbname, $dbname, null, $delete, $node);
            if(!$adapter->sendQuery("Drop Table IF EXISTS `".igk_db_escape_string($tbname)."` ")->Success){
                igk_notifyctrl()->addErrorr("Table ".$tbname. " not deleted ".igk_mysql_db_error());
                return false;
            }
        }
        return true;
    }
    ///<summary>Represente DropTableRelation function</summary>
    ///<param name="adapter"></param>
    ///<param name="tbname"></param>
    ///<param name="dbname"></param>
    ///<param name="tablelist" default="null"></param>
    ///<param name="deleted" default="null" ref="true"></param>
    ///<param name="node" default="null"></param>
    /**
    * Represente DropTableRelation function
    * @param mixed $adapter
    * @param mixed $tbname
    * @param mixed $dbname
    * @param mixed $tablelist the default value is null
    * @param  * $deleted the default value is null
    * @param mixed $node the default value is null
    */
    public static function DropTableRelation($adapter, $tbname, $dbname, $tablelist=null, & $deleted=null, $node=null){
        $d=$adapter;
        $bck=$dbname;
        $d->selectdb("information_schema");
        $h=$d->sendQuery("SELECT * FROM `TABLE_CONSTRAINTS` WHERE `TABLE_NAME`='".igk_mysql_db_tbname($tbname)."' AND `TABLE_SCHEMA`='".igk_db_escape_string($dbname)."'");
        $d->selectdb($bck);
        $r=false;
        if($h && $h->RowCount > 0){
            $del=false;
            $ns="";
            foreach($h->Rows as $m=>$n){
                $ns=$n->CONSTRAINT_NAME;
                $nt=$n->CONSTRAINT_TYPE;
                switch($nt){
                    case "FOREIGN KEY":
                    if(!isset($deleted[$ns])){
                        $q="ALTER TABLE `".$n->TABLE_NAME."` DROP ".$nt." `".$ns."`";
                        if(!$d->sendQuery($q)->Success){
                            if($node)
                                $node->addNotifyBox("danger")->Content=$q." ".igk_mysql_db_error();
                        }
                        if($nt !== "FOREIGN KEY"){
                            $q="ALTER TABLE `".$n->TABLE_NAME."` DROP INDEX `".$ns."`";
                            if(!$d->sendQuery($q)->Success){
                                if($node)
                                    $node->addNotifyBox("danger")->Content=$q." ".igk_mysql_db_error();
                            }
                        }
                        $deleted[$n->CONSTRAINT_NAME]=1;
                    }
                    break;
                    case "PRIMARY KEY":
                    break;
                }
            }
        }
        return $r;
    }
    ///<summary>Represente GetAllRelations function</summary>
    ///<param name="adapt"></param>
    ///<param name="dbname"></param>
    /**
    * Represente GetAllRelations function
    * @param mixed $adapt
    * @param mixed $dbname
    */
    public static function GetAllRelations($adapt, $dbname){
        $bck=$dbname;
        $adapt->selectdb("information_schema");
        $g=$adapt->sendQuery("SELECT * FROM `TABLE_CONSTRAINTS` WHERE `TABLE_SCHEMA`='".igk_db_escape_string($dbname)."'");
        $adapt->selectdb($bck);
        return $g;
    }
    ///<summary>Represente GetConstraint_Index function</summary>
    ///<param name="a"></param>
    ///<param name="b"></param>
    ///<param name="tbase"></param>
    /**
    * Represente GetConstraint_Index function
    * @param mixed $a
    * @param mixed $b
    * @param mixed $tbase
    */
    public static function GetConstraint_Index($a, $b, $tbase){
        $bck=$tbase;
        $a->selectdb("information_schema");
        $h=$a->sendQuery("SELECT * FROM `TABLE_CONSTRAINTS` WHERE `TABLE_SCHEMA`='".$tbase."'");
        $i=1;
        $max=0;
        $ln=strlen($b);
        foreach($h->Rows as  $v){
            if(preg_match("/^".$b."/i", $v->CONSTRAINT_NAME)){
                $i++;
                $max=max($max, intval(substr($v->CONSTRAINT_NAME, $ln)));
            }
        }
        $a->selectdb($bck);
        return max($i, $max + 1);
    }
    ///<summary>Represente getDataAdapterName function</summary>
    /**
    * Represente getDataAdapterName function
    */
    public function getDataAdapterName(){
        return IGK_MYSQL_DATAADAPTER;
    }
    ///<summary>Represente getDataTableInfo function</summary>
    /**
    * Represente getDataTableInfo function
    */
    public function getDataTableInfo(){
        return null;
    }
    ///<summary>Represente getDataTableName function</summary>
    /**
    * Represente getDataTableName function
    */
    public function getDataTableName(){
        return null;
    }
    ///<summary>Represente getEntries function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente getEntries function
    * @param mixed $tbname
    */
    public function getEntries($tbname){
        $v=$this->getInfo($tbname);
        return ($v == null) ? null: $v->Entries;
    }
    ///<summary>Represente getInfo function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente getInfo function
    * @param mixed $tbname
    */
    public function getInfo($tbname){
        return igk_getv($this->m_dictionary, $tbname);
    }
    ///<summary>Represente getIsVisible function</summary>
    /**
    * Represente getIsVisible function
    */
    public function getIsVisible(){
        return false;
    }
    ///<summary>Represente InitComplete function</summary>
    /**
    * Represente InitComplete function
    */
    public function InitComplete(){
        $info=null;
        $v_name=null;
        $v_info=null;
        $this->m_dictionary=igk_db_get_table_def($this->DataAdpaterName);
    }
    ///<summary>Represente initDataEntry function</summary>
    ///<param name="dbman"></param>
    ///<param name="tbname" default="null"></param>
    /**
    * Represente initDataEntry function
    * @param mixed $dbman
    * @param mixed $tbname the default value is null
    */
    public function initDataEntry($dbman, $tbname=null){}
    ///<summary>Represente RestoreRelations function</summary>
    ///<param name="adapt"></param>
    ///<param name="dbname"></param>
    ///<param name="e"></param>
    /**
    * Represente RestoreRelations function
    * @param mixed $adapt
    * @param mixed $dbname
    * @param mixed $e
    */
    public static function RestoreRelations($adapt, $dbname, $e){
        throw new IGKNotImplementException(__METHOD__);
        // $g=0;
        // $bck=$dbname;
        // $adapt->selectdb("information_schema");
        // foreach($e->Rows as $k=>$v){
            // $query=IGKSQLQueryUtils::GetInsertQuery("TABLE_CONSTRAINTS", $v);
        // }
        // $adapt->selectdb($bck);
        // return $g;
    }
}
///<summary>Represent MySQL Query result wrapper</summary>
/**
* Represent MySQL Query result wrapper
*/
final class IGKMySQLQueryResult extends IGKQueryResult implements IIGKQueryResult {
    private $m_adapterName;
    private $m_columns;
    private $m_dbname;
    private $m_fieldcount;
    private $m_irows;
    private $m_primarykey;
    private $m_query;
    private $m_rows;
    private $m_rowsEntity;
    private $m_tables;
    private $m_type;
    private $m_value;
    private $m_multitable; 
    public function success(){
        return $this->m_rows !== null;
    }
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    private function __construct(){
        $this->m_columns=array();
        $this->m_tables=array();
        $this->m_rows=array();
        $this->m_rowsEntity=array();
        $this->m_irows=array();
        $this->m_adapterName="MYSQL";
        $this->m_type="none";
        $this->m_result=0;
        $this->m_multitable = false;
    }
    ///retult of the query  uses for boolean data
    /**
    */
    public function __toString(){
        return "IGKMySQLQueryResult [RowCount: ".$this->RowCount."]";
    }
    ///be aware: don't make call to !== it make bit exhausted
    ///<summary>add a row to query result</summary>
    ///<remark>if build in query result . that will be a copy of the rows</remark>
    /**
    * add a row to query result
    */
    public function addRow($row){
        if(($this->m_type == "igk_db_query_result") && ($this->m_query == ":igk_build_in_query_result")){
            if(is_object($row)){
                $tab=array();
                foreach($this->m_columns as  $v){
                    $tab[$v->name]=igk_getv($row, $v->name);
                }
                $this->m_rows[]=(object)$tab;
            }
            return;
        }
        if(is_object($row) || (is_array($row) && (count($row) == $this->m_fieldcount))){
            $this->m_rows[]=(object)$row;
            $this->m_rowcount=count($this->m_rows);
        }
        else{
            igk_wln_e("row not added ".$this->m_fieldcount. " isarray?".is_array($row). " || iscount? :: ".count($row)." == ".$this->m_fieldcount);
        }
    }
    ///<summary>create a empty result from result type</summary>
    /**
    * create a empty result from result type
    */
    public static function CreateEmptyResult($result, $seacharray=null){
        $out=new IGKMySQLQueryResult();
        $out->m_dbname=$result->m_dbname;
        $out->m_fieldcount=$result->m_fieldcount;
        $out->m_rows=array();
        $out->m_rowsEntity=array();
        $out->m_query='Empty';
        return $out;
    }
    ///<summary>create a result data</summary>
    ///<param name="options">callback or igk_db_create_opt_obj()</param>
    /**
    * create a result data
    * @param mixed options callback or igk_db_create_opt_obj()
    */
    public static function CreateResult($dbresult, $query=null, $options=null){
        $_handle=$options && igk_getv($options, 'handle');
        if(!$_handle){
            if(is_bool($dbresult) || is_numeric($dbresult) || ($dbresult === null)){
                // $out=new IGKMySQLQueryResult();
                // $out->m_fieldcount=1;
                // $out->m_columns[]="clResult";
                // $t=array("clResult"=>$dbresult);
                // $out->m_irows[]=$t;
                // $out->m_type=is_numeric($dbresult) ? "numeric": "boolean";
                // $out->m_value=$dbresult;
                // $out->m_query=$query;
                // $out->setError(igk_getv($options, "error"));
                // $out->setErrorMsg(igk_getv($options, "errormsg"));
                $out = new IGKDBSingleValueResult();
                $out->type = is_numeric($dbresult) ? "numeric": "boolean";
                $out->value = $dbresult;
                $out->query = $query;
                return $out;
            }
            if(!$dbresult){
                igk_set_error(__METHOD__, "CreateResult - > dbresult  not Define");
                return null;
            }
            if(is_object($dbresult)){
                $cl=strtolower(get_class($dbresult));
                if(!preg_match("/mysql(i)?_result/", $cl)){
                    $out=new IGKMySQLQueryResult();
                    $out->m_rowcount=1;
                    $out->m_rows[]=$dbresult;
                    $tab=(array)$dbresult;
                    $out->m_fieldcount=igk_count($tab);
                    $out->m_type="igk_db_query_result";
                    $out->m_query=":igk_build_in_query_result";
                    $i=0;
                    foreach($tab as $k=>$v){
                        $out->m_columns[$i]=(object)array("name"=>$k, "typeName"=>"php", "index"=>$i);
                        $i++;
                    }
                    return $out;
                }
            }
        }
        if(!igk_db_is_resource($dbresult)){
            return $dbresult;
        }
        $c=igk_db_num_rows($dbresult);
        $out=new IGKMySQLQueryResult();
        if($_handle){
            $out->m_adapterName=$options->adapterName ?? $out->m_adapterName;
        }
        $out->m_rowcount=$c;
        $out->m_fieldcount=igk_db_num_fields($dbresult);
        $out->m_type="igk_db_query_result";
        $out->m_query=$query;
        $index=0;
        $prim_key=array();
        while($d=igk_db_fetch_field($dbresult)){
            $d->index=$index;
            $d->typeName=igk_mysql_db_gettypename($d->type);
            if((isset($d->primary_key) && $d->primary_key) || (igk_mysql_db_is_primary_key($d->flags))){
                $d->primary_key=1;
                $prim_key[]=(object)(array("name"=>$d->name, "index"=>$index));
            }
            else{
                $d->primary_key=0;
            }
            $out->m_columns[$index]=$d;
            $out->m_tables[$d->table]=$d->table;
            $index++;
        }
        $v_primkey=count($prim_key) == 1 ? $prim_key[0]->name: null;
        $v_primkeyindex=count($prim_key) == 1 ? $prim_key[0]->index: null;
        $callback=is_callable($options) ? $options: igk_getv($options, self::CALLBACK_OPTS );
        $_nn=(igk_count($out->m_tables) > 1);
        $c=0;
        while($d=igk_db_fetch_row($dbresult)){
            $t=array();
            foreach($out->m_columns as $k=>$s){
                if(!isset($t[$s->name])){
                    $t[$s->name]=$d[$s->index];
                } else { 
                if ($_nn)
                    $t[$s->table.".". $s->name]=$d[$s->index];
                else 
                    $t[$s->name]=$d[$s->index];
                }

            }
            $obj=  IGKQueryRowObj::Create($t);
            if($callback && !$callback($obj)){
                continue;
            }
            $c++;
            if($v_primkey){
                $out->m_rows[$d[$v_primkeyindex]]=$obj;
            }
            else if(count($prim_key) > 1)
                $out->m_rows[]=$obj;
            else
                $out->m_rows[]=$obj;
            $out->m_irows[]=$obj;
        }
        $out->m_rowcount=$c;
        $out->m_primarykey=$v_primkey;
        $out->m_multitable = $_nn;
        return $out;
    }
    ///<summary>Represente getColumnCount function</summary>
    /**
    * Represente getColumnCount function
    */
    public function getColumnCount(){
        return igk_count($this->m_columns);
    }
    ///<summary>Represente getColumnIndex function</summary>
    ///<param name="columnname"></param>
    /**
    * Represente getColumnIndex function
    * @param mixed $columnname
    */
    public function getColumnIndex($columnname){
        if(isset($this->m_columns[$columnname])){
            return $this->m_columns[$columnname]->index;
        }
        return -1;
    }
    ///<summary>Represente getColumns function</summary>
    /**
    * Represente getColumns function
    */
    public function getColumns(){
        return $this->m_columns;
    }
    ///<summary>Represente getHasRow function</summary>
    /**
    * Represente getHasRow function
    */
    public function getHasRow(){
        return ($this->getRowCount() > 0);
    }
    ///<summary>Represente getQuery function</summary>
    /**
    * Represente getQuery function
    */
    public function getQuery(){
        return $this->m_query;
    }
    ///<summary>Represente getResult function</summary>
    /**
    * Represente getResult function
    */
    public function getResult(){
        if(strtolower($this->m_type) == 'boolean'){
            return igk_getv(igk_getv($this->m_irows, 0), 'clResult');
        }
        return false;
    }
    ///<summary>get the type of result. boolean|numeric|db_result</summary>
    /**
    * get the type of result. boolean|numeric|db_result
    */
    public function getResultType(){
        return $this->m_type;
    }
    ///<summary>Represente getRowArray function</summary>
    ///<param name="index"></param>
    /**
    * Represente getRowArray function
    * @param mixed $index
    */
    public function getRowArray($index){
        if(($index < 0) && ($index>=$this->RowCount)){
            return null;
        }
        $f=array();
        $c=0;
        foreach($this->m_columns as $k){
            $f[$k->name]=$this->m_rows[$index][$c];
            $c++;
        }
        $f["info"]=array();
        if(isset($this->m_columns[0]))
            $f["info"]["sourcetable"]=$this->m_columns[0]->table;
        return $f;
    }
    ///<summary>Represente getRowAtIndex function</summary>
    ///<param name="index"></param>
    /**
    * Represente getRowAtIndex function
    * @param mixed $index
    */
    public function getRowAtIndex($index){
        if(strtolower($this->m_type) == 'igk_db_query_result'){
            return igk_getv($this->m_irows, $index);
        }
        return null;
    }
    ///<summary>Represente getRowCount function</summary>
    /**
    * Represente getRowCount function
    */
    public function getRowCount(){
        return igk_count($this->m_rows);
    }
    ///<summary>Represente getRows function</summary>
    /**
    * Represente getRows function
    */
    public function getRows(){
        return $this->m_rows;
    }
    ///<summary>Represente getSuccess function</summary>
    /**
    * Represente getSuccess function
    */
    public function getSuccess(){
        return ($this->ResultTypeIsBoolean() && $this->getValue()) || ($this->RowCount > 0);
    }
    ///<summary>Represente getTables function</summary>
    /**
    * Represente getTables function
    */
    public function getTables(){
        return $this->m_tables;
    }
    ///<summary>get the request value</summary>
    /**
    * get the request value
    */
    public function getValue(){
        return $this->m_value;
    }
    ///<param name="equalsTab">array for searching </param>
    /**
    * @param mixed $equalsTab array for searching
    */
    public function searchEqual($equalsTab){
        if(!is_array($equalsTab))
            return null;
        $t=array();
        foreach($this->Rows as  $v){
            $found=true;
            foreach($equalsTab as $m=>$n){
                if($v->$m != $n){
                    $found=false;
                    break;
                }
            }
            if($found)
                $t[]=$v;
        }
        if(igk_count($t) == 1)
            return $t[0];
        if(igk_count($t) == 0)
            return null;
        return $t;
    }
    ///<summary>Represente select function</summary>
    ///<param name="callback"></param>
    /**
    * Represente select function
    * @param mixed $callback
    */
    public function select($callback){
        $result=new IGKMySQLQueryResult();
        $result->m_columns=$this->m_columns;
        $result->m_type="igk_db_query_filter_result";
        $result->m_fieldcount=$this->m_fieldcount;
        foreach($this->m_rows as  $v){
            if($callback($v)){
                $result->m_rows[]=$v;
            }
        }
        return $result;
    }
    ///<summary>Represente SortBy function</summary>
    ///<param name="key"></param>
    ///<param name="asc" default="true"></param>
    ///<param name="preserveid" default="true"></param>
    /**
    * Represente SortBy function
    * @param mixed $key
    * @param mixed $asc the default value is true
    * @param mixed $preserveid the default value is true
    */
    public function SortBy($key, $asc=true, $preserveid=true){
        return $this->SortValueBy($key, $asc, null, $preserveid);
    }
    ///<summary>sort result </summary>
    ///<param name="key">mixed. callback | key to sor </param>
    /**
    * sort result
    */
    public function SortValueBy($key, $asc=true, $param=null, $preserveid=false){
        if(is_callable($key))
            $param=$key;
        else{
            if($param == null){
                $t=new IGKSorter();
                $t->key=$key;
                $t->asc=$asc;
                $param=array($t, "SortValue");
            }
        }
        $tab=$this->m_rows;
        usort($tab, $param);
        $pm=$this->m_primarykey ?? IGK_FD_ID;
        if($preserveid){
            $t=array();
            foreach($tab as $k){
                $t[$k->$pm]=$k;
            }
            $this->m_irows=$tab;
            $this->m_rows=$t;
        }
        else{
            $this->m_irows=$tab;
            $this->m_rows=$tab;
        }
        return $this;
    }
    public function toAssocArray($name){
        $o = null;
        foreach($this->Rows as $r){
            if ($o===null) $o = [];
            $o[$r->$name] = $r;
        }
        return $o;
    }
}
///<summary>Represente class: IGKMySQLTimeManager</summary>
/**
* Represente IGKMySQLTimeManager class
*/
final class IGKMySQLTimeManager extends IGKObject{
    var $ad;
    ///<summary>Represente __construct function</summary>
    ///<param name="ad"></param>
    /**
    * Represente __construct function
    * @param mixed $ad
    */
    public function __construct($ad){
        $this->ad=$ad;
    }
    ///<summary>Represente Now function</summary>
    /**
    * Represente Now function
    */
    public function Now(){
        return date($this->ad->getFormat("datetime"));
    }
}
///<summary>Represente class: IGKNoDbConnection</summary>
/**
* Represente IGKNoDbConnection class
*/
class IGKNoDbConnection{
    ///<summary>Represente close function</summary>
    /**
    * Represente close function
    */
    function close(){}
    ///<summary>Represente closeAll function</summary>
    /**
    * Represente closeAll function
    */
    function closeAll(){}
    ///<summary>Represente connect function</summary>
    /**
    * Represente connect function
    */
    function connect(){
        return false;
    }
    ///<summary>Represente initForInitDb function</summary>
    /**
    * Represente initForInitDb function
    */
    function initForInitDb(){}
    ///<summary>Represente insert function</summary>
    /**
    * Represente insert function
    */
    function insert(){
        return false;
    }
    ///<summary>Represente OpenCount function</summary>
    /**
    * Represente OpenCount function
    */
    function OpenCount(){
        return -1;
    }
    ///<summary>Represente sendQuery function</summary>
    ///<param name="query"></param>
    /**
    * Represente sendQuery function
    * @param mixed $query
    */
    function sendQuery($query){
        return null;
    }
    ///<summary>Represente setCloseCallback function</summary>
    /**
    * Represente setCloseCallback function
    */
    function setCloseCallback(){}
    ///<summary>Represente setOpenCallback function</summary>
    /**
    * Represente setOpenCallback function
    */
    function setOpenCallback(){}
}

///<summary> represent multi query access </summary>
function igk_mysqli_multi_query($con, $query){
	 $cr =  mysqli_multi_query($con, $query);
	 if ($cr){
		 while (mysqli_more_results($con) && mysqli_next_result($con)){
		 }
		 $cr = ($error = mysqli_errno($con)) == 0;
	 }
	 return $cr;
}
define("IGK_MSQL_DB_Adapter", 1);
define("IGK_MSQL_DB_AdapterFunc", extension_loaded("mysql"));
define("IGK_MSQLi_DB_AdapterFunc", extension_loaded("mysqli"));
if(IGK_MSQLi_DB_AdapterFunc){
    define("IGK_MYSQL_USAGE", "MySQLi");
}
else
    define("IGK_MYSQL_USAGE", "MySQL");
define("IGK_MYSQL_DATETIME_FORMAT", "Y-m-d H:i:s");
define("IGK_MYSQL_TIME_FORMAT", IGK_MYSQL_DATETIME_FORMAT);
define("IGK_MYSQL_DATE_FORMAT", "Y-m-d");
IGKDBQueryDriver::Init(function(& $conf){
    $n="mysqli";
    $conf["system"]="mysqli";
    $conf[$n]["func"]=array();
    $conf[$n]["auto_increment_word"]="AUTO_INCREMENT";
    $conf[$n]["data_adapter"]="MYSQL";
    $t=array();
    $t["connect"]="mysqli_connect";
    $t["selectdb"]="mysqli_select_db";
    $t["check_connect"]="mysqli_ping";
    $t["query"]="mysqli_query";
    $t["multi_query"]="igk_mysqli_multi_query";
    $t["escapestring"]="mysqli_real_escape_string";
    $t["num_rows"]="mysqli_num_rows";
    $t["num_fields"]="mysqli_num_fields";
    $t["fetch_field"]="mysqli_fetch_field";
    $t["fetch_row"]="mysqli_fetch_row";
    $t["close"]="mysqli_close";
    $t["error"]="mysqli_error";
    $t["errorc"]="mysqli_errno";
    $t["lastid"]="mysqli_insert_id";
    $conf[$n]["func"]=$t;
});
igk_sys_regSysController("IGKMySQLDataCtrl");