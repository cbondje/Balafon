<?php



///<summary>represent uri action exception</summary>
///<remark>raised when can't handle uri. </remark>
/**
* represent uri action exception
*/
class IGKUriActionException extends IGKException{
    private $m_uri;
    ///<summary>Represente __construct function</summary>
    ///<param name="msg"></param>
    ///<param name="uri" default="null"></param>
    ///<param name="code"></param>
    /**
    * Represente __construct function
    * @param mixed $msg
    * @param mixed $uri the default value is null
    * @param mixed $code the default value is 0
    */
    public function __construct($msg, $uri=null, $code=0){
        parent::__construct($msg);
        $this->m_uri=$uri;
    }
    ///<summary>Represente getUri function</summary>
    /**
    * Represente getUri function
    */
    public function getUri(){
        return $this->m_uri;
    }
}