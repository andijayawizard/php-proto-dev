<?php
// $page = $_GET['page'];
// echo "HTTP_HOST: ".$_SERVER['HTTP_HOST'];
// echo "REQUEST_URI: ".$_SERVER['REQUEST_URI'];
// echo "PHP_SELF: ".$_SERVER['PHP_SELF'];
$uri=$_SERVER['REQUEST_URI'];
$uri_exp=explode('/', $uri);

$page=$uri_exp[3];
if (isset($_GET['id'])) $id=$uri_exp[3];
if (isset($_GET['paging'])) $paging=$uri_exp[3];

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
// $result = json_decode(apiKey($abs.'/api/api.php/records/'.$page.'/'.$id), true);

switch ($page) {
  case '':
    $title = 'Morillo Coatings';
    break;
  case 'about':
    $title = 'About Us';
    break;
  case 'products':
    if ($_GET['id']) {
      $subTitle = $result['nama'];
    }
    $title='Products';
    break;
  case 'services':
    if ($_GET['id']) {
      $subTitle = $result['nama'];
    }
    $title = 'Services';
    break;
  case 'references':
    if ($_GET['id']) {
      $subTitle = $result['nama'];
    }
    $title = 'References';
    break;
  case 'projects':
    if ($_GET['id']) {
      $subTitle = $result['nama'];
    }
    $title = 'Projects';
    break;
  case 'blog':
    if (isset($_GET['id'])) {
      $subTitle = $result['nama'];
    }
    $title = 'Blog';
    break;
  case 'contact':
    $title = 'Contact Us';
    break;
  case 'search':
    $title = 'Search';
    break;
}
// $data = ['title' => $title, 'subTitle'=>$subTitle];
?>
