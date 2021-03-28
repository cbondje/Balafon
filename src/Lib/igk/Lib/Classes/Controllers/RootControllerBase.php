<?php

namespace IGK\Controllers;

use IGKObject;

///<summary>represent a root controller entry</summary>
/**
 * represent a root controller entry
 */
abstract class RootControllerBase extends IGKObject{
    public static function __callStatic($name, $arguments)
	{
		$c = igk_getctrl(static::class);
		array_unshift($arguments, $c);
		return ControllerExtension::$name(...$arguments); 
	}
}