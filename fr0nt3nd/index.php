<?php
require_once '../controllers/function.php';
require_once '../controllers/UserController.php';
$items=new UserController();
$items=$items->getAll(1);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, Bootstrap Table!</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.1/dist/bootstrap-table.min.css">
  </head>
  <body>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Username</th>
				<th>ApiKey</th>			
			</tr>
		</thead>
		<tbody>
			<?php
			$no=0+1;
			foreach ($items as $item) {?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$item['username']?></td>
					<td><?=$item['api_key']?></td>
				</tr>
			<?php }?>
		</tbody>
	</table>
    <table data-toggle="table">
      <thead>
        <tr>
          <th>Item ID</th>
          <th>Item Name</th>
          <th>Item Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Item 1</td>
          <td>$1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Item 2</td>
          <td>$2</td>
        </tr>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.1/dist/bootstrap-table.min.js"></script>
  </body>
</html>


