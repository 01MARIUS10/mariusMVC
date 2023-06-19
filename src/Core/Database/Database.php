<?php
namespace App\Database;

class Database{
    private $db;
    public function __construct(){
        $DB_DNS=DATABASE_TYPE.':host='.DATABASE_HOST.';dbname='.DATABASE_NAME;
        $option=[
            // PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
            // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // PDO::ATTR_EMULATE_PREPARES=>false
        ];
        global $DB_DNS;
        global $option;
        if(!$this->db){
            $this->db = new \PDO($DB_DNS,DATABASE_USER,DATABASE_PASSWORD,$option);
        }
    }
    public  function getPDO(): \PDO{
        return $this->db;
    }

};

