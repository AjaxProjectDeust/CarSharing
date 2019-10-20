<?php

class AnnouncementModel {

    public function insertAnnouncement($userDriver, $cityStart, $cityEnd, $dateStart, $dateEnd, $car,$seatNumber, $price) {
        $pdo = new Database();
        $pdo = $pdo->getPdo();

        var_dump($userDriver);

        // Pour pouvoir insérer dans la bdd
        $dateStart = date('Y-m-d', strtotime($dateStart));
        $dateEnd = date('Y-m-d', strtotime($dateEnd));

        $formValues = [
            "userDriver" => $userDriver, 
            "cityStart" => $cityStart, 
            "cityEnd" => $cityEnd , 
            "dateStart" => $dateStart,
            "dateEnd" => $dateEnd,
            "car" => $car,
            "seatNumber" => $seatNumber,
            "price" => $price,
            "date" => date('Y-m-d')
        ];

        $sql = "INSERT INTO announcements (userDriver, cityStart, cityEnd, dateStart, dateEnd, car, seatNumber, price, date)
        VALUES(:userDriver, :cityStart, :cityEnd, :dateStart, :dateEnd, :car, :seatNumber, :price, :date)";
        
        $request = $pdo->prepare($sql);
        if ($request) {
            $request->execute($formValues);

            $_SESSION["announcementOk"] = "Annonce insérée";

            header('Location: index.php');
            exit();
        } else {
            $_SESSION["notOk"] = "Error ". $sql;

            header('Location: announce.php');
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