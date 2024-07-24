<?php
require_once 'src/Controllers/BrandController.php';
$items=new BrandController();
$items=$items->getAll(1);
?>
<h1><?=$page?></h1>
<table id="example" class="table table-striped" style="width:100%">
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
