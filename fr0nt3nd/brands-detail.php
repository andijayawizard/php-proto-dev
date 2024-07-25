<?php
$id=$uri_exp[3];
require_once 'src/Controllers/BrandController.php';
$items=new BrandController();
$items=$items->getDetails($id);

?>
<h1><?=$items['nama']?></h1>
<div><?=$items['ktrg']?></div>

