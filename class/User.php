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
    
    public function __construct($firstName = "Pas de prénom", $lastName = "Pas de nom", $email = "Pas de mail", 
        $birthDate = "Aucune date de naissance", $rate = "Aucune note", $listOfCars = "Pas de voitures", $listOfComments = "Pas de commentaires") {
            
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthDate = $birthDate;

        (!isset($rate) ? $this->rate = "Aucune note" : $this->rate = $rate );
        $this->listOfCars = $listOfCars;
        $this->listOfComments = $listOfComments;
        
        array_push(self::$listOfUsers, $this);
        $_SESSION['listOfUsers'] = self::$listOfUsers;
    }

    /**
     * Retourne un tableau de tous les attributs de l'objet
     * @return array
     */
    public function getAttributes() {
        return get_object_vars($this);
    }

    /**
     * Affiche le tableau des utilisateurs
     */
    public static function showUserTable() {
        echo "<table id='users'>
        <tr>
          <th></th>
          <th>Utilisateur</th>
          <th>Mail</th>
          <th>Date de naissance</th>
          <th>Note</th>
          <th>Voitures</th>
          <th>Commentaires</th>
        </tr>";
        for ($i = 0; $i < count(User::$listOfUsers); $i++ ) {
            echo "<tr>";
                echo "<td>";
                    $iLink = $i + 1;
                    echo "<a href='users.php?user=$iLink'>Voir</a>";
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getFirstName() . " " . User::$listOfUsers[$i]->getLastName();
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
                echo "<td>";
                    echo User::$listOfUsers[$i]->getListOfCars();
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getListOfComments();
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

   /**
    * Affiche les utilisateurs depuis la base
    */
    public static function showUserTableFromDb() {
        $model = new UserModel();
        $users = $model->getUsers();

        var_dump($users);

        echo "<table id='users'>
        <tr>
          <th></th>
          <th>Utilisateur</th>
          <th>Date de création</th>
          <th>Mail</th>
          <th>Date de naissance</th>
          <th>Note</th>
          <th>Voitures</th>
          <th>Commentaires</th>
        </tr>";
        for ($i = 0; $i < count($users); $i++ ) {
            $user = $users[$i];
            array_push(self::$listOfUsers, $user);

            echo "<tr>";
                echo "<td>";
                    $iLink = $i + 1;
                    echo "<a href='users.php?user=$iLink'>Voir</a>";
                echo "</td>";
                echo "<td>";
                    echo $user['firstName'] . " " . $user['lastName'];
                echo "</td>";
                echo "<td>";
                    echo $user['date'];
                echo "</td>";
                echo "<td>";
                    echo $user['email'];
                echo "</td>";
                echo "<td>";
                    echo $user['birthDate'];
                echo "</td>";
                echo "<td>";
                    echo $user['rate'];
                echo "</td>";
                echo "<td>";
                    echo $user['listOfCars'];
                echo "</td>";
                echo "<td>";
                    echo $user['listOfComments'];
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";

        $_SESSION['listOfUsers'] = self::$listOfUsers;
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