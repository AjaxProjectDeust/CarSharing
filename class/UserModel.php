<?php

class UserModel {

    public function insertUser($firstName, $lastName, $email, $birthDate) {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        $formValues = [
            "firstName" => $firstName, 
            "lastName" => $lastName, 
            "email" => $email , 
            "birthDate" => $birthDate,
            "rate" => "Aucune note",
            "listOfCars" => "Aucune Voiture",
            "listOfComments" => "Aucun commentaire",
            "date" => date('Y/m/d')
        ];

        $sql = "INSERT INTO users (firstName, lastName, email , birthDate, rate, listOfCars, listOfComments, date) 
            VALUES(:firstName, :lastName, :email , :birthDate, , :rate, :listOfCars, :listOfComments, :date )";
       
        $request = $pdo->prepare($sql);
        $request->execute($formValues);

        header('Location: index.php');
        exit();
    }

    public function getUsers() {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        $sql = "SELECT * FROM users";
        $request = $pdo->prepare($sql);
        $request->execute();

        /* Récupération de toutes les lignes d'un jeu de résultats */
        print("Récupération de toutes les lignes d'un jeu de résultats :\n");
        $results = $request->fetchAll();
        
        return $results;
    }
}