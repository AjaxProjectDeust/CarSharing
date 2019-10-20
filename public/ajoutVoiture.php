<?php
require_once("../assets/templates/_includes/header.php");

$controller = new carController();
$html = $controller->carForm();
echo $html;