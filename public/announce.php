<?php
require_once("../assets/templates/_includes/header.php");

// var_dump($_GET);
var_dump($_SESSION['listOfAnnouncements']);

// pour pouvoir se calquer sur l'index de la table listOfAnnouncements
$currentAnnounce = (int)$_GET["announce"] - 1; 
$listOfAnnouncements = $_SESSION['listOfAnnouncements'];

// Local
// echo "<div id='userRender-container'>";
// foreach($listOfAnnouncements[$currentAnnounce]->getAttributes() as $val) {
//     echo "<p>$val</p>";
// }
// echo "</div>";

echo "<div class='individual'>";
    echo "Date de création de l'annonce : ".$listOfAnnouncements[$currentAnnounce]['date']. '<br>';
    echo "Nom du conducteur : ".$listOfAnnouncements[$currentAnnounce]['userDriver']. '<br>';
    echo "Ville Départ : ".$listOfAnnouncements[$currentAnnounce]['cityStart']. '<br>';
    echo "Ville Arrivée : ".$listOfAnnouncements[$currentAnnounce]['cityEnd']. '<br>';
    echo "Date de départ : ".$listOfAnnouncements[$currentAnnounce]['dateStart']. '<br>';
    echo "Date de d'arrivée : ".$listOfAnnouncements[$currentAnnounce]['dateEnd']. '<br>';
    echo "Voiture : ".$listOfAnnouncements[$currentAnnounce]['car']. '<br>';
    echo "Nombre de sièges : ".$listOfAnnouncements[$currentAnnounce]['seatNumber']. '<br>';
    echo "Prix : ".$listOfAnnouncements[$currentAnnounce]['price']. '<br>';
    echo "<br>";
    echo "<br>";
    echo "<button><a href='index.php'>Retour</a></button>";
echo "</div>";

require_once("../assets/templates/_includes/footer.php");
