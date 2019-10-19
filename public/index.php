<?php 
require_once("../assets/templates/_includes/header.php");

if(isset($_SESSION["userOk"])) {
   echo $_SESSION["userOk"];
   unset($_SESSION['userOk']);
} else {
    $_SESSION["userOk"] = null;
}

// Prénom, nom, mail, dateNaissance, voiture, commentaire
// $user1 = new User("Tony", "Bengué", "tonybengue@hotmail.fr", "02/12/1993");
// $user2 = new User("Almeric", "Steichen", "almeric.steichen@etu.unilim.fr", "08/08/1999");

// marque, modele, couleur, nbPlace
// $car1 = new Car("Ford", "Mondeo", "black", 4);
// $car2 = new Car("Toyota", "Voiture", "yellow", 3);

// villeDep, villeFin, dateDeb, dateFin, conducteur, nbPlaces, prix, voiture
// $annoucement1 = new Announcement("Limoges", "Bordeaux", "15/10/2019", "16/10/2019", $user1, $car2->getNumberOfPlaces(), 25, $car2->getMark());
// $annoucement2 = new Announcement("Nantes", "Marseille", "17/10/2019", "18/10/2019", $user2, $car1->getNumberOfPlaces(), 12.5, $car1->getMark());

echo "<h1>Tableau des utilisateurs</h1>";
UserController::showUserTableFromDb();

echo "<h1>Tableau des annonces</h1>";
AnnouncementController::showAnnouncementTableFromDb();

require_once("../assets/templates/_includes/footer.php");