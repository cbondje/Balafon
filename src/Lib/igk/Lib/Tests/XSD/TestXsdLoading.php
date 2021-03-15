<?php


namespace IGK\Tests;

use IGK\XSD\XsdBuilder;

class ModelBaseTestCase extends BaseTestCase{
    public function test_load_class(){
        $build = new XsdBuilder;
        $this->assertNull($build);
    }
}