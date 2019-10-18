<?php
require_once("../assets/templates/_includes/header.php");

$controller = new UserController();
$html = $controller->userAction();
echo $html;