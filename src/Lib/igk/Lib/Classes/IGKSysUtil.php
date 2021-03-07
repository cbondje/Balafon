<?php

class IGKSysUtil{
    public static function GetConfigDataInfo($dataadapter = IGK_MYSQL_DATAADAPTER){
        $ctrl= igk_app()->getControllerManager()->getControllers();
        $tables = [];
        foreach($ctrl as $v){
            $tables = array_merge($tables, self::GetControllerConfigDataInfo($v, $dataadapter));           
        }
        return $tables;
    }

    public static function GetControllerConfigDataInfo($controller, $dataadapter=IGK_MYSQL_DATAADAPTER){
        $tables =[];
        $v = $controller;
        if($v->getDataAdapterName() == $dataadapter ){
            $b = IGKControllerBase::Invoke($v, "getUseDataSchema");
// 
            if(!$b){  
                $tname=$v->getDataTableName();
                $tinfo=$v->getDataTableInfo();
                if(!empty($tname) && ($tinfo !== null)){
                    if(isset($tables[$tname])){
                        igk_ilog("Table $tname already found. [".$v->Name. "] get from ".$tables[$tname]->ctrl->Name. " no schema");
                        return null;
                    }
                    $tables[$tname]=(object)array("info"=>$tinfo, "ctrl"=>$v, "desc"=>null);                        
                   
                }
            }
            else{
                $tschema=igk_db_load_data_schemas($v->getDataDir()."/".IGK_SCHEMA_FILENAME);
                if($tschema){
                    foreach($tschema as $ck=>$cv){
                        if(isset($tables[$ck])){
                            igk_ilog("Table $ck already found. [".$v->Name. "] get from ".$tables[$ck]->ctrl->Name." with schema");
                            return null;
                        }
                        
                        $cinfo =igk_getv($cv, "ColumnInfo");
                        $desc =igk_getv($cv, "Description");
                        $tables[$ck]=(object)array("info"=>$cinfo, "ctrl"=>$v, "desc"=>$desc);
                        
                    }
                }
            }
        }
        return $tables;
    }
}