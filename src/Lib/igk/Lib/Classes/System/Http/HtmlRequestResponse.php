<?php

namespace IGK\System\Http;

class HtmlRequestResponse extends RequestResponse{

    private $response;
    public function __construct($c, $code=200){
        $this->response = $c;
        $this->code = $code;
    } 

    public function render() {
        igk_wl($this->response);
    }

}