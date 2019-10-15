<?php

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $birthDate;
    private $rate;
    private $listOfCars;
    private $listOfComments;

    public function __construct($firstName = "Not defined", $lastName = "Not defined", $email = "Not defined", 
        $birthDate = "Not defined", $rate = "Aucune note", $listOfCars = "Pas de voiture", $listOfComments = "Pas de commentaire") {

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->rate = $rate;
        $this->listOfCars = $listOfCars;
        $this->listOfComments = $listOfComments;
    }

    // public function getLastname() {
    //     return $this.lastName;
    // }
    // public function getFirstname() {
    //     return $this->firstName;
    // }
    // public function getEmail() {
    //     return $this->email;
    // }
    // public function getBirthDate() {
    //     return $this->birthDate;
    // }
    // public function getBirthRate() {
    //     return $this->rate;
    // }
    // public function getBirthListOfCars() {
    //     return $this->listOfCars;
    // }
    // public function getBirthListOfComments() {
    //     return $this->listOfComment;
    // }

    /**
     * Methode magique invoquée automatiquement
     * afin de pouvoir accéder aux attributs de la classe privés
     */
    public function __get($arg) {
        return $this->$arg;
    }

    /**
     * Methode magique invoquée automatiquement
     * afin de pouvoir modifier les attributs de la classe privés
     */
    public function __set($arg, $val) {
        return $this->$arg = $val;
    }
}
