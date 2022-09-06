<?php

namespace App\Core\Variable;

class Variable{
    public static $rootLink ;
    public static $server;

    public function __construct(){
        self::$rootLink = dirname(dirname(dirname(dirname(__FILE__))));
        self::$server = "http://localhost:8080";
    }

    public static function Root(){
        return self::$rootLink;
    }
    public static function viewRoot(){
        return self::$rootLink."/src/view";
    }
    public static function serverLink(){
        return self::$server."/";
    } 
    
}