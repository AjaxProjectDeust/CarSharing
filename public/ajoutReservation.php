<?php
require_once("../assets/templates/_includes/header.php");

$controller = new AnnouncementController();
$html = $controller->announcementForm();
echo $html;