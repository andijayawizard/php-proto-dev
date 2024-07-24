<?php
require_once 'src/Controllers/BrandController.php';
$items=new BrandController();
$items=$items->getAll(1);

if (!empty($_SESSION['ADMIN'])) {?>
  <div class="container-fluid">
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Alert!</h5>
      Klik tambah untuk menginput <?=$page?> baru
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <a href="<?= $abs; ?>/backend/pages/index.php?page=<?= $page; ?>&act=tambah" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> <?=$page?></a>

              <!-- <button type="button" id="btn-tambah" class="btn btn-default btn-sm openModalEdit'.$value->id.'"
              data-toggle="modal" data-target="#myModalDetail'.$value->id.'"
              data-href="<?= $abs; ?>/backend/pages/blog/div-form.php">
              <i class="fa fa-plus"></i> <?= $data['title']; ?>
            </button>
            <div class="modal fade div-modal" id="myModalDetail" tabindex="-1">
              <div class="modal-dialog modal-lg"></div>
            </div> -->
              <!-- <button class="btn btn-warning margin btn-sm" id="btn-add" title="New button"><i class="fa fa-plus"></i>
              Blog</button> -->
            </h3>
          </div>
          <div class="card-body">
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
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } else {
  echo 'restricted area';  
}
?>
