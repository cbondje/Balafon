<?php

namespace IGK\System\IO;


class MimeType{
    public static function FromExtension($ext){
        $mime = igk_getv(igk_header_mime(),$ext, "text/plain");
        return $mime;
    }
}