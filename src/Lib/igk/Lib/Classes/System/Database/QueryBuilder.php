<?php
namespace IGK\System\Database;

class QueryBuilder{
    
    /**
     * help left join
     * @param mixed $condition 
     * @return array 
     */
    public static function LeftJoin($condition){
        return ["type"=>QueryBuilderConstant::LeftJoin, $condition];
    }
    public static function InnerJoin($condition){
        return ["type"=>QueryBuilderConstant::InnerJoin, $condition];
    }
}