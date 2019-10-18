<?php
require_once("../assets/templates/_includes/header.php");

// pour pouvoir se calquer sur l'index de la table listOfUsers
$currentUser = (int)$_GET["user"] - 1; 
$listOfUsers = $_SESSION['listOfUsers'];

// $userModel = new UserModel();
// $userModel->insertUser();

echo "<div id='userRender-container'>";
// foreach($listOfUsers[$currentUser]->getAttributes() as $val) {
//     echo "<p>$val</p>";
// }

echo $listOfUsers[$currentUser]['firstName']. '<br>';
echo $listOfUsers[$currentUser]['lastName']. '<br>';
echo $listOfUsers[$currentUser]['email']. '<br>';
echo $listOfUsers[$currentUser]['birthDate']. '<br>';
echo $listOfUsers[$currentUser]['rate']. '<br>';
echo $listOfUsers[$currentUser]['listOfCars']. '<br>';
echo $listOfUsers[$currentUser]['listOfComments']. '<br>';
echo $listOfUsers[$currentUser]['date']. '<br>';

// foreach($listOfUsers[$currentUser] as $val) {
//     echo "<p>$val</p>";
// }


echo "</div>";

require_once("../assets/templates/_includes/footer.php");
