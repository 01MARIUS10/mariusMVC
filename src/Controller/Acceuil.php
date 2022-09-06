<?php
namespace App\Controller;

class Acceuil extends \App\Core\Controller\Controller{

    public function __construct($route){
        $this->title ="Acceuil";
        $this->pageView ="Acceuil";
        $this->render();
    }
}