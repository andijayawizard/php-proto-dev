<body class="hold-transition login-page dark-mode">
  <div class="login-box">
    <div id="logout">
      <?php if (isset($_GET['signout'])) { ?>
      <div class="alert alert-success">
        <small>You've been logged out!</small>
      </div>
      <?php } ?>
    </div>
    <div id="notifikasi">
      <div class="alert alert-danger">
        <small>Login Anda Gagal, Periksa Kembali Username dan Password</small>
      </div>
    </div>

    <div class="login-logo">
      <!-- <a href="#"><?= $misc['nama']; ?></a> -->
      <!-- <a href="#"><b>Waterproofing</b>Padang</a> -->
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="post" action="<?=$abs?>/src/Views/back3nd/proses.php?aksi=login" id="formLogin">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</body>
