<?php
require '../autoloader.php';
Autoloader::register();

session_start(); // démarrage session

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
<header>
    <ul>
        <li><a class="active" href="index.php">Accueil</a></li>
        <li><a href="ajoutUtilisateur.php">Ajout utilisateurs</a></li>
        <li><a href="ajoutVoiture.php">Ajout voitures</a></li>
        <li><a href="ajoutAnnonce.php">Ajout annonces</a></li>
        <li><a href="ajoutReservation.php">Ajout annonces</a></li>
    </ul>
</header>
<body>
