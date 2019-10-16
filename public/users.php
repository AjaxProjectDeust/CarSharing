<?php
require_once("../assets/templates/_includes/header.php");

// $currentUser = $_GET["user"];
// var_dump($currentUser);

// echo "<pre>";

// $user3 = new User("Almeric", "Steichen", "almeric.steichen@etu.unilim.fr", "08/08/1999");
// var_dump(User::$listOfUsers);

// var_dump(User::$bite);
// var_dump($car3);
// $idUser = User::$listOfUsers[$currentUser - 1];
// var_dump($idUser);

echo "<table id=''>
        <tr>
          <th>Utilisateur</th>
          <th>Mail</th>
          <th>Date de naissance</th>
          <th>Notes</th>
        </tr>";
        
        // for ($i = $_GET; $i < $_GET+1; $i++ ) {
        // }
echo "</table>"; 

// echo "<table style="width:100%; border: 1px solid black;">
//   <tr>
//     <th>Nom</th>
//     <th>Prénom</th>
//     <th>Mail</th>
//     <th>Date de naissance</th>
//   </tr>"
//   for ($i = 0; $i < count(User::$listOfUsers); $i++ ) {
//     echo "<tr>";
//         echo "<td>";
//             echo User::$listOfUsers[$i]->getFirstName();
//         echo "</td>";
//         echo "<td>";
//             echo User::$listOfUsers[$i]->getLastName();
//         echo "</td>";
//         echo "<td>";
//             echo User::$listOfUsers[$i]->getFirstName();
//         echo "</td>";
//     echo "</tr>";
//     // User::$listOfUsers[$i]->getAttributes();
//     }
?>
<!-- 

</table>  -->

<?php require_once("../assets/templates/_includes/footer.php"); ?>
