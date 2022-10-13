<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title2; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <p>
        <form action="/barangada/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
            <div class="col-md-4">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" value="<?= old('nama'); ?>" name="nama" autofocus class="form-control 
                <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Nama Barang</label>
                <input type="text" value="<?= old('nama_barang'); ?>" name="nama_barang" size="100" class="form-control 
                <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_barang'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Kota Asal</label>
                <input type="text" value="<?= old('kota_asal'); ?>" name="kota_asal" autofocus class="form-control 
                <?= ($validation->hasError('kota_asal')) ? 'is-invalid' : ''; ?>" id="">
                <div class="invalid-feedback">
                    <?= $validation->getError('kota_asal'); ?>
                </div>
            </div>
            <div class="col-12">
                <label for="" class="form-label">No. Handphone</label>
                <input type="text" name="no_hp" value="<?= old('no_hp'); ?>"pattern="{0-9}+" class="form-control
                <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="" placeholder="08123456789">
                <div class="invalid-feedback">
                    <?= $validation->getError('no_hp'); ?>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="" class="form-label">Foto Barang</label>
                <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" 
                type="file" id="foto" name="foto">
                <div class="invalid-feedback">
                    <?= $validation->getError('foto'); ?>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </p>
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->