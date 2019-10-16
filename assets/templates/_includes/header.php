<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../autoloader.php';
Autoloader::register();

// marque, modele, couleur, nbPlace
$car1 = new Car("Ford", "Mondeo", "black", 4);
$car2 = new Car("Toyota", "Voiture", "yellow", 3);

// Prénom, nom, mail, dateNaissance
$user1 = new User("Tony", "Bengué", "tonybengue@hotmail.fr", "02/12/1993");
$user2 = new User("Almeric", "Steichen", "almeric.steichen@etu.unilim.fr", "08/08/1999");

// villeDep, villeFin, dateDeb, dateFin, conducteur, nbPlaces, prix, voiture
$annoucement1 = new Announcement("Limoges", "Bordeaux", "15/10/2019", "16/10/2019", $user1, $car2->getNumberOfPlaces(), 25, $car2->getMark());
$annoucement2 = new Announcement("Nantes", "Marseille", "17/10/2019", "18/10/2019", $user2, $car1->getNumberOfPlaces(), 12.5, $car1->getMark());

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>CarSharing</title>
</head>
<body>
