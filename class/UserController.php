<?php

class UserController
{
    public function userForm(): string {
        $html = '';
        $html .= '
            <h2>Création d\'un utilisteur</h2>
            <form method="post" action="#">
                <label for="firstName">Prénom  : </label>
                <input type="text" name="firstName" placeholder="Prénom"><br>
                
                <label for="lastName">Nom  : </label>
                <input type="text" name="lastName" placeholder="Nom"><br>
                
                <label for="email">E-Mail  : </label>
                <input type="email" name="email" placeholder="Email"><br>

                <label for="birthDate">Date de naissance  : </label>
                <input type="text" name="birthDate" placeholder="JJ/MM/YYYY"><br>

                <input type="submit" value="Création">
                </form>
                <br />';

        $this->userCreation();

        return $html;
    }

    private function userCreation() {
        $model = new UserModel();

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
            array_push(User::$listOfUsers, $user);

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
                    if($user['rate'] === '0') { echo "Pas de note"; }
                echo "</td>";
                echo "<td>";
                    echo $user['listOfCars'];
                echo "</td>";
                echo "<td>";
                    echo $user['listOfComments'];
                echo "</td>";
            echo "</tr>";
        }
        $_SESSION['listOfUsers'] = User::$listOfUsers;

        echo "</table>";
    }
}
