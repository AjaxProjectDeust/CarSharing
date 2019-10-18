<?php

class Announcement 
{
    public static $listOfAnnouncements = [];

    private $cityStart;
    private $cityEnd;
    private $dateStart;
    private $dateEnd;
    private $userDriver;
    private $seatNumber;
    private $price;
    private $car;

    private $commentsFromAnnouncement;
    private $commentsFromUsers;

    public function __construct($cityStart = "Pas de ville de départ définie", $cityEnd = "Pas de ville de fin définie", $dateStart = "Pas de date de début", 
        $dateEnd = "Pas de date de fin", $userDriver = "Pas de conducteur", $seatNumber = "Nombre de siège non définit", $price = "Pas définit", $car = "Voiture non définie", 
        $commentsFromAnnouncement = "Aucun", $commentsFromUsers = "Aucun"){
        
        $this->cityStart = $cityStart;
        $this->cityEnd = $cityEnd;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->userDriver = $userDriver;
        $this->seatNumber = $seatNumber;
        $this->price = $price;
        $this->car = $car;

        $this->commentsFromAnnouncement = $commentsFromAnnouncement;
        $this->commentsFromUsers = $commentsFromUsers;

       array_push(self::$listOfAnnouncements, $this);
       $_SESSION["listOfAnnouncements"] = self::$listOfAnnouncements;
    }


    /**
     * Retourne un tableau de tous les attributs de l'objet
     * @return array
     */
    public function getAttributes() {
        return get_object_vars($this);
    }

    public static function showAnnouncementTable() {
        echo "<table id='announcement'>
        <tr>
            <th></th>
            <th>Nom du conducteur</th>
            <th>Ville Départ</th>
            <th>Ville Arrivée</th>
            <th>Date de départ</th>
            <th>Date d'arrivée</th>
            <th>Nombre de sièges</th>
            <th>Prix</th>
            <th>Marque de la Voiture</th>
        </tr>";
        for ($i = 0; $i < count(Announcement::$listOfAnnouncements); $i++ ) {
            echo "<tr>";
                echo "<td>";
                    $iLink = $i + 1;
                    echo "<a href='announce.php?announce=$iLink'>Voir</a>";
                echo "</td>";
                echo "<td>";
                    echo User::$listOfUsers[$i]->getFirstName(). " " . User::$listOfUsers[$i]->getLastName();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getCityStart();
                // echo User::$listOfAnnouncements[$i]->getAttributes()["firstName"];
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getCityEnd();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getDateStart();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getDateEnd();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getSeatNumber();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getPrice();
                echo "</td>";
                echo "<td>";
                    echo Announcement::$listOfAnnouncements[$i]->getMark();
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
    }

    /**
     * Get the value of cityStart
     */ 
    public function getCityStart()
    {
        return $this->cityStart;
    }

    /**
     * Set the value of cityStart
     *
     * @return  self
     */ 
    public function setCityStart($cityStart)
    {
        $this->cityStart = $cityStart;

        return $this;
    }

    /**
     * Get the value of cityEnd
     */ 
    public function getCityEnd()
    {
        return $this->cityEnd;
    }

    /**
     * Set the value of cityEnd
     *
     * @return  self
     */ 
    public function setCityEnd($cityEnd)
    {
        $this->cityEnd = $cityEnd;

        return $this;
    }

    /**
     * Get the value of dateStart
     */ 
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set the value of dateStart
     *
     * @return  self
     */ 
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get the value of dateEnd
     */ 
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set the value of dateEnd
     *
     * @return  self
     */ 
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get the value of userDriver
     */ 
    public function getUserDriver()
    {
        return $this->userDriver;
    }

    /**
     * Set the value of userDriver
     *
     * @return  self
     */ 
    public function setUserDriver($userDriver)
    {
        $this->userDriver = $userDriver;

        return $this;
    }

    /**
     * Get the value of seatNumber
     */ 
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Set the value of seatNumber
     *
     * @return  self
     */ 
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of car
     */ 
    public function getMark()
    {
        return $this->car;
    }

    /**
     * Set the value of car
     *
     * @return  self
     */ 
    public function setMark($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get the value of commentsFromAnnouncement
     */ 
    public function getCommentsFromAnnouncement()
    {
        return $this->commentsFromAnnouncement;
    }

    /**
     * Set the value of commentsFromAnnouncement
     *
     * @return  self
     */ 
    public function setCommentsFromAnnouncement($commentsFromAnnouncement)
    {
        $this->commentsFromAnnouncement = $commentsFromAnnouncement;

        return $this;
    }

    /**
     * Get the value of commentsFromUsers
     */ 
    public function getCommentsFromUsers()
    {
        return $this->commentsFromUsers;
    }

    /**
     * Set the value of commentsFromUsers
     *
     * @return  self
     */ 
    public function setCommentsFromUsers($commentsFromUsers)
    {
        $this->commentsFromUsers = $commentsFromUsers;

        return $this;
    }
}