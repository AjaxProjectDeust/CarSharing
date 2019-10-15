<?php

class User
{
    public static $listOfUsers = [];

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
            
            var_dump(self::$listOfUsers);
            self->listOfUsers = array_push(self::$listOfUsers, $this);
    }

    /**
     * Retourne un tableau de tous les attributs de l'objet
     */
    public function getAttributes() {
        return get_object_vars($this);
    }

    /**
     * 
     */
    public function getFirstname() {
        return $this->firstName;
    }

    /**
     * 
     */
    public function setFirstname($firstName){
        $this->firstName = $firstName;
    }
    
    /**
     * 
     */
    public function getLastname() {
        return $this->lastName;
    }
    
    /**
     * 
     */
    public function setLastname($lastName){
        $this->lastName = $lastName;
    }
    
    /**
     * 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /**
     * 
     */
    public function getBirthDate() {
        return $this->birthDate;
    }
    
    /**
     * 
     */
    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    /**
     * 
     */
    public function getRate() {
        return $this->rate;
    }
    
    /**
     * 
     */
    public function setRate($rate) {
        $this->rate = $rate;
    }
    
    /**
     * 
     */
    public function getListOfCars() {
        return $this->listOfCars;
    }
    
    /*
    *
    */
    public function setListOfCars($listofCars) {
        $this->listOfCars = $listOfCars;
    }

    /**
     * 
     */
    public function getListOfComments() {
        return $this->listOfComments;
    }
    
    /**
     * 
     */
    public function setListOfComments($listOfComments) {
        $this->listOfComments = $listofComments;
    }
}