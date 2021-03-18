<?php

namespace IGK\System\Database;

///<summary>Represente class: IGKNoDbConnection</summary>
/**
* Represente IGKNoDbConnection class
*/
class NoDbConnection{
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
