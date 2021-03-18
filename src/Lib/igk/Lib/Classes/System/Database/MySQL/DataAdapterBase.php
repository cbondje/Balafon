<?php


namespace IGK\System\Database\MySQL;

use Exception;
use IGKDBQueryDriver;
use IGKException;
use IGKMySQLDataCtrl;
use IGKSQLDataAdapter;
use IGKSQLQueryUtils;

///<summary>Represente class: DataAdapterBase</summary>
/**
* Represente DataAdapterBase class
*/
abstract class DataAdapterBase extends IGKSQLDataAdapter{
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
        if($this->connect()){
            register_shutdown_function(function(){
                $c = $this->OpenCount();
                while($this->OpenCount()>0){
                    $this->close();
                    if ($c == $this->OpenCount()){
                        new IGKException("failed to close connection");
                    }
                }  
            });
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