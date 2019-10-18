<?php

class Database {
    const HOST = "localhost";
    const DB_DBNAME = "covoiture_like";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "";

    public function __construct() {
        try {
            $pdo = new PDO("mysql:host=".self::HOST.";dbname=".self::DB_NAME.",".self::DB_USERNAME.",".DB_PASSWORD); 
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $pdo;
    }

}