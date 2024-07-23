<?php
// if ($level['id'] <> 1) {
if (!$_SESSION['ADMIN']) {
  header('location: ../logout.php');
} else { ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= $abs; ?>" class="brand-link" target="_blank">
    <img src="<?= $abs; ?>/assets/logo-alt.png" alt="Morillo Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light"><?=isset($misc['nama'])?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php
          // if ($img_profile) {
          //   $img_profile = $abs . "/assets/uploads/images/user/" . $sesi['acak'] . "-1.jpg";
          // } else {
          //   $img_profile = $abs . "/assets/logo-alt.png";
          // }
          ?>
        <!-- <img src="<?= $img_profile; ?>" class="img-circle elevation-2" alt="<?= $sesi['username']; ?>"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block">Welcome, <?php echo $_SESSION['ADMIN']['username']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        <li class="nav-header">Logged in as <span class="badge badge-success"><?=isset($level['nama'])?></span></li>
        <?php
        // $menucat=$proses->tampil_data_specified('*', 'menucat', 'pub=1');
        // foreach ($menucat as $menucat) {?>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              <?//=$menucat['caption']?>
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            // $menusubcat=$proses->tampil_data_specified('*', 'menusubcat', "pub=1 and cat_id='$menucat[id]'");
            // foreach ($menusubcat as $menusubcat) {?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    <?//=$menusubcat['caption']?>
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <?php
                  // $menu=$proses->tampil_data_specified('*', 'menu', "pub=1 and subcat_id='$menusubcat[id]'");
                  // foreach ($menu as $menu) {?>
                    <!-- <li class="nav-item">
                      <a id="#" href="<?= $abs; ?>/backend/pages/index.php?page=<?=$menu['link']?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?=$menu['caption']?></p>
                      </a>
                    </li> -->
                  <?php // }?>
                </ul>
              </li>
            <?php // }?>

            <?php
            // $menu=$proses->tampil_data_specified('*', 'menu', "pub=1 and subcat_id is null");
            // foreach ($menu as $menu) {?>
              <!-- <li class="nav-item">
                <a id="#" href="<?= $abs; ?>/backend/pages/index.php?page=<?=$menu['link']?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?=$menu['caption']?></p>
                </a>
              </li> -->
            <?php // }?>
            <li class="nav-item">
              <a id="#" href="<?=$abs?>/back3nd/users" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a id="#" href="<?=$abs?>/back3nd/brands" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Brands</p>
              </a>
            </li>
            <li class="nav-item">
              <a id="#" href="<?=$abs?>/back3nd/blog" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog</p>
              </a>
            </li>
          </ul>
        </li>
        <?php // }?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<?php }
?>