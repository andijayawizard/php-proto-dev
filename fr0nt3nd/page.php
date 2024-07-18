<?php
$page = $_GET['page'];

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$result = json_decode(apiKey($abs.'/api/api.php/records/'.$page.'/'.$id), true);

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
    if ($_GET['id']) {
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
