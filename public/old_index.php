<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../autoloader.php';
Autoloader::register();

// echo '<pre>';
// var_dump($_SERVER);
// switch ($_SERVER['REQUEST_URI']) {
//     case '':
//         echo 'Salut';
//         break;
//     case '/voitures':
//         echo 'Voitures';
//         break;
//     // default:
//     //     echo '404';
//     //     break;
// }

// Creation of data :
// function displayObjects($nbOfObject, $list, $class) {
//     for($i = 0; $i < $nbOfObject - 1; $i++) {
//         $currentObject = $i + 1; // démarre à 1
        
//         $obj[$currentObject] = new $class();
//         array_push($list, $obj[$currentObject]);
//     }
//     return $list; // the list used
// }

// Create x number of class
// $listOfCars = displayObjects(4, $listOfCars, "Car");
// $listOfUsers = displayObjects(5, $listOfUsers, "User");

 $car1 = new Car("Ford", "Mondeo", "black", 4);
 $car2 = new Car("Toyota", "Voiture", "yellow", 3);

// $car3 = new Car();
// $car4 = new Car();
// $car5 = new Car();
// $listOfCars = [$car1, $car2, $car3, $car4, $car5];

$user1 = new User("Tony", "Bengué", "tonybengue@hotmail.fr", "02/12/1993", null, null, null);
$user2 = new User("Steichen", "Almeric", "almeric.steichen@etu.unilim.fr", "08/08/1999", null, null, null);
// $user3 = new User();
// $user4 = new User();
// $user5 = new User();


// $listOfUsers = [$user1, $user2, $user3, $user4, $user5];
// Displaying the data :
// foreach ($listOfCars as $car) {
//     echo 'This is a car <br>';
// }

// foreach ($listOfUsers as $user) {
//     echo 'This is an user <br>';
// }

// echo $user1->getFirstname();
// echo $user1->getLastname();
// echo $user1->getEmail();
// echo $user1->getBirthDate();
// echo $user1->getRate();
// echo $user1->getListOfCars();
// echo $user1->getListOfComments();
// echo $user2->getAttributes();

// $listOfUsers[] = $user1;
// $listOfUsers[] = $user2;

// var_dump($listOfUsers[0]);


/*
* Permet d'afficher le Nom de chaque utilisateur
* Utile pour afficher les tableaux en entier
*/
// for ($i = 0; $i < count(User::$listOfUsers); $i++ ) {
//     // echo $listOfUsers[$i]->getAttributes();
//     // User::$listOfUsers[$i]->getAttributes();

//     echo User::$listOfUsers[$i]->getFirstName();
// }

/*
* Pour recup' les données d'un formulaire
*/
//echo htmlspecialchars($_POST['nom']); .
//echo (int)$_POST['age'];  ans.
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CarSharing</title>
</head>
<body>

    <form action="index.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Votre âge : <input type="text" name="age" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

</body>
</html>