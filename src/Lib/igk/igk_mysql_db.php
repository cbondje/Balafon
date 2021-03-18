<?php
//
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// desc: mysql data adapter
// file: igk_mysql_db.php

use IGK\Controllers\BaseController;
use IGK\System\Database\MySQL\DataAdapterBase;
use IGK\System\Database\MySQL\IGKMySQLQueryResult;
use IGK\System\Database\NoDbConnection;

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

///<summary>Represente class: IGKMYSQLDataAdapter</summary>
/**
* Represente IGKMYSQLDataAdapter class
*/
class IGKMYSQLDataAdapter extends DataAdapterBase {
    private $queryListener;
    private static $_initAdapter; 
    ///<summary>Represente __construct function</summary>
    ///<param name="ctrl" default="null"></param>
    /**
    * Represente __construct function
    * @param mixed $ctrl the default value is null
    */
    public function __construct($ctrl=null){
        parent::__construct($ctrl);


        if (!self::$_initAdapter){



        }
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
                $v= ob_get_clean();

                igk_set_env("sys://db/error", $v);
                $s=new NoDbConnection();
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
class IGKMySQLDataCtrl extends BaseController{
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
igk_sys_regSysController(IGKMySQLDataCtrl::class);