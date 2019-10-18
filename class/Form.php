<form action="index.php" method="post">
    <p>Votre nom : <input type="text" name="nom" /></p>
    <p>Votre âge : <input type="text" name="age" /></p>
    <p><input type="submit" value="OK"></p>
</form>


<?php
if(isset($_POST['OK']))
{
    $result=mysqli_query($con, "   

    ");
}