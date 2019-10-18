<?php
require_once("../assets/templates/_includes/header.php");

// pour pouvoir se calquer sur l'index de la table listOfUsers
$currentUser = (int)$_GET["user"] - 1; 
$listOfUsers = $_SESSION['listOfUsers'];

// $userModel = new UserModel();
// $userModel->insertUser();

echo "<div id='userRender-container'>";
foreach($listOfUsers[$currentUser]->getAttributes() as $val) {
    echo "<p>$val</p>";
}
echo "</div>";

require_once("../assets/templates/_includes/footer.php");
