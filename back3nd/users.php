<?php
require_once 'src/Controllers/function.php';
require_once 'src/Controllers/UserController.php';
require_once 'src/Controllers/SiteController.php';
$items=new UserController();
$items=$items->getAll(1);

$users=new SiteController();

if (!empty($_SESSION['ADMIN'])) {?>
  <div>
    <h1><?=$users->users()?></h1>
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
<?php } else {
  echo 'restricted area';
}
?>
