<?php

namespace IGK\Tests;

use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase{
    // call before all launching test - and output is consider in return of the output string test.
    protected function setUp():void{ 
    }
    public static function CreateController($classname){
        if (class_exists($classname) && is_subclass_of($classname , \IGKControllerBase::class)){
                $o = new $classname();
            return $o;
        }
        throw new \Exception("Class not found");
    }
}