<?php
namespace ORM;

class Message extends \App\Model\Model {
    private $content;
    private $from;
    private $to;

    public function __construct(){
        Parent::__construct();
        $this->table = get_class($this);
    }
}

?>