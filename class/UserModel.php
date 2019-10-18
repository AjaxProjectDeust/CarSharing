<?php

class UserModel {

    public function insertUser() {
        $pdo = new Database();

        $formValues = [
            "firstname" => $firstName, 
            "lastName" => $lastName, 
            "email" => $email , 
            "birthDate" => $birthDate, 
            "rate" => $rate, 
            "listOfCars" => $listOfCars, 
            "listOfUsers" => $listOfUsers, 
            "date" => $date
        ];

        $sql = "INSERT INTO users (firstName, lastName, email , birthDate, rate, listOfCars, listOfUsers, date) 
        VALUES(:firstName, :lastName, :email , :birthDate, :rate, :listOfCars, :listOfUsers, :date)";
       
       $request = $pdo->prepare($sql);
        
        $ins->execute($formValues); 
    }
}