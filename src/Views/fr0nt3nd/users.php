<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <?php
        // require_once 'page.php';
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrontEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <?php
          require_once 'navbar.php';
      ?>
      <h1>
        <!-- <?//=$users->users()?> -->
        <?=$title?>
      </h1>
      <table id="example" class="table table-striped" style="width:100%">
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
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
