<?php

class IGKBalafonFrameworkManager{

	var $handleAllAction;
	public function __construct(){
		$this->handleAllAction =1;
	}
	public function install(){
		echo "running install";
	}
	public function test(){
		echo "run test";
	}
	public function __call($name, $args){
		$f = "igk_".$name;		
		if (function_exists($f)){
			igk_wl(call_user_func_array($f, $args));
		}else{
			echo "command [{$name}] not found";
		}		
	}
	public function help(){
		echo "help ";
	}
	public function clear_cache(){
		igk_clear_cache();
	}
}

?>