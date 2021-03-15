<?php


namespace IGK\XSD;

use ArrayAccess;
use Exception; 

/**
 * 
 * @package IGK\XSD
 */
class XsdBuilder extends XsdElement implements ArrayAccess{
  
    const SCHEMA = "http://www.w3.org/2001/XMLSchema";
    const ANY_ATTRIBUTE = -1; //strict any attribute
    const ANY_ATTRIBUTE_LAX = -2; //strict any attribute
    const ANY_ATTRIBUTE_SKIP = -3; //strict any attribute

    public function __construct(){
        $this->m_node = igk_createxmlnode("xs:schema");
        $this->m_node["xmlns:xs"] = self::SCHEMA;
    }    
    /**
     * 
     * @return mixed 
     * @throws Exception 
     */
    public function render(){
        return $this->m_node->render();
    }

    /**
     * add type element
     * @return XsdElementBuilder
     */
    public function addElement($name):XsdElementBuilder{
        $n = $this->m_node->add("xs:element")->setAttribute("name", $name);
        return XsdElementBuilder::Create($n, $this);
    }
    public function addAttribute($name, $type):XsdAttributeBuilder{
        $n = $this->m_node->add("xs:attribute")
        ->setAttribute("name", $name)
        ->setAttribute("type", $type)
        ;
        return XsdAttributeBuilder::Create($n, $this);
    }
    public function addEnumElement($name, $items){
        $e = $this->m_node->add("xs:element")->setAttribute("name", $name);
        $res = $e->add("xs:simpleType")->add("xs:restriction");
        $res->setAttribute("base", XsdTypes::TSTRING);
        foreach($items as $k){
            $res->add("xs:enumeration")->setAttribute("value", $k);
        }
        return $this;
    }
    public function addEnumType($name, $items){
        $e = $this->m_node->add("xs:simpleType")->setAttribute("name", $name);
        $res = $e->add("xs:restriction");
        $res->setAttribute("base", XsdTypes::TSTRING);
        foreach($items as $k){
            $res->add("xs:enumeration")->setAttribute("value", $k);
        }
        return $this;
    }
    public function addPatternElement($name, $pattern){
        $e = $this->m_node->add("xs:element")->setAttribute("name", $name);
        $res = $e->add("xs:simpleType")->add("xs:restriction");
        $res->setAttribute("base", XsdTypes::TSTRING);        
        $res->add("xs:pattern")->setAttribute("value", $pattern);        
        return $this;
    }
    /**
     * 
     * @param mixed $name 
     * @param mixed $type white space type
     * @return $this 
     */
    public function addWhiteSpaceElement($name, $type){
        $e = $this->m_node->add("xs:element")->setAttribute("name", $name);
        $res = $e->add("xs:simpleType")->add("xs:restriction");
        $res->setAttribute("base", XsdTypes::TSTRING);        
        $res->add("xs:whiteSpace")->setAttribute("value", $type);        
        return $this;
    }
    public function addLengthRestrictionElement($name, $minLength, $maxLength){
        $e = $this->m_node->add("xs:element")->setAttribute("name", $name);
        $res = $e->add("xs:simpleType")->add("xs:restriction");
        $res->setAttribute("base", XsdTypes::TSTRING);        
        $res->add("xs:minLength")->setAttribute("value", $minLength);        
        $res->add("xs:maxLength")->setAttribute("value", $maxLength);        
        return $this;
    }

    /**
     * define complex type
     * @param mixed $name 
     * @param mixed|array $sequences 
     * @return XsdBuilder 
     */
    public function addComplexTypeElement($name, $sequences = [], $attributes =null): XsdBuilder{
        $e = $this->m_node->add("xs:complexType")->setAttribute("name", $name);
        $seq = null;
        if ($sequences && count($sequences)){
            $seq = $e->add("xs:sequence");
            foreach($sequences as $k=>$c){
                XsdBuilderUtility::AddSequenceElement($seq, $k, $c);                
            }
        }
        if ($attributes){
            if (!XsdBuilderUtility::BindAnyAttribute($e, $attributes)){                
                foreach($attributes as $k=>$c){
                    XsdBuilderUtility::AddSequenceElement($e, $k, $c, "xs:attribute");
                }
            }
        }
        return $this;
    }
    public function addAttributeOnlyComplexTypeElement($name, $attributes = []): XsdBuilder{
        $e = $this->m_node->add("xs:complexType")->setAttribute("name", $name);
        if ($attributes){
            if (!XsdBuilderUtility::BindAnyAttribute($e, $attributes)){                
                foreach($attributes as $k=>$c){
                    XsdBuilderUtility::AddSequenceElement($e, $k, $c, "xs:attribute");                
                }
            }
        }
        return $this;
    }
}