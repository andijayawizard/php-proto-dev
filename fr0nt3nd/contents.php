<?php
// $page=$_GET['page'];
switch ($page) {
  case '':
    require "users.php";
    break;
  case 'users':
    if ($_GET['id'] || $_GET['seo']) require "users-detail.php";
    else require "users.php";
    break;
  case 'brands':
    if ($_GET['id'] || $_GET['seo']) require "brands-detail.php";
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
