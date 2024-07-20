<?php
$id=$uri_exp[4];
require_once 'controllers/function.php';
require_once 'controllers/BlogController.php';
$items=new BlogController();
$items=$items->getDetails($id);

?>
<h1><?=$items['nama']?></h1>
<div><?=$items['ktrg']?></div>

