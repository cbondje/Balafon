<?php
namespace IGK\Models;

///<summary>Extension</summary>
abstract class ModelEntryExtension{
    public static function beginTransaction(ModelBase $model){
        return $model->getDataAdapter()->beginTransaction();
    }
    public static function commit(ModelBase $model){
        return $model->getDataAdapter()->commit();
    }
    public static function rollback(ModelBase $model){
        return $model->getDataAdapter()->rollback();
    }
    public static function select_all(ModelBase $model, $conditions=null, $options=null){ 
        $tab = [];
        $driver = $model->getDataAdapter();   
        $cl = get_class($model);
        foreach($driver->select($model->getTable(), $conditions, $options)->getRows() as $row){
            $c = new $cl($row->toArray());  
            $tab[] = $c;
        }  
        return $tab;
    }
    public static function select_row(ModelBase $model, $conditions, $options=null ){     
        $cl = get_class($model);  
        $r= $model->getDataAdapter()->select($model->getTable(), $conditions, $options);
        if($r && $r->RowCount == 1){
            $g=$r->getRowAtIndex(0);
            $g->{"sys:table"}=$model->getTable(); 
            return new $cl($g->toArray());  
        }
        return null;
    }
    public static function delete(ModelBase $model, $conditions){
        return $model->getDataAdapter()->delete($model->getTable(), $conditions);
    }
    public static function insert(ModelBase $model, $entries){ 
        $ad = $model->getDataAdapter();
        if ( $m =  $ad->insert($model->getTable(), $entries)){
            return $model::select_row([$model->getPrimaryKey()=>$ad->last_id()]);            
        }
        return false;
    }
    public static function last_id(ModelBase $model){
        return $model->getDataAdapter()->last_id();
    }
   
    public static function factory(ModelBase $model){
        // create a factory object
        $c = get_class($model);
        $cl = $model->getFactory();
        if (class_exists($cl)){
            $arg = func_get_args(); 
            return new $cl(...$arg);
        }
        die("factory class not found . ".$cl);

    }
}