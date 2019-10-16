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

    public function __construct($firstName = "Pas définit", $lastName = "Pas définit", $email = "Pas définit", 
        $birthDate = "Pas définit", $rate = "Aucune note", $listOfCars = "Pas de voiture", $listOfComments = "Pas de commentaire") {

            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->birthDate = $birthDate;
            $this->rate = $rate;
            $this->listOfCars = $listOfCars;
            $this->listOfComments = $listOfComments;
            
            array_push(self::$listOfUsers, $this);
            // var_dump(self::$listOfUsers);
    }

    /**
     * Retourne un tableau de tous les attributs de l'objet
     * @return array
     */
    public function getAttributes() {
        return get_object_vars($this);
    }

    /**
     * Affiche le tableau des
     */
    public static function showUserForm() {
        echo "<table id='users'>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Date de naissance</th>
          <th>Notes</th>
        </tr>";
        for ($i = 0; $i < count(User::$listOfUsers); $i++ ) {
            echo "<tr>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getFirstName();
                    // echo User::$listOfUsers[$i]->getAttributes()["firstName"];
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getLastName();
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getEmail();
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getBirthDate();
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getRate();
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
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