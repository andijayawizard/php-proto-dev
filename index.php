<?php
require_once 'vendor/autoload.php';
require_once 'src/Routes/index.php';

$uri_exp=explode('/', $path);
$page=$uri_exp[2];

switch ($page) {
  case 'back3nd':
    require_once 'back3nd/index.php';
    break;
  
  default:
    require_once 'fr0nt3nd/index.php';
    break;
}
