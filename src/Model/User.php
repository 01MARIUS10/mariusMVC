<?php
namespace ORM;

class User extends \App\Model\Model {
    private $name;
    private $age;
    private $email;
    private $password;

    public function __construct(){
        Parent::__construct();
        $this->table = get_class($this);
    }
}

?>