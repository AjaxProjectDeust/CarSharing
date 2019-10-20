<?php

class CarController
{
    public function carForm(): string {
        $html = '';
        $html .= '
            <h2>Création d\'une voiture</h2>
            <form method="post" action="#">
                Choississez un propriétaire :
                <select name="userProperty">
                    <option value="0">-</option>
                        '.$this->getUsersForSelect().'
                </select><br>

                <label for="mark">Marque  : </label>
                <input type="text" name="mark" placeholder="Entrez la marque"><br>
            
                <label for="model">Modèle  : </label>
                <input type="text" name="model" placeholder="Entrez le modèle"><br>
                
                <label for="color">Couleur  : </label>
                <input type="text" name="color" placeholder="Couleur"><br>

                <label for="nbOfSeats">Le nombre de sièges : </label>
                <input type="text" name="nbOfSeats" placeholder="Nombre de sièges"><br>
                
                <input type="submit" value="Création">
                </form>
                <br />';

        $this->carCreation();

        return $html;
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
    }

    private function carCreation() {
        $model = new CarModel();
        if (isset($_POST['userProperty']) && isset($_POST['mark']) &&
        isset($_POST['model']) && isset($_POST['color']) && isset($_POST['nbOfSeats'])) {
            
                $user = $_POST['userProperty'];
                $mark = $_POST['mark'];
                $modelOfCar = $_POST['model'];
                $color = $_POST['color'];
                $nbOfSeats = $_POST['nbOfSeats'];

            $isOk = $model->insertCar($user, $mark, $modelOfCar, $color, $nbOfSeats);
        }
    }
}