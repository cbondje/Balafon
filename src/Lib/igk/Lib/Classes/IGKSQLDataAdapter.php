<?php


///<summary>Represente class: IGKSQLDataAdapter</summary>
/**
* Represente IGKSQLDataAdapter class
*/
abstract class IGKSQLDataAdapter extends IGKDataAdapter{
    protected static function ResolvType($t){
         switch(strtolower($t)){
            case "int":
            return "Int";
            case "varchar":
            return "VARCHAR";
        }
        return strtoupper($t);
    }
    protected static function GetRelation($adapter){
        $r = $adapter->getDbname();        
        $adapter->selectdb("information_schema");
        $h=$adapter->sendQuery("SELECT * FROM `KEY_COLUMN_USAGE` WHERE `TABLE_NAME`='".igk_db_escape_string($tname)."' AND `TABLE_SCHEMA`='".igk_db_escape_string($r)."' AND `COLUMN_NAME`='".igk_db_escape_string($clname)."' AND `REFERENCED_TABLE_NAME`!=''");
        $adapter->selectdb($r);
        return $h->getRowAtIndex(0);
    }
    public static function ResolvColumnInfo($adapter, $table, $columninfo){
        $v = $columninfo;
        $table_n = $table;
        $mysql = $adapter;
        $cl= []; // $row->addNode("Column");
        $cl["clName"]=$v->Field;
        $tab=array();
        preg_match_all("/^((?P<type>([^\(\))]+)))\\s*(\((?P<length>([0-9]+))\)){0,1}( (?P<option>(unsigned)))?$/i", trim($v->Type), $tab);
        igk_ilog("name: ".$v->Field. " ".$v->Type);
        $cl["clType"]= static::ResolvType(igk_getv($tab["type"], 0, "Int"));
        $cl["clTypeLength"]=igk_getv($tab["length"], 0, 0);
        if (!empty($tab["option"][0])){
            switch(strtolower(trim($tab["option"][0]))){
                case "unsigned":
                    $cl["clType"] = "U".$cl["clType"];
                break;
            }
        }
        if($v->Default)
            $cl["clDefault"]=$v->Default;
        if($v->Comment){
            $cl["clDescription"]=$v->Comment;
        }
        $cl["clAutoIncrement"]=preg_match("/auto_increment/i", $v->Extra) ? "True": null;
        $cl["clNotNull"]=preg_match("/NO/i", $v->Null) ? "True": null;
        $cl["clIsPrimary"]=preg_match("/PRI/i", $v->Key) ? "True": null;
        $cl["clIsUnique"]=preg_match("/UNI/i", $v->Key) ? "True": null;
        if(preg_match("/(MUL|UNI)/i", $v->Key)){
            $rel= static::GetRelation($mysql, $table_n, $v->Field);
            if($rel){
                $cl["clLinkType"]=$rel->REFERENCED_TABLE_NAME;
            }
        }
        if (!empty($v->Extra) && (($cpos = strpos($v->Extra, "on update "))!==false)){
            $c = trim(substr($v->Extra, $cpos+10));
            if (in_array($c, ["CURRENT_TIMESTAMP"]))
                $cl["clUpdateFunction"] = "Now()";
        }
        //+ insert and update function ignored
        return $cl; 
    }
    ///<summary>Represente delete function</summary>
    ///<param name="tbname"></param>
    ///<param name="entry"></param>
    /**
    * Represente delete function
    * @param mixed $tbname
    * @param mixed $entry
    */
    public function delete($tbname, $entry){
        $this->dieNotConnect();
        $query=IGKSQLQueryUtils::GetDeleteQuery($tbname, $entry);
        $t=$this->sendQuery($query, $tbname);
        if($t){
            return true;
        }
        return false;
    }
    ///<summary>delete all from table</summary>
    /**
    * delete all from table
    */
    public function deleteAll($tbname, $condition=null){
        igk_trace();
        igk_exit();
		$c= "";
		if ($condition && strlen($c = IGKSQLQueryUtils::GetCondString($condition))>0){
				$c = " WHERE ".$c;
		}
        return $this->sendQuery("DELETE FROM `".igk_mysql_db_tbname($tbname)."`".$c, $tbname);
    }
    ///<summary>setup manager config for next operation</summary>
    /**
    * setup manager config for next operation
    */
    protected function initConfig(){}
    ///<summary>Represente insert function</summary>
    ///<param name="tbname"></param>
    ///<param name="values"></param>
    ///<param name="tableinfo" default="null"></param>
    /**
    * Represente insert function
    * @param mixed $tbname
    * @param mixed $values
    * @param mixed $tableinfo the default value is null
    */
    public function insert($tbname, $values, $tableinfo=null){
        $this->dieNotConnect();
        $this->initConfig();
        $query=IGKSQLQueryUtils::GetInsertQuery($tbname, $values, $tableinfo);
        $t=$this->sendQuery($query, $tbname);
        if($t){
            if(is_object($values)){
                if(igk_getv($values, "clId") == null)
                    $values->clId=$this->last_id();
            }
            return true;
        }
        else{
            $error="Insertion Query Error : ".igk_mysql_db_error(). " : ".$query;
            igk_debug_wln($error);
            igk_db_error($error);
        }
        return false;
    }


   ///<summary>Represente last_id function</summary>
    /**
    * Represente last_id function
    */
    public function last_id(){}
    ///<summary>build and send a mysql select query</summary>
    ///<param name="options">callback or igk_db_create_opt_obj()</param>
    /**
    * build and send a mysql select query
    * @param mixed $options callback or igk_db_create_opt_obj()
    */
    public function select($tbname, $where=null, $options=null){
        if(empty($tbname))
            igk_die("table is empty");
        $q=IGKSQLQueryUtils::GetSelectQuery($this, $tbname, $where, $options);
        return $this->sendQuery($q, $tbname, $options);
    }
    ///<summary>Represente selectAll function</summary>
    ///<param name="tbname"></param>
    /**
    * Represente selectAll function
    * @param mixed $tbname
    */
    public function selectAll($tbname){
        $tbname=igk_mysql_db_tbname($tbname);
        $q="SELECT * FROM `".($tbname)."` ";
        return $this->sendQuery($q, $tbname);
    }
    ///<summary>Represente selectAndWhere function</summary>
    ///<param name="tbname"></param>
    ///<param name="condition" default="null"></param>
    ///<param name="options" default="null"></param>
    /**
    * Represente selectAndWhere function
    * @param mixed $tbname
    * @param mixed $condition the default value is null
    * @param mixed $options the default value is null
    */
    public function selectAndWhere($tbname, $condition=null, $options=null){
        $o="";
        $q="";
        $s=0;
        $s="";
        $column= "*"; //IGKSQLQueryUtils::GetColumnList($options, $tbname);
        $tlist = "";
        if(is_string($tbname)){
            $tbname=igk_mysql_db_tbname($tbname);
            $tlist="`".$tbname."`";
        }
        else if(is_array($tbname)){
            $r=0;
            foreach($tbname as $k){
                $_n=igk_mysql_db_tbname($k);
                if($r)
                    $q .= ",";
                $q .= "`".$_n."`";
                $r=1;
            }
            $tlist = $q;
            $q = "";
        }
        if($condition){
            if(is_object($condition) || (is_array($condition) && (igk_count($condition) > 0))){
                if ($c = IGKSQLQueryUtils::GetCondString($condition, "AND", $this))
                    $q .= "WHERE ".$c;
            }
            else if(is_numeric($condition) || !is_string($condition)){
                $q .= "WHERE `".IGK_FD_ID."`='".igk_db_escape_string($condition)."' ";
            }
            else if(is_string($condition)){
                $q .= "WHERE ".igk_db_escape_string($condition)." ";
            }
        }
        $q = " FROM ".$tlist .$q;
        $columns = "*";
        if ($options && ($tq= IGKSQLQueryUtils::GetExtraOptions($options, $this))){
            if (!empty($tq->join))
                $q = $tq->join . " ".$q;
            $q.= " ".$tq->extra;
            $columns = $tq->columns;
        }
        $q = "SELECT {$columns} ".$q.";";
        return $this->sendQuery($q, $tbname, $options);
    }
    ///<summary>Represente update function</summary>
    ///<param name="tbname"></param>
    ///<param name="entry"></param>
    ///<param name="condition" default="null"></param>
    ///<param name="tabinfo" default="null"></param>
    /**
    * Represente update function
    * @param mixed $tbname
    * @param mixed $entry
    * @param mixed $condition the default value is null
    * @param mixed $tabinfo the default value is null
    */
    public function update($tbname, $entry, $condition=null, $tabinfo=null){
        $this->dieNotConnect();
        $query=IGKSQLQueryUtils::GetUpdateQuery($tbname, $entry, $condition, $tabinfo);
        $s=$this->sendQuery($query, $tbname);
        return $s;
    }
}