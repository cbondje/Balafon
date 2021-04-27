<?php

namespace IGK\System\Database;

use IGKDBQueryDriver;
use IGKSQLDataAdapter;
use IGKSQLDataAdapter as static_adapter;
use IGKSQLQueryUtils;
use IGKString;

///<summary>represent sql default grammar</summary>
/**
 * represent sql default grammar
 * @package IGK\System\Database
 */
class SQLGrammar{
    
    public function add_foreign_key($table, $v, $nk=null){
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $db= $db ?? $adapter->getDbName();
        if (!empty($nk)){
            $nk = "CONSTRAINT '".$nk."'";
        }else {
            $nk= "";
        }
        $query = IGKString::Format("ALTER TABLE {0} ADD {1} FOREIGN KEY ({2}) REFERENCES {3}  ON DELETE RESTRICT ON UPDATE RESTRICT;\n",
            "`{$db}`.`{$table}`", 
            $nk,
            $v->clName, IGKString::Format("`{0}`.`{1}`(`{2}`)",
            $db,
            $v->clLinkType,
            igk_getv($v, "clLinkColumn", IGK_FD_ID)
        ));
        return $query;
    }
    public function add_column($table, $info, $after=null){
        $q = "ALTER TABLE ";
        $q .= "`".$table."` ADD ";
        $q .= $info->clName ." ";

        $q .= rtrim($this->getColumnInfo($info));

        if (!empty($after)){
            $q.= " AFTER `".$after."`";
        }
        return $q;
    }
    public function rm_column($table, $info, $after=null){
        $name= is_object($info)? igk_getv($info, "clName") : $info;
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $q = "ALTER TABLE ";
        $q .= "`".$table."` DROP ";
        $q .= $adapter->escape($name); 
        return $q;
    }
    public function rename_column($table, $column, $new_name){
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $q = "ALTER TABLE ";
        $q .= "`".$table."` RENAME COLUMN ";
        $q .= $adapter->escape($column) ." TO ".$adapter->escape($new_name); 
        return $q;
    }

    public function change_column($table, $info){
        $column = $info->clName;
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $q = "ALTER TABLE ";
        $q .= "`".$table."` CHANGE ";
        $q .= $adapter->escape($column) ." ".$adapter->escape($column) ." ".rtrim($this->getColumnInfo($info));
        return $q;
    }
    /**
     * return exists if a column exists
     * @param mixed $table 
     * @param mixed $column 
     * @return bool
     */
    public function exist_column($table, $column, $db=null){
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $db= $db ?? $adapter->getDbName();
        $r = $adapter->sendQuery($q = "SELECT * FROM information_schema.COLUMNS ".      
        "where TABLE_NAME='$table' and TABLE_SCHEMA='$db' AND COLUMN_NAME='$column'");
        $row = null;
        if ($r){
            if ($r->ResultTypeIsBoolean()){
                return $r->value;  
            }
            $row = $r->getRowAtIndex(0);
        }
        return $row !=null;
    }
    public function remove_foreign($table, $info, $db=null){
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $db= $db ?? $adapter->getDbName();
        $r = $adapter->sendQuery("SELECT * FROM information_schema.TABLE_CONSTRAINTS LEFT JOIN information_schema.INNODB_FOREIGN_COLS on(".
        "CONCAT(CONSTRAINT_SCHEMA,'/',CONSTRAINT_NAME)=ID".
        ") ". 
        "where TABLE_NAME='$table' and CONSTRAINT_SCHEMA='$db' AND FOR_COL_NAME='$info'");

        $columns = [];
        foreach($r->getRows() as $c){
            $columns[$c->CONSTRAINT_SCHEMA."/".$c->CONSTRAINT_NAME] = $c->CONSTRAINT_NAME;
        }
        if ($ck = igk_getv(array_values($columns), 0)){
            $q  = "ALTER TABLE ";
            $q .= "`".$table."` DROP FOREIGN KEY ";
            $q .= $adapter->escape($ck) ." "; 
            return $q;
        }
        return null;
    }
    protected function getColumnInfo($v, $nocomment=false){
        $adapter  = igk_get_data_adapter(IGK_MYSQL_DATAADAPTER);
        $defvalue=  IGKSQLQueryUtils::AllowedDefValue();
        $query = "";
        
        $type=igk_getev(static_adapter::ResolvType($v->clType), "Int");
        if (!$adapter->isTypeSupported($type)){
            $type = IGKSQLQueryUtils::fallbackType($type, $adapter);
        } 
        $query .= igk_db_escape_string($type);
        $s=strtolower($type);
        $number=false;
        if(isset(IGKSQLQueryUtils::$LENGTHDATA[$s])){
            if($v->clTypeLength > 0){
                $number=true;
                $query .= "(".igk_db_escape_string($v->clTypeLength).")";                   
            }
        } else if ($type=="Enum"){
            $query .="(". implode(",", array_map(function($i){
                return "'".igk_db_escape_string($i)."'";
            }, array_filter(explode(",", $v->clEnumValues), function($c){
                return (strlen(trim($c))>0);
            }))).")";
        }
        $query .= " ";

        if ($v->IsUnsigned()){
            $query .= "unsigned ";
        }

        if(!$number){
            if(($v->clNotNull) || ($v->clAutoIncrement))
                $query .= "NOT NULL ";
            else
                $query .= "NULL ";
        }
        else if($v->clNotNull){
            $query .= "NOT NULL ";
        }
        if($v->clAutoIncrement){
            $query .= IGKDBQueryDriver::GetValue("auto_increment_word", $v, $tinf)." ";
            if ($idx=igk_getv($v,"clAutoIncrementStartIndex")){
                $fautoindex = IGKDBQueryDriver::GetValue("auto_increment_word", $v, $tinf)."={$idx} ";
            }
        }
        $tb=true;
        if($v->clDefault || $v->clDefault === '0'){
            $_ktype = strtoupper($type);
            $_def = $r_v = isset($defvalue[$_ktype][$v->clDefault]) ?
            (is_int($defvalue[$_ktype][$v->clDefault])?
            $v->clDefault : $defvalue[$_ktype][$v->clDefault] ):
            "'".igk_db_escape_string($v->clDefault)."'";
            $query .= "DEFAULT {$_def} ";

            if ($r_v && $v->clUpdateFunction){
                $_def = isset($defvalue[$_ktype][$v->clUpdateFunction]) ? $v->clDefault:
                "".igk_db_escape_string($v->clUpdateFunction)."";            
                $query .= " ON UPDATE {$_def}";
            }
        }
        if($v->clDescription && !$nocomment){
            $query .= "COMMENT '".igk_db_escape_string($v->clDescription)."' ";
        }
        return $query;
    }
}