<?php
require_once 'load.php';
?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include "components/navbar.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
      if (!empty($_SESSION['ADMIN'])) {
        include "components/aside-su.php";
      } else {
        echo "no page found";
      }
      ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include "components/header.php"; ?>
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
