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
    ///<summary>Represente __construct function</summary>
    ///<param name="pdo"></param>
    /**
    * Represente __construct function
    * @param  $pdo
    */
    private function __construct($pdo){
        $this->m_pdo=$pdo;
    }
    ///<summary>Represente close function</summary>
    /**
    * Represente close function
    */
    public function close(){}
    ///<summary>Represente connect function</summary>
    ///<param name="ctrl" default="null"></param>
    /**
    * Represente connect function
    * @param  $ctrl the default value is null
    */
    public function connect($ctrl=null){}
    ///<summary>Represente Create function</summary>
    ///<param name="server"></param>
    ///<param name="dbname"></param>
    ///<param name="login"></param>
    ///<param name="pwd"></param>
    /**
    * Represente Create function
    * @param  $server
    * @param  $dbname
    * @param  $login
    * @param  $pwd
    */
    public static function Create($server, $dbname, $login, $pwd){
        return null;
    }
    ///<summary>Represente CreateEmptyResult function</summary>
    /**
    * Represente CreateEmptyResult function
    */
    public function CreateEmptyResult(){
        return null;
    }
    ///<summary>Represente initSystablePushInitItem function</summary>
    ///<param name="tablename"></param>
    ///<param name="callback"></param>
    /**
    * Represente initSystablePushInitItem function
    * @param  $tablename
    * @param  $callback
    */
    public function initSystablePushInitItem($tablename, $callback){}
    ///<summary>Represente initSystableRequired function</summary>
    ///<param name="tablename"></param>
    /**
    * Represente initSystableRequired function
    * @param  $tablename
    */
    public function initSystableRequired($tablename){}
}
if(!defined("IGK_MSQL_DB_Adapter")){
    include_once(dirname(__FILE__)."/igk_mysql_db.pthml");
    if(!defined("IGK_MSQL_DB_Adapter"))
        return;
}