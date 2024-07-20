<nav class="navbar navbar-expand-lg bg-light--">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Frontend</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=$abs?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=getenv('baseUrl')?>/about-us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$abs?>/contact-us">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=$abs?>/users">Users</a></li>
            <li><a class="dropdown-item" href="<?=$abs?>/brands">Brands</a></li>
            <li><a class="dropdown-item" href="<?=$abs?>/blog">Blog</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=$abs?>/back3nd/">Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>