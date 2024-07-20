<?php
if (!empty($_SESSION)) {
} else {
  session_start();
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<?php include "head.php"; ?>
<?php
      // if (isset($_SESSION['ADMIN'])) require_once 'components/navbar.php';
?>
<?php if (isset($_SESSION['ADMIN'])) { ?>

  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">
      <!-- Navbar -->
      <?php include "components/navbar.php"; ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
        if (!empty($_SESSION['ADMIN'])) {
          include "components/aside-su.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 2) {
        //   include "../layouts/aside-manager.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 3) {
        //   include "../layouts/aside-supervisor.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 4) {
        //   include "../layouts/aside-warehouse.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 5) {
        //   include "../layouts/aside-accounting.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 7) {
        //   include "../layouts/aside-guest.php";
        // } elseif (!empty($_SESSION['ADMIN']) && $sesi['role_id'] == 8) {
        //   include "../layouts/aside-author.php";
        } else {
          echo "no page found";
        }
        ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php // include "components/header.php"; ?>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div id="load"></div>
          <?php include "contents.php"; ?>
          <!--/. container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <?php include "components/footer.php"; ?>
    </div>
    <!-- ./wrapper -->

    <?php include "scripts.php"; ?>
  </body>
<?php } else {?>
  <body class="hold-transition login-page dark-mode">
    <?php require_once 'login.php';?>
  </body>
  <!-- <div class="container">
    <br />
    <div class="alert alert-info">
      <h3>Restricted Area</h3>
      <hr />
      <p><a href="<?= $abs; ?>/back3nd/">Please login here</a></p>
    </div>
  </div> -->
<?php } ?>
</html>

