<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="info-box">
            <div>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                              <h1 class="display-5 fw-bolder text-black mb-2">Hai, Selamat Datang di Website ShareIn!</h1>
                              <p class="lead fw-normal text-black-50 mb-4">Mari sisihkan rezeki kita untuk orang yang membutuhkan. Apapun bentuk donasi Anda sangat berguna bagi orang yang membutuhkan.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/logo2.png')?>" alt="..." /></div>
                        <!-- <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div> -->
                    </div>
                </div>

            </div>
        </div>

        <div class="info-box" id="Instruction">
          <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                      <p>Rasulullah SAW bersabda bahwa: “Jauhilah neraka walupun hanya dengan (sedekah) sebiji kurma, kalau kamu tidak menemukan sesuatu, maka dengan omongan yang baik.”</p>
                      <hr color="white">
                      <h4 class="fw-bolder mb-3">(HR. Ahmad, Bukhari dan Muslim.)</h4>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="info-box ">
          <div class="container">
                    <br>
                    <h4 class="header-text text-center">Kenapa Harus di ShareIn?</h4>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blue bg-info">
                            <br>
                                <div class="icon">
                                    <center><img clas="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/placeholder.png')?>" width="70px" height="70px"></img></center>
                                    
                                </div>
                                <div class="text-center">
                                    <br>
                                    <h4>Bermanfaat!</h4>
                                    <p>Rezeki yang Anda sisihkan bermanfaat bagi mereka yang membutuhkan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue bg-success">
                            <br>
                                <div class="icon">
                                    <center><img clas="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/notoriety.png')?>" width="70px" height="70px"></img></center>
                                </div>
                                <div class="text-center">
                                  <br>
                                  <h4>Tepat Sasaran!</h4>
                                  <p>Akan ditemukannya pendonasi dan penerima donasi di website ShareIn</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue bg-danger">
                            <br>
                                <div class="icon">
                                    <center><img clas="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/24-hours.png')?>" width="70px" height="70px"></img></center>
                                </div>
                                <div class="text-center">
                                  <br>
                                  <h4>Aman!</h4>
                                  <p>Pendonasi dan Penerima telah melewati proses verifikasi sebelumnya</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> 

        <div class="info-box" id="Instruction">
          <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                      <h2 class="fw-bolder mb-3">Cara Daftar Sebagai Yang Mendonasikan</h2>
                      <hr color="white">
                        <div>
                          <ul class="lead fw-normal text-justify mb-4">
                            <li>Siapkan barang yang akan didonasikan</li>
                            <li>Pastikan barang yang didonasikan layak pakai</li>
                            <li>Isi form yang telah di sediakan admin</li>
                            <li>Klik Mulai untuk donasi!</li>
                          </ul>
                        </p>
                        <a class="btn btn-primary btn-lg <?php if($title === "Barang Tersedia") echo "active"?>" href="/barangada/formdonasi">Mulai</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div> <!--/. #Instruction -->

        <div class="info-box" id="Instruction">
          <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                      <h2 class="fw-bolder mb-3">Cara Daftar Sebagai Yang Membutuhkan</h2>
                      <hr color="white">
                        <div>
                          <ul class="lead fw-normal text-justify mb-4">
                            <li>Isi form yang telah di sediakan admin</li>
                            <li>Pastikan data yang anda masukan benar!</li>
                            <li>Pertanggung jawabkan data yang anda masukan! </li>
                            <li>Klik Mulai untuk mengisi form!</li>
                          </ul>
                        </p>
                        <a class="btn btn-primary btn-lg <?php if($title === "Barang Dibutuhkan") echo "active"?>" href="barangbutuh/formbutuh">Mulai</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div> <!--/. #Instruction -->

        <div id="Copyright">
          <p class="text-center">Copyright © 2021 · Gass Group Corporation · Versi.2.0<i class="tim-icons icon-heart-2"></i></p>
        </div> 

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->