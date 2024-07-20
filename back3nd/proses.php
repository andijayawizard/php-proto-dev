<?php
require_once '../Koneksi.php';
require_once '../controllers/AuthController.php';
$koneksi = new Koneksi();
$koneksi = $koneksi->DBConnect();
$proses=new AuthController($koneksi);

if (!empty($_GET['aksi'] == 'login')) {
	// validasi text untuk filter karakter khusus dengan fungsi strip_tags()
	$user = strip_tags($_POST['username']);
	$pass = strip_tags($_POST['password']);
	// $pass = hash('sha256', strip_tags($_POST['pass']));
	// panggil fungsi proses_login() yang ada di class prosesCrud()
	$result = $proses->login($user, $pass);

	$row=$proses->tampil_data_id('users', 'username', $user);
	$hashed=password_verify($_POST['password'], $row['password']);

	// if ($result != 'gagal') {
	if (password_verify($_POST['password'], $row['password'])) {
		session_start();
		$_SESSION['ADMIN'] = $result;
		header('location: ' . $abs . '/back3nd/users');
	} else {
		// header('location: ' . $abs . '/back3nd/index.php?get=' . urlencode('auth-failed'));
		header('location: ' . $abs . '/back3nd/');
	}
}
if ($_GET['aksi']=='logout') {
	session_start();
	session_destroy();
	header("location: ".$abs."/back3nd/");
}
?>
