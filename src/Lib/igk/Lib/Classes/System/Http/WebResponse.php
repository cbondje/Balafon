<?php




namespace IGK\System\Http;

/**
 * represent a web rendering result
 * @package IGK\System\Http
 */
class WebResponse extends RequestResponse{
    private $node;

    public $headers = [
        "Content-Type: text/html"
    ];

    public function __construct($node){ 
        $this->node = $node;
    }
    public function render() { 
        $this->node->renderAJX();
    }
}