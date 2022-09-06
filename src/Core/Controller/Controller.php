<?php
namespace App\Core\Controller;

class Controller{
    public $variable;
    public $pageView;

    
    public function render(){
        $this->variable["title"]=$this->title;
        if(isset($this->variable) && is_array($this->variable)){
            extract($this->variable);
        }
        ob_start();
        require \App\Core\Variable\Variable::viewRoot()."/".$this->pageView.".php";
        $content_for_layout = ob_get_clean();
        require \App\Core\Variable\Variable::viewRoot()."/default/default.php";

    }
    public static function error404(){
        require \App\Core\Variable\Variable::viewRoot()."/error.php";
    }
}