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
$listOfCars = [];


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

// $car1 = new Car();
// $car2 = new Car();
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

// for ($i = 0; $i < count($listOfUsers); $i++ ) {
//     echo $listOfUsers[$i]->getAttributes();
// }
