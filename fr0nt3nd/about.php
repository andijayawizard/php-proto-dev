<?php
require_once 'src/Controllers/SiteController.php';
// use App\Controllers\SiteController;
$about=new SiteController();
?>
<h1><?=$about->aboutUs()?></h1>

