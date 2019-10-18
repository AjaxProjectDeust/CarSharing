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
        ];

        $sql = "INSERT INTO users (firstName, lastName, email , birthDate) 
            VALUES(:firstName, :lastName, :email , :birthDate)";
       
        $request = $pdo->prepare($sql);
        $request->execute($formValues); 


    }
}