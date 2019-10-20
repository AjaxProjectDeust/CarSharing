<?php

class CarModel
{
   
    public function insertCar($user, $mark, $modelOfCar, $color ,$nbOfSeats) {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        $formValues = [
            "userProperty" => $user, 
            "mark" => $mark, 
            "modelOfCar" => $modelOfCar,
            "color" => $color,
            "nbOfSeats" => $nbOfSeats
        ];
        
        $sql = "INSERT INTO cars (userProperty, mark, model, color, nbOfSeats)
        VALUES(:userProperty, :mark, :modelOfCar, :color, :nbOfSeats)";
        
        $request = $pdo->prepare($sql);
        if ($request) {
            $request->execute($formValues);

            $_SESSION["carOk"] = "Voiture crée";

            header('Location: index.php');
            exit();
        }
    }
}