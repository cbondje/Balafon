<?php
namespace IGK\IO\File;


class PHPScriptBuilder{
    
    public function __call($name, $arguments)
    {
        $this->$name = $arguments[0];
        return $this;        
    }
    public function render(){
        $o ="";
        $h = "";
        $h = implode("\n", [
            "// @author: ". $this->author,
            "// @file: ".$this->file,
            "// @desc: " .implode("\n//", explode("\n", $this->desc)),
            "// @date: ".date("Ymd H:i:s")
        ])."\n";
        if ($ns = $this->namespace){
            $h.= "namespace ".$ns.";\n\n";
        }
        
        $o .= $this->type ." ".$this->name;
        if ($e = $this->extends){
            $h.= "use ".$e.";\n";
            $o.= " extends ".basename(igk_html_uri($e));
        } 
        if ($e = $this->implements){
            if (!is_array($e)){
                $e = [$e];
            }
            $o.= " implements ".implode(",", $e);
        } 
        $o .= "{\n";

            if ($e = $this->defs){
                $o.= implode("\n", array_map(function($s){ return "\t".$s;} ,explode("\n", $e)))."\n";
            }

        $o .= "}";
        return "<?php\n".$h."\n".$o;
    }
}