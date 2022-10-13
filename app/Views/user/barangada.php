<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
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
      <div class="card">
        <div class="card-body">
          Pada halaman ini, ditampilkan list barang yang siap untuk diterima atau siap untuk diambil. <br>
          Bagi teman-teman yang membutuhkan, silahkan dapat langsung menghubungi nomor handphone yang tertera.<br>
          Bagi teman-teman yang ingin mendonasikan silahkan klik tombol Donasi Sekarang!<br>
        </div>
      </div>
      <a href="/barangada/formdonasi" class="btn btn-primary">Donasi Sekarang!</a><hr>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <table id="tabel-data" class="table table-dark table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Barang</th>
            <th>Kota Asal</th>
            <th>No Handphone</th>
            <th>Foto</th>
          </tr>
        </thead>

        <!-- kalo loading terus pas load halaman scoreboard code php nya hapus aja sementara -->
        <?php 
        $x=1;
        foreach ($barang_ada as $row) : ?>
          <tr>
            <td><?= $x; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nama_barang']; ?></td>
            <td><?= $row['kota_asal']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><img src="/img_ada/<?= $row['foto']; ?>" alt="" style="max-width:150px"></td>
          </tr>
        <?php
        $x++;
        endforeach; ?>
        <!-- sampe sini -->
        <!-- <tfoot>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Skor</th>
          </tr>
        </tfoot> -->
      </table>
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->