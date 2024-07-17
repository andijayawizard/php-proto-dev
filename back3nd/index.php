<?php
session_start();
require_once '../koneksi.php';
$url=$abs;

// $url = "https://bootstrapfriendly.com/demo/live-demo/CRUD-operations-with-PHP-cURl-REST-API_1649791942/live/index.php?token=ABDSC144DSD";
//$url = "https://www.google.co.in/";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);

// echo '<pre>';
// print_r($result);
// echo '</pre>';


// die();
?>
<form action="#" method="post">
	<label for="username">username</label>
	<input type="text" name="username">
	<label for="password">password</label>
	<input type="text" name="password">
	<input type="submit" name="">

</form>
