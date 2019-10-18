<?php

class Database {
    const HOST = "localhost";
    const PORT = 3306;
    const DB_NAME = "carsharing";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "";

    public $PDO;

    public function __construct() {
        
        try {
            $this->PDO = new PDO('mysql:host='.self::HOST.';port='. self::PORT.';dbname='.self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $this->PDO;
    }
}