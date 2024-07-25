<?php
use DevCoder\DotEnv;
require_once '../src/Controllers/DotEnv.php';
require_once '../src/Controllers/Koneksi.php';
require_once '../src/Controllers/AuthController.php';

$dotEnv=new DotEnv('../.env');
$dotEnv->load();

$koneksi = new Koneksi();
$koneksi = $koneksi->DBConnect();

$proses=new AuthController($koneksi);
