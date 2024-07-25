<?php
// require_once 'load.php';
if (!empty($_SESSION)) {
} else {
  session_start();
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<?php 
include "head.php"; 
require_once 'layout-admin.php';
?>
<?php 
// if (isset($_SESSION['ADMIN'])) { 
//   require_once 'layout-admin.php';
// } else {
//   require_once 'layout-login.php';
// } ?>
</html>

