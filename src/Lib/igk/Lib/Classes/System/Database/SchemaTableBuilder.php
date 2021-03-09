<?php
namespace IGK\System\Database;

use IGKDbColumnInfo;

/**
 * schema table builder
 * @package IGK\System\Database
 */
class SchemaTableBuilder{
    private $_output;
    private $_schema;

    /**
     * represent schema table builder
     * @param mixed $node 
     * @param mixed $schema 
     * @return SchemaTableBuilder 
     */
    public static function Create($node, $schema){
        $c = new SchemaTableBuilder();
        $c->_output = $node;
        $c->_schema = $schema;
        return $c;
    }
    public function columnAttributes($attributes){
        $c = new IGKDbColumnInfo($attributes);
        $m = $this->_output->add("Column");
        foreach($c as $k=>$v){
            $m[$k] = $v;
        }
        return $m;
    }
}