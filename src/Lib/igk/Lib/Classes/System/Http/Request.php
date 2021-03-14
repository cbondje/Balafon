<?php

namespace IGK\System\Http;

///<summary>request </summary>
class Request
{
    static $sm_instance;
    private $m_params;

    public function __debugInfo()
    {
        return null;
    }
    /**
     * set the request parameters
     */
    public function setParam($params)
    {
        $this->m_params = $params;
    }
    /**
     * get the set parameters
     */
    public function getParam($id = null, $default = null)
    {
        if ($id !== null) {
            return igk_getv($this->m_params, $id, $default);
        }
        return $this->m_params;
    }

    public static function getInstance()
    {
        if (self::$sm_instance === null)
            self::$sm_instance = new self();
        return self::$sm_instance;
    }
    private function __construct()
    {
    }
    /**
     * get the request value
     * @param mixed $name 
     * @param mixed|null $default 
     * @return mixed 
     */
    public function get($name, $default = null)
    {
        return igk_getr($name, $default);
    }
    /**
     * 
     * @param mixed $type 
     * @return mixed 
     */
    public function method($type)
    {
        return igk_server()->method($type);
    }
    /**
     * get the file
     * @return void 
     */
    public function file($name)
    {
        return igk_getv($_FILES, $name);
    }

    public function view_args()
    {
        return igk_get_view_args();
    }
    public function __toString()
    {
        return json_encode($this);
    }
}
