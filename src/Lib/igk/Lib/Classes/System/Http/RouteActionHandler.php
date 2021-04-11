<?php

namespace IGK\System\Http;

use IGK\Models\Users;
use Exception;
use IGK\Controllers\BaseController;
use IGK\System\Exceptions\ArgumentTypeNotValidException;
use IGKException;

/**
 * route action handler
 * @package IGK\System\Http
 */
class RouteActionHandler{
    /**
     * route type
     * @var mixed
     */
    protected $type;
    /**
     * route path
     * @var mixed
     */
    protected $path;
    /**
     * store def access
     * @var mixed
     */
    protected $classBind;

    /**
     * stored expression
     * @var mixed
     */
    protected $m_expressions;
    /**
     * get verbs
     * @var array
     */
    protected $verbs = [];

    /**
     * autorisation string
     * @var string|array
     */
    protected $auth;

    /**
     * get the attached model user
     * @var mixed
     */
    protected $user;
    /**
     * 
     * @param string $path path 
     * @param mixed $handleClass 
     * @param string $verb 
     * @return void 
     */
    public function __construct($path, $handleClass, $verb="GET, POST"){
        if (!is_string($path))
            throw new ArgumentTypeNotValidException("path");
        $this->path = $path;
        $this->classBind = $handleClass;
        $this->verbs = is_string($verb)? array_map("trim", explode(",", $verb)) : 
            (is_array($verb) ? $verb: ['*']);
    }
    public function getVerbs(){
        return $this->verbs;
    }
    /**
     * return the selected user auth
     * @return mixed 
     */
    public function getUserAuth(){
        if ($u = $this->user){
            return $u->{"::auth"};
        }
        return;
    }
    public function setUser($user){
        $this->user = $user;
        return $this;
    }
    public function getUser(){
        return $this->user;
    }
   

    /**
     * retrieve pattern regex expression
     * @return string 
     * @throws Exception 
     */
    protected function getPatternRegex(){
        $croute = "/".ltrim($this->path, "/");
        if (preg_match_all("/(\{\\s*(?P<name>".IGK_IDENTIFIER_PATTERN.")(?P<option>\\*)?\\s*\})/i", $croute, $tab)){
            foreach($tab["name"] as $i){
                $c = trim($i);
                $s = $tab[0][0];
                $opt = igk_getv($tab["option"], 0) == "*";
                if ($g = igk_getv($this->m_expressions, $c)){
                    if ($opt){
                        $g = "(/{$g}(/)?)?";
                        $s = "/".rtrim($s, "/"); 
                    }
                    $croute = str_replace($s, $g, $croute);
                }                 
            } 
        }
        return "#^".$croute."$#";
    }
    public function isAuth(Users $user){
        if ($user && !empty($this->auth)){  
            $r = $user->auth($this->auth);            
            return $r; 
        }
        return true;
    }
    public function match($path, $verb='GET'){
     
        if (!in_array($verb, $this->verbs)){
            igk_ilog("verb not matching ".$verb);
            return false;
        }
        $regex = $this->getPatternRegex();
        return preg_match($regex, "/".ltrim($path, "/"));
    }

    private function addExpression($name, $expression){
        $this->m_expressions[$name] = $expression;
        return $this;
    }
    public function name($name){
        $this->name = $name;
        return $this;
    }
    /**
     * set autorisation key name
     * @param mixed $name 
     * @return void 
     */
    public function auth($name){
        $this->auth = $name;
        return $this;
    }
    public function where($id, $pattern){
        return $this->addExpression($id, $pattern);
    }

    public function process(BaseController $controller, ...$args){
        if (!class_exists($this->classBind)){
            throw new IGKException("Process failed : not class Found :: ".$this->classBind);
        }

        $cl = $this->classBind;
        $cl = new $cl($controller, $this); 
        $name = array_shift($args);
        if (empty($name)){
            $name = "index";
        }
        return $cl->$name(...$args);
    }
    public function setVerb(array $verb){
        $this->verbs = $verb;
        return $this;
    }
   
}