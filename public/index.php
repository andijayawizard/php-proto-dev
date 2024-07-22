<?php
use DevCoder\DotEnv;
include_once '../src/Controllers/DotEnv.php';
// (new DotEnv(__DIR__.'/.env'))->load();
$dotEnv=new DotEnv('../.env');
$dotEnv->load();

require_once '../vendor/autoload.php';
require_once '../src/Routes/index.php';


