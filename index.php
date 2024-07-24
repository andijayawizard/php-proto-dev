<?php
use DevCoder\DotEnv;
include_once 'src/Controllers/DotEnv.php';
(new DotEnv(__DIR__.'/.env'))->load();

require_once 'vendor/autoload.php';
require_once 'src/Routes/index.php';
require_once 'src/Controllers/Koneksi.php';

$uri_exp=explode('/', $path);
$page=$uri_exp[2];

switch ($page) {
  case 'back3nd':
    require_once 'src/Views/back3nd/index.php';
    break;
  
  default:
    require_once 'src/Views/fr0nt3nd/index.php';
    break;
}
