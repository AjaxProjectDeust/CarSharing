<?php

class AnnouncementModel {

    public function insertUser($firstName, $lastName, $email, $birthDate) {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        // Pour pouvoir insérer dans la bdd
        $birthDate = date('Y-m-d', strtotime($birthDate));

        $formValues = [
            "firstName" => $firstName, 
            "lastName" => $lastName, 
            "email" => $email , 
            "birthDate" => $birthDate,
            "rate" => 0,
            "listOfCars" => "Aucune Voiture",
            "listOfComments" => "Aucun commentaire",
            "date" => date('Y-m-d')
        ];

        $sql = "INSERT INTO users (firstName, lastName, email, birthDate, rate, listOfCars, listOfComments, date)
        VALUES(:firstName, :lastName, :email , :birthDate, :rate, :listOfCars, :listOfComments, :date)";
        
        $request = $pdo->prepare($sql);
        if ($request) {
            $request->execute($formValues);

            $_SESSION["userOk"] = "Utilisateur inséré";

            header('Location: index.php');
            exit();

        } else {
            echo "<br>Error: " . $sql . "<br>";
        }
    }

    public function getAnnouncements() {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        $sql = "SELECT * FROM announcements";
        $request = $pdo->prepare($sql);
        $request->execute();

        $results = $request->fetchAll();
        
        return $results;
    }
}