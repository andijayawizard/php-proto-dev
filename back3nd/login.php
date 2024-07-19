<?php
require_once '../controllers/Koneksi.php';
require_once '../controllers/AuthController.php';
$koneksi = new Koneksi();
$koneksi = $koneksi->DBConnect();
$proses=new AuthController($koneksi);

// login
if (!empty($_GET['aksi'] == 'login')) {
	// validasi text untuk filter karakter khusus dengan fungsi strip_tags()
	$user = strip_tags($_POST['username']);
	$pass = strip_tags($_POST['password']);
	// $pass = hash('sha256', strip_tags($_POST['pass']));
	// panggil fungsi proses_login() yang ada di class prosesCrud()
	$result = $proses->login($user, $pass);

	$row=$proses->tampil_data_id('users', 'username', $user);
	$hashed=password_verify($_POST['pass'], $row['password']);

	// if ($result != 'gagal') {
	if (password_verify($_POST['pass'], $row['password'])) {
		// status yang diberikan 
		session_start();
		$_SESSION['ADMIN'] = $result;
		header('location: ' . $abs . '/backend/pages/index.php?page=main-menu');
		// echo "<script>window.location='".$abs."/backend/user';</script>";
	} else {
		header('location: ' . $abs . '/backend/index.php?get=' . urlencode('auth-failed'));
		// echo "<script>window.location='../login.php?get=gagal';</script>";
	}
}
?>
<div class="container">
  <form method="post" action="login.php?aksi=login" id="formLogin">
	  <!-- <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div> -->
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
	    <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>	
</div>
