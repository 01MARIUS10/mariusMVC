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
        $Webroute =  \App\_WebRoute\WebRoute::webroutes();
        foreach($Webroute as $route){
            $this->checkingRoute($route['methode'],$route['url'],$route['controller'],$route['action']);
        }
        $this->defaultRoute();
    }

    public function checkingRoute($meth,$url,$controller,$action=false){
        if($this->router->url === $url && $this->router->method===$meth && !$this->isLoading){
            $this->isLoading = true;
            $controller = '\App\Controller\\'.$controller;
            $controllerObj = new $controller($this->router);
            if(!$action){
                $controllerObj->show($this->router->request);
            }
            $controllerObj->$action($this->router->request);
            // call_user_func($controllerObj->$action,$this->router->request);
        }
    }
    
    public function defaultRoute(){
        if(!$this->isLoading){
            return \App\Core\Controller\Controller::error404();
        }
    }
}