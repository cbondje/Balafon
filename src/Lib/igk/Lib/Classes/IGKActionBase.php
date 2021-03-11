<?php



///<summary>Represente view's action definition</summary>
/**
* Represente view's action definition
*/
abstract class IGKActionBase{
    protected $ctrl;
    protected $context;
	var $handleAllAction;
    ///<summary>Represente Initialize function</summary>
    ///<param name="ctrl"></param>
    /**
    * Represente Initialize function
    * @param mixed $ctrl
    */
    public function Initialize($ctrl){
        $this->ctrl=$ctrl;
        return $this;
    }
	///<summary>for action return the current user id</summary>
    /**
     * 
     * @return mixed 
     * @throws Exception 
     */
	public function getUserId(){
		return igk_sys_current_user_id();
    }
    /**
     * 
     * @param mixed $ctrl 
     * @param mixed|null $context 
     * @return object 
     * @throws Exception 
     */
    public static function Init($ctrl, $context=null){
        $cl = static::class;
        if ($cl == __CLASS__){
            igk_die("Operation not allowed");
        } 
        $o = new $cl();
        $o->ctrl = $ctrl; 
        $o->context = $context;
        return $o;
    }
    public static function Handle($fname, $actions, $params, $exit=1, $flag=0){
        return igk_view_handle_actions($fname, $actions, $params, $exit, $flag);
    }
}
