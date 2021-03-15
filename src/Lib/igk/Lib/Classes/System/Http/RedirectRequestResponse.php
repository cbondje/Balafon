<?php

namespace IGK\System\Http;

class RedirectRequestResponse extends RequestResponse{

    public function __construct($uri)
    {
        $this->code = 301;
        $this->uri = $uri;
    }
    public function render() { 
        $cp = get_called_class();
        if ($cp === __CLASS__){
            igk_navto($this->uri);
        } 
    }

}