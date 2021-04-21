<?php
namespace IGK\System\Database;

use IGKDbSchemas;

class SchemaBuilder{
    private $_output;
    public function __construct(){
        $this->_output = igk_createxmlnode("data-schemas");
    }
    public function render(){
        return $this->_output->render();
    }
    public function createTable(string $table, $desc=null){
        $n = $this->_output->add(IGKDbSchemas::DATA_DEFINITION);
        $n["TableName"] = $table;
        $n["Description"] = $desc;
        return SchemaTableBuilder::Create($n, $this);
    }
}