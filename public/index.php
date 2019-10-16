<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../autoloader.php';
Autoloader::register();

require_once("../assets/templates/_includes/header.php");

$car1 = new Car("Ford", "Mondeo", "black", 4);
$car2 = new Car("Toyota", "Voiture", "yellow", 3);

$user1 = new User("Tony", "Bengué", "tonybengue@hotmail.fr", "02/12/1993");
$user2 = new User("Almeric", "Steichen", "almeric.steichen@etu.unilim.fr", "08/08/1999");

$annoucement1 = new Announcement("Limoges", "Bordeaux", "15/10/2019", "16/10/2019", $user1, $car2->getNumberOfPlaces(), 25, $car2);
$annoucement2 = new Announcement("Nantes", "Marseille", "17/10/2019", "18/10/2019", $user2, $car1->getNumberOfPlaces(), 12.5, $car1);

// echo "<pre>";
// print_r($annoucement1);
// print_r(User::$listOfUsers);

/*
* Permet d'afficher le Nom de chaque utilisateur
* Utile pour afficher les tableaux en entier
*/

User::showUserForm();

require_once("../assets/templates/_includes/footer.php");