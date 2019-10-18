<?php
require_once("../assets/templates/_includes/header.php");

// pour pouvoir se calquer sur l'index de la table listOfUsers
$currentAnnounce = (int)$_GET["announce"] - 1; 
$listOfAnnouncements = $_SESSION['listOfAnnouncements'];

// $userModel = new UserModel();
// $userModel->insertUser();

echo "<div id='userRender-container'>";
foreach($listOfAnnouncements[$currentAnnounce]->getAttributes() as $val) {
    echo "<p>$val</p>";
}
echo "</div>";

require_once("../assets/templates/_includes/footer.php");
