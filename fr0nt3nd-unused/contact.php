<?php
require_once 'src/Controllers/SiteController.php';
$contact=new SiteController();
?>

<h1><?=$contact->contactUs()?></h1>

