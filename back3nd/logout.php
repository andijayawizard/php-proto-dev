<?php
require_once '../Koneksi.php';
session_start();
session_destroy();
header("location: " . $abs . "/back3nd/");
