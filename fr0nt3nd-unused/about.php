<?php
require_once 'src/Controllers/SiteController.php';
$about=new SiteController();
?>

<h1><?=$about->aboutUs()?></h1>

