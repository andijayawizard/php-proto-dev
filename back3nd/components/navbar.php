<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?=getenv('baseUrl');?>/backend/pages/index.php?page=main-menu" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="<?= getenv('baseUrl'); ?>/backend/pages/index.php?page=user&act=edit&id=<?= $sesi['id']; ?>" class="dropdown-item">
          <i class="fas fa-user mr-2"></i> Profile
          <span class="float-right text-muted text-sm badge badge-success"><?=isset($level['nama'])?></span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= getenv('baseUrl'); ?>/back3nd/proses.php?aksi=logout" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
          <span class="float-right text-muted text-sm">end session</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
    </li>
  </ul>
</nav>