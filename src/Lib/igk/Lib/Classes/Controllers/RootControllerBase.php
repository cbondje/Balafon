<?php

namespace IGK\Controllers;

use Closure;
use IGKObject;
use ReflectionFunction;

///<summary>represent a root controller entry</summary>
/**
 * represent a root controller entry
 */
abstract class RootControllerBase extends IGKObject{
	static $macros;

    public static function __callStatic($name, $arguments)
	{
		if (self::$macros===null){
			self::$macros = [
				"macrosKeys"=>function(){
					return array_keys(self::$macros);
				},
				"initDb"=>function(RootControllerBase $controller){
					return include(IGK_LIB_DIR."/Inc/igk_db_ctrl_initdb.pinc"); 
				},
				"resetDb"=>function(RootControllerBase $controller, $navigate=true){
					return include(IGK_LIB_DIR."/Inc/igk_db_ctrl_resetdb.pinc");
				}
			];
		}
		$c = igk_getctrl(static::class);
		
		if (isset(self::$macros[$name])){
			$fc = Closure::fromCallable(self::$macros[$name]);
			$fc = $fc->bindTo(null, static::class);
			$ref = (new ReflectionFunction($fc));		
			if (($ref->getNumberOfParameters()>0) && ($t = $ref->getParameters()[0]->getType()) ){
				if (($t == self::class) || is_subclass_of($t->getName(), self::class)){
					array_unshift($arguments, $c);
				}
			}
			return $fc(...$arguments);
		} 
		array_unshift($arguments, $c); 
		return ControllerExtension::$name(...$arguments); 
	}
}