<?php 
require_once("../assets/templates/_includes/header.php");


// var_dump(User::$listOfUsers);
// var_dump($car2);

/*
* Permet d'afficher le Nom de chaque utilisateur
* Utile pour afficher les tableaux en entier
*/

echo "<h1>Tableau des utilisateurs</h1>";
User::showUserTable();

echo "<h1>Tableau des annonces</h1>";
Announcement::showAnnouncementTable();

require_once("../assets/templates/_includes/footer.php");