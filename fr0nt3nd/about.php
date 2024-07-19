<?php
require_once 'controllers/SiteController.php';
$about=new SiteController();
?>

<h1><?=$about->aboutUs()?></h1>

