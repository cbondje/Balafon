<?php
namespace IGK\Models;

///<summary>Extension</summary>
abstract class ModelEntryExtension{
    public static function select_all(ModelBase $model){ 
        $tab = [];
        $driver = $model->getDataAdapter();   
        foreach($driver->select($model->getTable())->getRows() as $row){
            $c = $model::create($row->toArray());  
            $tab[] = $c;
        }  
        return $tab;
    }
    public static function delete(ModelBase $model, $conditions){
        return $model->getDataAdapter()->delete($model->getTable(), $conditions);
    }
    public static function insert(ModelBase $model, $entries){
        $ad = $model->getDataAdapter();
        if ( $m =  $ad->insert($model->getTable(), $entries)){
            return $model::create($model::select_row([$model->getPrimaryKey()=>$ad->last_id()])->toArray());            
        }
        return false;
    }
    public static function select_row(ModelBase $model, $conditions ){
        $r= $model->getDataAdapter()->select($model->getTable(), $conditions);
        if($r && $r->RowCount == 1){
            $g=$r->getRowAtIndex(0);
            $g->{"sys:table"}=$model->getTable();
            return $g;
        }
        return null;
    }
}