<?php
require_once("../assets/templates/_includes/header.php");

$controller = new ReservationController();
$html = $controller->reservationForm();
echo $html;