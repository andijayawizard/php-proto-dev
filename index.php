<?php
use DevCoder\DotEnv;
include_once 'controllers/DotEnv.php';
(new DotEnv(__DIR__.'/.env'))->load();

require_once 'controllers/Koneksi.php';
require_once 'routes.php';
$uri=$_SERVER['REQUEST_URI'];
$uri_exp=explode('/', $uri);
$page=$uri_exp[2];
switch ($page) {
  case 'back3nd':
    require_once 'back3nd/index.php';
    break;
  
  default:
    require_once 'fr0nt3nd/index.php';
    break;
}
