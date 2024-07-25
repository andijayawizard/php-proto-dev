<?php
require_once '../load.php';
// $page = $_GET['page'];
// echo "HTTP_HOST: ".$_SERVER['HTTP_HOST'];
// echo "REQUEST_URI: ".$_SERVER['REQUEST_URI'];
// echo "PHP_SELF: ".$_SERVER['PHP_SELF'];
$act=$_GET['act'];
if ($act=='add') {
	echo 'insert';
	header('location: '.$abs.'/back3nd/blog/?msg='.urlencode('insert success'));
} else {
	echo 'update';
	header('location: '.$abs.'/back3nd/blog/?msg='.urlencode('update success'));
}
