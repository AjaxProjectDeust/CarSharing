<?php

class ReservationController
{
    public function reservationForm() {
        $html = '';
        $html .= '
            <h2>Création d\'une réservation</h2>
            <form method="post" action="#">
                <label for="date">Date de réservation : </label>
                <input type="date" name="date"><br>
                Choississez un utilisateur :
                <select name="userDriver">
                    <option value="0">-</option>
                        '.$this->getUsersForSelect().'
                </select><br>
                
                Choississez une annonce :
                <select name="announce">
                    <option value="0">-</option>
                        '.$this->getAnnounceForSelect().'
                </select><br>
                
                <input type="submit" value="Choisir">
                </form>
                <br />';

        $this->reservationCreation();

        return $html;
    }

    private function reservationCreation() {
        $model = new ReservationModel();
        
        if (isset($_POST['date']) && isset($_POST['userDriver']) && isset($_POST['announce'])) {

                $date = $_POST['date'];
                $user = $_POST['userDriver'];
                $announce = $_POST['announce'];

            $isOk = $model->insertReservation($date, $user, $announce);
        }
    }

    private function getUsersForSelect() {
        // var_dump($_SESSION["listOfUsers"]);
        $users = $_SESSION["listOfUsers"];
        $str = "";

        for($i = 0; $i < count($users); $i++) {
            $firstname = $users[$i]["firstName"]; // utilisateurs de la bdd stockés en session
            $lastName = $users[$i]["lastName"]; 
            $str .= "<option value='$firstname $lastName'>$firstname</option>";
        }

        return $str;
    }

    private function getAnnounceForSelect() {
        // echo "<pre>";
        // var_dump($_SESSION["listOfAnnouncements"]);

        $announcements = $_SESSION["listOfAnnouncements"];
        $str = "";

        for($i = 0; $i < count($announcements); $i++) {
            $driver = $announcements[$i]["userDriver"]; // utilisateurs de la bdd stockés en session
            $start = $announcements[$i]["cityStart"]; 
            $end = $announcements[$i]["cityEnd"]; 

            $str .= "<option value='bite'>$driver $start->$end</option>";
        }

        return $str;
    }
}