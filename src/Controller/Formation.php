<?php
namespace App\Controller;

class Formation extends \App\Core\Controller\Controller{
    
    public function __construct($route){
        $this->title ="Formation";
         $this->pageView ="Formation";
        $this->render();
    }
}