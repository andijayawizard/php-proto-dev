<?php
require 'function.php';

$user='andika';
$pass='password';
$userpass=$user.":".$pass;
// echo $encode=base64_encode($user.":".$pass)."\n";
// echo base64_decode($encode)."\n";

// echo "md5: ".hash('md5', $user.":".$pass)."\n";
// echo "sha1: ".hash('sha1', $user.":".$pass)."\n";
// echo "sha2: ".hash('sha256', $user.":".$pass)."\n";
// echo "sha3: ".hash('sha384', $user.":".$pass)."\n";
// echo "sha5: ".hash('sha512', $user.":".$pass)."\n";
// echo md5($user.":".$pass)."\n";

echo "random password: ".randomPassword()."\n";
echo "random api key: ".randomApiKey()."\n";

$salt=bin2hex(random_bytes(16))."\n";

$combinedPassword=$userpass.$salt;

// $hashed=password_hash($userpass, PASSWORD_DEFAULT)."\n";
$hashed=password_hash($userpass, PASSWORD_BCRYPT)."\n";
echo "password hashed: ".$hashed."\n";

if (password_verify($userpass, '$2y$10$QHbo84VZ.cVG9CBk338saeeVMdUAl74NfyxQpLpYdck.DZ.FcmgUW')) {
	echo "betul: ".$hashed;
} else {
	echo "salah: ".$hashed;
}

