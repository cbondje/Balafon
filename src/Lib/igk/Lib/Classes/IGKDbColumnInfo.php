<?php


///<summary>Represente class: IGKDbColumnInfo</summary>
/**
* Represente IGKDbColumnInfo class
*/
final class IGKDbColumnInfo extends IGKObject {
    var $clAutoIncrement;
	var $clAutoIncrementStartIndex;
    var $clColumnMemberIndex;
    var $clDefault;
    var $clDescription;
    var $clFormRefKey;
    var $clInputType;
    var $clInsertFunction;
    var $clIsIndex;
    var $clIsNotInQueryInsert;
    var $clIsPrimary;
    var $clIsUnique;
    var $clIsUniqueColumnMember;
    var $clLinkColumn; // link column name
    var $clLinkTableDisplay;
    var $clLinkType;
    var $clName;
    var $clNotNull;
    var $clPattern;
    var $clType;
    var $clTypeLength;
    var $clUpdateFunction;
    ///<summary>Represente __construct function</summary>
    ///<param name="array" default="null"></param>
    /**
    * Represente __construct function
    * @param mixed $array the default value is null
    */
    public function __construct($array=null){
        $this->clType="Int";
        $this->clTypeLength=11;
        $this->clNotNull=false;
        $this->clInputType="text";
        if(is_array($array)){
            $t=get_class_vars(get_class($this));
            foreach($array as $k=>$v){
                if(!array_key_exists($k, $t)){
                    continue;
                }
                if(preg_match("/^(false|true)$/i", $v)){
                    $v=igk_getbool($v);
                }
                $this->$k=$v;
            }
        }
        if(!igk_db_is_typelength($this->clType))
            $this->clTypeLength=null;
        if(!$this->clNotNull && empty($this->clDefault) && preg_match("/(int|float)/i", $this->clType)){
            $this->clDefault=0;
        }
    }
    ///<summary>Represente __get function</summary>
    ///<param name="key"></param>
    /**
    * Represente __get function
    * @param mixed $key
    */
    public function __get($key){
        $d=get_class_vars(get_class($this));
        if(array_key_exists($key, $d)){
            return $this->$key;
        }
        igk_die("__get Not implements : ".$key. " ".get_class($this));
    }
    ///<summary>Represente __set function</summary>
    ///<param name="key"></param>
    ///<param name="value"></param>
    /**
    * Represente __set function
    * @param mixed $key
    * @param mixed $value
    */
    public function __set($key, $value){
        igk_die("variable : [". $key. "] Not Implements");
    }
    ///<summary>Represente __toString function</summary>
    /**
    * Represente __toString function
    */
    public function __toString(){
        return "IGKdbColumnInfo[".$this->clName."]";
    }
    ///get association info array
    /**
    */
    public static function AssocInfo($array, $tablename=null){
        if(!is_array($array))
            igk_die("array is not an array");
        $t=array();
        foreach($array as $k=>$v){
            if(is_object($v)){
                if($k !== $v->clName){
                    $t[$v->clName]=$v;
                }
                else{
                    $t[$k]=$v;
                }
            }
            else{
                igk_debug_wln("v is not an object : ".igk_count($array));
            }
        }
        return $t;
    }
    ///<summary>Represente GetColumnInfo function</summary>
    /**
    * Represente GetColumnInfo function
    */
    public static function GetColumnInfo(){
        return get_class_vars("IGKDbColumnInfo");
    }
    ///<summary>Represente NewEntryInfo function</summary>
    /**
    * Represente NewEntryInfo function
    */
    public static function NewEntryInfo(){
        return new IGKDbColumnInfo(array(
            IGK_FD_NAME=>IGK_FD_ID,
            IGK_FD_TYPE=>"Int",
            "clAutoIncrement"=>true
        ));
    }

    public function IsUnsigned(){
        return preg_match("/u((big)?int)/i", $this->clType);
    }
}