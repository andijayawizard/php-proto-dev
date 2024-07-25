<?php
$id=$uri_exp[4];
require_once 'src/Controllers/BlogController.php';
$items=new BlogController();
$items=$items->getDetails($id);
$ini = ($uri_exp[4]=='add') ? '' : $items=$items->getDetails($id) ;
$act = ($uri_exp[4]=='add') ? $act='add' : $act='edit' ;
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- /.card -->
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?=$act?> <?=$page?> / <?=$ini?></h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form enctype="multipart/form-data" id="quickFormBlog"
            action="<?= $abs; ?>/src/Views/back3nd/blog/crud.php?act=<?=$act?>" method="POST">
            <div class="row">
              <div class="form-group col-md-4">
                <label>Nama </label>
                <input type="text" value="<?//= $items['nama']; ?>" class="form-control" name="nama" placeholder="Nama"
                  required>
                <input type="hidden" value="<?//= $items['id']; ?>" class="form-control" name="id">
                <input type="hidden" value="<?=$act?>" class="form-control" name="act" id="act">
              </div>
              <div class="form-group col-lg-2 custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="pub" id="pub" value="1"
                  <?php // if ($items['pub'] == 1) echo "checked"; ?> />
                <label for="pub" class="custom-control-label">Publish</label>
              </div>
            </div>
            <div class=" form-group">
              <label>Summary</label>
              <textarea name="rgks" class="" placeholder="Ringkasan"
                style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?//= $items['rgks']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="ktrg" class="textarea" placeholder="Keterangan"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?//= $items['ktrg']; ?></textarea>
            </div>
            <div class="row">
              <?php for ($i = 1; $i <= 1; $i++) { ?>
              <div class="form-group col-md-3">
                <?php if ($fopen = fopen('../../assets/uploads/images/blog/' . $items['acak'] . '-' . $i . '.jpg', 'r')) { ?>
                <img src="<?= $abs; ?>/assets/uploads/images/blog/<?= $items['acak']; ?>-<?= $i; ?>.jpg" height="40">
                <?php } else { ?>
                <img src="<?= $abs; ?>/assets/logo.png" height="40">
                <?php } ?>
                <label for="file<?= $i; ?>">Images <?= $i; ?></label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input-" id="file<?= $i; ?>" name="file<?= $i; ?>">
                    <!-- <label class="custom-file-label" for="file<?= $i; ?>">Choose file</label> -->
                  </div>
                  <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="modal-footer- justify-content-between">
              <button class="btn btn-primary btn-sm" name="create"><i class="fas fa-save"></i> Submit</button>
              <button type="reset" class="btn btn-danger btn-sm">Reset</button>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
</div>
