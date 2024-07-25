<?php
require_once 'load.php';
if (!empty($_SESSION)) {
} else {
  session_start();
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<?php include "head.php"; ?>
<?php if (isset($_SESSION['ADMIN'])) { 
  require_once 'layout-admin.php';
} else {
  require_once 'layout-login.php';
} ?>
  <!-- <div class="container">
    <br />
    <div class="alert alert-info">
      <h3>Restricted Area</h3>
      <hr />
      <p><a href="<?= $abs; ?>/back3nd/">Please login here</a></p>
    </div>
  </div> -->
</html>

