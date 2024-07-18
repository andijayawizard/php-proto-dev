<?php
// $page=$_GET['page'];
switch ($page) {
  case '':
    require "home.php";
    break;
  case 'about':
    require "aboutus.php";
    break;
  case 'products':
    if ($_GET['id'] || $_GET['seo']) require "products-detail.php";
    else require "products.php";
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
    if ($_GET['id'] || $_GET['seo']) require "blog-detail.php";
    else require "blog.php";
    break;
  case 'contact':
    require "contactus.php";
    break;
  case 'search':
    require "search.php";
    break;
}
