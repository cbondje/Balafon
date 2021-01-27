<?php

class IGKSystemHelper{
    static $sm_instance;
    private function __construct(){

    }
    public function getInstance(){
        if (self::$sm_instance === null){
            self::$sm_instance = new self();
        }
        return self::$sm_instance;
    }
    ///<summary>Notifify message</summary>
    public function Notify($message, $type="default"){
        if (igk_is_ajx_demand()){
            igk_ajx_toast($message, $type);
        }else {
            igk_notifyctrl()->notify($message, $type);
        }
    }
    ///<summary>exist on ajx deman</summary>
    public function exitOnAJX(){
        if (igk_is_ajx_demand()){
            igk_exit();
        } 
    }
}
