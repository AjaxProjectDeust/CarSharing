<?php

class AnnouncementController
{
    public function announcementForm(): string {
        
        // <label for="userDriver">Conducteur  : </label>
        // <input type="text" name="userDriver" placeholder="Entrez le conducteur"><br>
    
        $html = '';
        $html .= '
            <h2>Création d\'une annonce</h2>
            <form method="post" action="#">
            Choississez un utilisateur :
                <select name="userDriver">
                    <option value="0">-</option>
                        '.$this->getUsersForSelect().'
                </select><br>
                <label for="cityStart">Ville de départ  : </label>
                <input type="text" name="cityStart" placeholder="Ville de départ"><br>
                
                <label for="cityend">Ville d\'arrivée  : </label>
                <input type="text" name="cityEnd" placeholder="Ville d\'arrivée"><br>

                <label for="dateStart">Date de départ : </label>
                <input type="date" name="dateStart" placeholder="Date de départ"><br>
                
                <label for="dateEnd">Date de fin : </label>
                <input type="date" name="dateEnd" placeholder="Date de fin"><br>
                
                <label for="car">Votre voiture : </label>
                <input type="text" name="car" placeholder="La marque"><br>

                <label for="seatNumber">Nombre de sièges : </label>
                <input type="text" name="seatNumber" placeholder="Entrez le nombre de sièges"><br>
                
                <label for="price">Prix : </label>
                <input type="text" name="price" placeholder="Le prix"><br>

                <input type="submit" value="Création">
                </form>
                <br />';

        $this->announceCreation();

        return $html;
    }

    /**
     * Permet la création d'une annonce à la réception des données
     * envoyées par le formulaire
     */
    private function announceCreation() {
        $model = new AnnouncementModel();

        if (isset($_POST['userDriver']) && isset($_POST['cityStart']) && isset($_POST['cityEnd']) && 
            isset($_POST['dateStart']) && isset($_POST['cityEnd']) && 
            isset($_POST['dateStart']) && isset($_POST['dateEnd']) &&
            isset($_POST['car']) && isset($_POST['seatNumber']) &&
            isset($_POST['price'])) {

                $userDriver = $_POST['userDriver'];
                $cityStart = $_POST['cityStart'];
                $cityEnd = $_POST['cityEnd'];
                $dateStart = $_POST['dateStart'];
                $dateEnd = $_POST['dateEnd'];
                $car = $_POST['car'];
                $seatNumber = $_POST['seatNumber'];
                $price = $_POST['price'];

            $isOk = $model->insertAnnouncement($userDriver, $cityStart, $cityEnd, $dateStart, $dateEnd, $car,$seatNumber, $price);
        }
    }

    private function getUsersForSelect() {
        $users = $_SESSION["listOfUsers"];
        $str = "";

        for($i = 0; $i < count($users); $i++) {
            $firstname = $users[$i]["firstName"]; // utilisateurs de la bdd stockés en session
            $lastName = $users[$i]["lastName"]; 
            $str .= "<option value='$firstname $lastName'>$firstname</option>";
        }

        return $str;
        // $selected = ($options == $selection) ? "selected" : "";
    }

    /**
     * Page index : Voir les annonces de la classe
     */
     public static function showAnnouncementTable() {
        echo "<table id='announcement'>
        <tr>
            <th></th>
            <th>Date de création de l'annonce</th>
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

    /*
    * Page index : Voir les annonces de la BDD
    */
    public static function showAnnouncementTableFromDb() {
        // Appel donnée
        $model = new AnnouncementModel();
        $announces = $model->getAnnouncements();
        $listOfAnnouncements = Announcement::$listOfAnnouncements;
        $listOfUsers = User::$listOfUsers;

        echo "<table id='announcement'>
        <tr>
            <th></th>
            <th>Date de création de l'annonce</th>
            <th>Nom du conducteur</th>
            <th>Ville Départ</th>
            <th>Ville Arrivée</th>
            <th>Date de départ</th>
            <th>Date d'arrivée</th>
            <th>Prix</th>
        </tr>";

        for ($i = 0; $i < count($announces); $i++ ) {
            $announce = $announces[$i];
            array_push($listOfAnnouncements, $announce);

            // Ajout en session pour réutilisation
            $_SESSION['listOfAnnouncements'] = $listOfAnnouncements;

            echo "<tr>";
                echo "<td>";
                    $linkAnnounce = $i + 1;
                    echo "<a href='announce.php?announce=$linkAnnounce'>Voir</a>";
                echo "</td>";
                echo "<td>";
                    echo $announce['date'];
                echo "</td>";
                echo "<td>";
                    for ($j = 0; $j < count($listOfUsers); $j++ ) {
                        $strUsers = $listOfUsers[$j]['firstName'] ." " . $listOfUsers[$j]['lastName'];

                        if($strUsers === $announce['userDriver']) {
                            $linkUser = $listOfUsers[$j]['id'] ;
                            // echo "<a href='users.php'>".User::$listOfUsers[$i]->getFirstName(). " " . User::$listOfUsers[$i]->getLastName()."</a>";
                            echo "<a href='users.php?user=$linkUser'>".$announce['userDriver']."</a>";
                        }
                    }
                echo "</td>";
                echo "<td>";
                    echo $announce['cityStart'];
                echo "</td>";
                echo "<td>";
                    echo $announce['cityEnd'];
                echo "</td>";
                echo "<td>";
                    echo $announce['dateStart'];
                echo "</td>";
                echo "<td>";
                    echo $announce['dateEnd'];
                echo "</td>";
                echo "<td>";
                    echo $announce['price'];
                echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>"; 
    }

    private function bite() {
        // comparer nom puis chosir par id
    }
}