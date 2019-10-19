<?php

class Database {
    const HOST = "localhost";
    const PORT = 3306;
    const DB_NAME = "carsharing";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "";

    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host='.self::HOST.';port='. self::PORT.';dbname='.self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION
            );
        } catch(PDOException $e) {
            echo "Erreur : ".$e->getMessage();
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}