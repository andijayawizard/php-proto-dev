<?php
use DevCoder\DotEnv;
require_once '../../Controllers/DotEnv.php';
$dotEnv=new DotEnv('../../../.env');
$dotEnv->load();

require_once '../../Controllers/Koneksi.php';
require_once '../../Controllers/AuthController.php';
$koneksi = new Koneksi();
$koneksi = $koneksi->DBConnect();
$proses=new AuthController($koneksi);

if (!empty($_GET['aksi'] == 'login')) {
	$user = strip_tags($_POST['username']);
	$pass = strip_tags($_POST['password']);
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
