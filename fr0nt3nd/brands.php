<?php
require_once 'src/Controllers/function.php';
require_once 'src/Controllers/BrandController.php';
$items=new BrandController();
$items=$items->getAll(1);
?>
<h1><?=$page?></h1>
<table class="table" data-toggle="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Brand</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0+1;
    foreach ($items as $item) {?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$item['nama']?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
