<?php

namespace IGK\XSD;

use ArrayAccess;
use IGKXmlNode;

class XsdElementBuilder extends XsdElement 
{ 
    private $m_builder;
    private $_defining;
    private function __construct()
    {
    }
    
    /**
     * @param IGKXmlNode $node 
     * @param XsdBuilder $builder 
     * @return XsdElementBuilder 
     */
    public static function Create(IGKXmlNode $node, XsdBuilder $builder)
    {
        $n = new XsdElementBuilder;
        $n->m_node = $node;
        $n->m_builder = $builder;
        return $n;
    }

    public function setDefault($defaultvalue){
        if ($this->_defining) {
            throw new XsdBuilderException("type already defined");
        }
        if ($defaultvalue){

            $this->_defining = true;
            $this->m_node["default"] = $defaultvalue;
        }
        return $this;
    }
    public function setFixed($defaultvalue){
        if ($this->_defining) {
            throw new XsdBuilderException("type already defined");
        }
        if ($defaultvalue){
            $this->_defining = true;
            $this->m_node["fixed"] = $defaultvalue;
        }
        return $this;
    }
    public function addComplexType(array $defs, $attributes=null)
    {
        if ($this->_defining) {
            throw new XsdBuilderException("type already defined");
        }

        $this->_defining = true;
        $b = $this->m_node->add("xs:complexType");
        if ($defs && (count($defs) > 0)) {
            $s = $b->add("xs:sequence");
            foreach ($defs as $k => $v) {
                XsdBuilderUtility::AddSequenceElement($s, $k, $v);              
            }
        }
        if ($attributes && count($attributes)){
            // $seq = $e->add("xs:sequence");
            foreach($attributes as $k=>$c){
                XsdBuilderUtility::AddSequenceElement($b, $k, $c, "xs:attribute");                
            }
        }
    }
}
