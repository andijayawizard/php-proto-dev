<?php
switch ($page) {
  case '':
    require "users.php";
    break;
  case 'about-us':
    require "about.php";
    break;
  case 'contact-us':
    require "contact.php";
    break;
  case 'users':
    if (isset($_GET['id'])) require "users-detail.php";
    else require "users.php";
    break;
  case 'brands':
    if (isset($_GET['id'])) require "brands-detail.php";
    else require "brands.php";
    break;
  case 'services':
    if ($_GET['id'] || $_GET['seo']) require "services-detail.php";
    else require "services.php";
    break;
  case 'references':
    if ($_GET['id'] || $_GET['seo']) require "references-details.php";
    else require "references.php";
    break;
  case 'projects':
    if ($_GET['id'] || $_GET['seo']) require "projects-detail.php";
    else require "projects.php";
    break;
  case 'blog':
    if (isset($uri_exp[3])) {
      require "blog-detail.php";
    } 
    else require "blog.php";
    break;
  case 'about-us':
    require "about.php";
    break;
  case 'contact-us':
    require "contact.php";
    break;
  case 'search':
    require "search.php";
    break;
}
