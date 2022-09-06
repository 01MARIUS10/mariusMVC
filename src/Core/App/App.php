<?php 
namespace App\Core\App;

class App{
    public $variable;
    public $user;
    public $router;
    public $page;

    public function __construct(){
        $this->variable = new \App\Core\Variable\Variable();
        $this->user = new \App\Core\User\User();
        $this->router = new \App\Core\Router\Router();
        $this->page = new \App\Core\Page\Page($this->router->request['one']);
        
    }
}