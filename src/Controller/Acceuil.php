<?php
namespace App\Controller;

class Acceuil extends \App\Core\Controller\Controller{

    public function __construct($route){
        $this->title ="Acceuil";
        $this->pageView ="Acceuil";
    }
    public function show(){
        //get all variable to use in 
        //add thst to $this->variable['var_To_Use_in_template']
        $this->render();
    }
}