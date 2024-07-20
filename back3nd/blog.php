<?php
require_once 'controllers/function.php';
require_once 'controllers/BlogController.php';
$items=new BlogController();
$items=$items->getAll(1);

if (!empty($_SESSION['ADMIN'])) {?>
  <div>
    <h1><?=$page?></h1>
    <table class="table" data-toggle="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>Ringkasan</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=0+1;
        foreach ($items as $item) {?>
          <tr>
            <td><?=$no++?></td>
            <td><?=$item['nama']?></td>
            <td><?=$item['rgks']?></td>
            <td><?=$item['ktrg']?></td>
          </tr>
        <?php }?>
      </tbody>
    </table>    
  </div>
<?php } else {
  echo 'restricted area';  
}
?>
