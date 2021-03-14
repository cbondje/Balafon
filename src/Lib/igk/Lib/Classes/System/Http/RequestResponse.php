<?php


namespace IGK\System\Http;

abstract class RequestResponse{
 
    var $code;
    var $headers;
    var $message;

    protected function getStatus($code){
        return igk_getv(
            [
                "404"=>"Page Not found", 
            ],
            $code
        );
    }
    /**
     * output the current response
     * @return void 
     */
    public function output(){
        igk_set_header($this->code, $this->getStatus($this->code), $this->headers); // "testing base", $headers);
        igk_wl($this->render());
        igk_exit();
    }
    abstract function render();
}