<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// desc: represent a pdo data adapter. for management file

///<summary>Represente class: IGKPDODataAdpater</summary>
/**
* Represente IGKPDODataAdpater class
*/
class IGKPDODataAdpater extends IGKDataAdapter {
    private $m_pdo;
    ///<summary></summary>
    ///<param name="pdo"></param>
    /**
    * 
    * @param mixed $pdo
    */
    private function __construct($pdo){
        $this->m_pdo=$pdo;
    }
    ///<summary></summary>
    /**
    * 
    */
    public function close(){}
    ///<summary></summary>
    ///<param name="ctrl" default="null"></param>
    /**
    * 
    * @param mixed $ctrl the default value is null
    */
    public function connect($ctrl=null){}
    ///<summary></summary>
    ///<param name="server"></param>
    ///<param name="dbname"></param>
    ///<param name="login"></param>
    ///<param name="pwd"></param>
    /**
    * 
    * @param mixed $server
    * @param mixed $dbname
    * @param mixed $login
    * @param mixed $pwd
    */
    public static function Create($server, $dbname, $login, $pwd){
        return null;
    }
    ///<summary></summary>
    /**
    * 
    */
    public function CreateEmptyResult(){
        return null;
    }
    ///<summary></summary>
    ///<param name="tablename"></param>
    ///<param name="callback"></param>
    /**
    * 
    * @param mixed $tablename
    * @param mixed $callback
    */
    public function initSystablePushInitItem($tablename, $callback){}
    ///<summary></summary>
    ///<param name="tablename"></param>
    /**
    * 
    * @param mixed $tablename
    */
    public function initSystableRequired($tablename){}

    public function escape_string($s){

	}
}
if(!defined("IGK_MSQL_DB_Adapter")){
    include_once(dirname(__FILE__)."/igk_mysql_db.pthml");
    if(!defined("IGK_MSQL_DB_Adapter"))
        return;
}