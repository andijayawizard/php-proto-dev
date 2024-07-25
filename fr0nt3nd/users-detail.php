<?php
$id=$uri_exp[3];
require_once 'src/Controllers/UserController.php';
$items=new UserController();
$items=$items->getDetails($id);

?>
<h1><?=$items['username']?></h1>
<div><?=$items['username']?></div>

