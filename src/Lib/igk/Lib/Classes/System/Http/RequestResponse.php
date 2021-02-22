<?php


namespace IGK\System\Http;

abstract class RequestResponse{
 
    var $code;
    var $message;

    protected function getStatus($code){
        return igk_getv(
            [
                "404"=>"Page Not found", 
            ],
            $code
        );
    }
}