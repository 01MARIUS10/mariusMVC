<?php
namespace App\Core\Page;

class Page{
    public $title = "My Website";

    public function __construct($title){
        if($title)
            $this->title = ucfirst($title);
    }
    
}