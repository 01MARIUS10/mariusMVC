<?php
namespace App\Core\User;

class User{
    public static $admin;

    public function __construct(){
        self::$admin = false;
    }
}

?>