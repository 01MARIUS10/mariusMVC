<?php
namespace App\Controller;

class ConditionAd extends \App\Core\Controller\Controller{
    
    public function __construct($route){
        $this->title="Condition d'admission";
        $this->pageView = "ConditionAd";
        $this->render();
        
    }
}