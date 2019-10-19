<?php

class AnnouncementController
{
    public function announcementForm(): string {
        $html = '';
        $html .= '
            <h2>Création d\'une annonce</h2>
            <form method="post" action="#">
                <label for="userDriver">Conducteur  : </label>
                <input type="text" name="userDriver" placeholder="Entrez le conducteur"><br>
            
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

    private function announceCreation() {
        $model = new AnnouncementModel();

        // var_dump($_POST);
        if (isset($_POST['lastName']) && isset($_POST['firstName']) && 
            isset($_POST['email']) && isset($_POST['birthDate'])) {

            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $email = $_POST['email'];
            $birthDate = $_POST['birthDate'];

            $isOk = $model->insertUser($lastName, $firstName, $email, $birthDate);
        }
    }

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

    public static function showAnnouncementTableFromDb() {
        // Appel donnée
        $model = new AnnouncementModel();
        $announces = $model->getAnnouncements();

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
        for ($i = 0; $i < count($announces); $i++ ) {

            $announce = $announces[$i];
            array_push(Announcement::$listOfAnnouncements, $announce);

            $_SESSION['listOfAnnouncements'] = Announcement::$listOfAnnouncements;

            var_dump($announce);

            echo "<tr>";
                echo "<td>";
                    $iLink = $i + 1;
                    echo "<a href='announce.php?announce=$iLink'>Voir</a>";
                echo "</td>";
                echo "<td>";
                    echo $announce['date'];
                echo "</td>";
                echo "<td>";
                    echo $announce['userDriver'];
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
                    echo $announce['seatNumber'];
                echo "</td>";
                echo "<td>";
                    echo $announce['price'];
                echo "</td>";
                echo "<td>";
                    echo $announce['car'];
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
    }
}