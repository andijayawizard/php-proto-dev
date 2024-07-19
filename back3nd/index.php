<?php
session_start();
$url=$abs;

// $url = "https://bootstrapfriendly.com/demo/live-demo/CRUD-operations-with-PHP-cURl-REST-API_1649791942/live/index.php?token=ABDSC144DSD";
//$url = "https://www.google.co.in/";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);

// echo '<pre>';
// print_r($result);
// echo '</pre>';


// die();

// require_once 'controllers/Koneksi.php';
// require_once 'routes.php';
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <?php
    // require_once 'fr0nt3nd/page.php';
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, Bootstrap Table!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.1/dist/bootstrap-table.min.css"> -->
  </head>
  <body>
    <div class="container-fluid">
			<form action="#" method="post">
				<label for="username">username</label>
				<input type="text" name="username">
				<label for="password">password</label>
				<input type="text" name="password">
				<input type="submit" name="">

			</form>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
