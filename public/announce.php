<?php
require_once("../assets/templates/_includes/header.php");

// pour pouvoir se calquer sur l'index de la table listOfAnnouncements
$currentAnnounce = (int)$_GET["announce"] - 1; 
$listOfAnnouncements = $_SESSION['listOfAnnouncements'];

if(isset($_SESSION["notOk"])) {
    echo $_SESSION["notOk"];
    unset($_SESSION['notOk']);
 } else {
     $_SESSION["notOk"] = null;
 }

// Local
// echo "<div id='userRender-container'>";
// foreach($listOfAnnouncements[$currentAnnounce]->getAttributes() as $val) {
//     echo "<p>$val</p>";
// }
// echo "</div>";

echo "<div class='individual'>";
    echo $listOfAnnouncements[$currentAnnounce]['date']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['userDriver']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['cityStart']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['cityEnd']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['dateStart']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['dateEnd']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['car']. '<br>';
    echo $listOfAnnouncements[$currentAnnounce]['seatNumber']. '<br>';
echo "</div>";

require_once("../assets/templates/_includes/footer.php");
