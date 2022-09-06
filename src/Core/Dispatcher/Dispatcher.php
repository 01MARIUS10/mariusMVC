<?php
namespace App\Core\Dispatcher;


class Dispatcher{
    public $pageController;
    public $model;
    public $param;
    public $router;
    public $isLoading;
    
    public function __construct($route){
        $this->router = $route;
        $this->loadController();
    }

    public function loadController(){
        $this->isLoading = false;
        $this->checkingRoute("GET","","Acceuil");
        $this->checkingRoute("GET","acceuil","Acceuil");
        $this->checkingRoute("GET","formation","Formation");
        $this->checkingRoute("GET","condition_admission","ConditionAd");
        $this->defaultRoute();
    }

    public function checkingRoute($meth,$url,$controller){
        if($this->router->url === $url && $this->router->method===$meth && !$this->isLoading){
            $this->isLoading = true;
            return new ("\App\Controller\\".$controller)($this->router);
        }
    }
    
    public function defaultRoute(){
        if(!$this->isLoading){
            return \App\Core\Controller\Controller::error404();
        }
    }
}