<?php


namespace IGK\Tests;

use IGK\XSD\XsdBuilder;

class XsdLoadingTest extends BaseTestCase{
    public function test_load_class(){        
        $this->assertTrue(class_exists(XsdBuilder::class));
    }
    public function test_build_default(){
        $builder = new XsdBuilder;
        $builder->addElement("demo");
        $s = $builder->render();
        $this->expectOutputString('<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema"><xs:element name="demo"></xs:element></xs:schema>');
        echo $s;    
    }
}