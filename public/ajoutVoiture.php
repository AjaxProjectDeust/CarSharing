<?php
require_once("../assets/templates/_includes/header.php");

$controller = new UserController();
$html = $controller->userForm();
echo $html;