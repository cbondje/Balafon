<?php
namespace IGK\XSD;
abstract class XsdBuilderUtility{
    public static function BindAnyAttribute($node, $attributes){
        if (is_integer($attributes)){            
            $type = "";
            switch($attributes){                
                    case XsdBuilder::ANY_ATTRIBUTE:
                        break;
                    case XsdBuilder::ANY_ATTRIBUTE_LAX:
                        $type ="lax";
                        break;
                    case XsdBuilder::ANY_ATTRIBUTE_SKIP:
                        $type ="skip";
                        break;                 
                    default:
                         throw new XsdBuilderException("attribute value not allowed");
            }
            $node->add("xs:anyAttribute")->setAttribute("processContents", $type);
            return true;
        }
        return false;
    }
    public static function AddSequenceElement($node, $name, $value,$tag="xs:element"){
        $e = $node->add($tag);
        $e->setAttribute("name", $name); 
        if (is_array($value)){
            $o = igk_createobj_filter($value, ["type"=>XsdTypes::TSTRING, "maxOccurs"=>null,
             "minOccurs"=>null,
             "require"=>null,
             "default"=>null]);
            $e->setAttribute("type",$o->type);
            if ($o->maxOccurs !==null){
                $e->setAttribute("maxOccurs", $o->maxOccurs);
            }
            if ($o->minOccurs!==null){
                $e->setAttribute("minOccurs", $o->minOccurs);
            }
            if ($o->require!==null){
                $e->setAttribute("use", "required");
            }
            if ($o->default!==null){
                $e->setAttribute("default", $o->default);
            }
        } else{
            $e->setAttribute("type", $value);
        }        
    }
}