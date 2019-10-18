<?php

class UserController
{
    public function userAction(): string {
        $html = '';
        $html .= '
            <h2>Création d\'un utilisteur</h2>
            <form method="post" action="#">
                <label for="lastName">Nom  : </label>
                <input type="text" name="lastName"><br>
                
                <label for="firstName">Prénom  : </label>
                <input type="text" name="firstName"><br>

                <label for="email">E-Mail  : </label>
                <input type="text" name="email"><br>

                <label for="birthDate">Date de naissance  : </label>
                <input type="text" name="birthDate"><br>

                <input type="submit" value="Création">
                </form>
                <br />
                ';
        // <input type="hidden" name="type" value="userCreation">

        $this->UserCreation();

        return $html;

        // $animals = $animalService->getAnimals();
        // foreach ($animals as $animal) {
        //     $html .= $animal->getName();
        //     $html .= '<br />';
        //     $html .= $animal->getAge() . ' day' . ($animal->getAge() > 1 ? 's' : '');
        //     $html .= '<br />';
        //     $html .= ($animal->isGreaterThanAHuman() ? 'Is greater than a human' : 'Is smaller than a human');
        //     $html .= '<br />';
        // }
    }

    private function userCreation() {
        $model = new UserModel();

        // var_dump($_POST);
        if (isset($_POST['lastName']) && isset($_POST['firstName']) && 
            isset($_POST['email']) && isset($_POST['birthDate'])) {

            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $email = $_POST['email'];
            $birthDate = $_POST['birthDate'];

            $isOk = $model->insertUser($lastName, $firstName, $email, $birthDate);
        }
    }
}
