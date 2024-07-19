<?php
require_once 'controllers/SiteController.php';
$contact=new SiteController();
?>

<h1><?=$contact->contactUs()?></h1>

