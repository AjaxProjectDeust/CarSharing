<?php
require "data/config.php";

try {
    // une creation seulement
    $connection = new PDO("mysql:host=$host", $username, $password, $options); 

    // Injection du SQL
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    
    echo "La base de données et la table ont bien été crées.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}