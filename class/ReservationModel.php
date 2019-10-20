<?php

class ReservationModel {

    public function insertReservation($date, $user, $announce) {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        // Pour pouvoir insérer dans la bdd
        $date = date('Y-m-d', strtotime($date));

        $formValues = [
            "date" => $date, 
            "user" => $user, 
            "announce" => $announce,
            "status" => 1
        ];
        
        $sql = "INSERT INTO reservations (date, user, announce, status)
        VALUES(:date, :user, :announce, :status)";
        
        $request = $pdo->prepare($sql);
        if ($request) {
            $request->execute($formValues);

            $_SESSION["reservationOk"] = "Réservation effectuée";

            header('Location: index.php');
            exit();
        } else {
            $_SESSION["notOk"] = "Error ". $sql;

            header('Location: reservation.php');
            exit();
        }
    }

    public function getAnnouncements() {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        $sql = "SELECT * FROM announcements";
        $request = $pdo->prepare($sql);
        $request->execute();

        $results = $request->fetchAll();
        
        return $results;
    }
}