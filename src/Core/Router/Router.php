<?php 
namespace App\Core\Router;

class Router{
    public $url;
    public $method;
    public $request;

    public function __construct(){
        $url = $_SERVER["REQUEST_URI"] ;
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->url=trim($url,'/');
        $this->setRequest($this->method,$this->url);
    }
    public function setRequest($method,$string){
        $this->url = $string;
        $this->method = $method;
        $tab=explode("/",$string);
        if($tab[0]==="admin"){
            \App\Core\User\User::$admin = true;
            $this->request["one"] = isset($tab[1])? $tab[1]:0;
            $this->request["two"] = isset($tab[2])? $tab[2]:0;
            $this->request["tree"] = isset($tab[3])? array_slice($tab,3):0;
            
        }
        else{
           \App\Core\User\User::$admin = false;
           $this->request["one"] = isset($tab[0])? $tab[0]:0;
           $this->request["two"] = isset($tab[1])? $tab[1]:0;
           $this->request["tree"] = isset($tab[2])? array_slice($tab,2):0;
        }
    }
    static function routerLink($string){
        if(\App\Core\User\User::$admin===true){
            return "href= ".\App\Core\Variable\Variable::serverLink()."admin/".$string;
        }
        return "href= ".\App\Core\Variable\Variable::serverLink().$string;
    }
    public function exist($var){
        return isset($var)? $var:0;
    }
};