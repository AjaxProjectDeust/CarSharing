<?php
require_once("../assets/templates/_includes/header.php");

// pour pouvoir se calquer sur l'index de la table listOfUsers
$currentUser = (int) $_GET["user"] - 1; 
$listOfUsers = $_SESSION['listOfUsers'];

echo "<div class='individual'>";
    echo $listOfUsers[$currentUser]['firstName']. '<br>';
    echo $listOfUsers[$currentUser]['lastName']. '<br>';
    echo $listOfUsers[$currentUser]['email']. '<br>';
    echo $listOfUsers[$currentUser]['birthDate']. '<br>';
    if($listOfUsers[$currentUser]['rate'] === '0') {
        echo "Pas de note<br>";
    } else {
        echo $listOfUsers[$currentUser]['rate']. '<br>';
    }
    echo $listOfUsers[$currentUser]['listOfCars']. '<br>';
    echo $listOfUsers[$currentUser]['listOfComments']. '<br>';
    echo $listOfUsers[$currentUser]['date']. '<br>';

    // Réservations
    // foreach() {

    // }
    echo "<a href=''>Réservations</a>";
echo "</div>";

require_once("../assets/templates/_includes/footer.php");
