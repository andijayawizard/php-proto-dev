<?php
$id=$uri_exp[3];
require_once 'src/Controllers/BlogController.php';
$items=new BlogController();
$items=$items->getDetails($id);

?>
<h1><?=$items['nama']?></h1>
<div><?=$items['ktrg']?></div>
