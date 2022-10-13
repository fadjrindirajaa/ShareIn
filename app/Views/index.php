<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ShareIn</title>
</head>
<body id="body">
    <div class="main" style="display: null;">
        <div class="index">
            <div class="index-form">
                <form action="/home/beranda" class="index-form-content center" method="POST">
                    <div class="vertical-center">
                        <img src="<?= base_url('/assets/img/Logo-Tangan2.png')?>" class="index-form-content-logo-english" alt="english">
                    </div>
                    <hr>
                    <h1 class="index-form-content-title">SHARE IN</h1>
                    <div class="index-form-content-form-field">
                        <!-- <span class="index-form-content-form-field-caption">
                            Nama Lengkap
                        </span>
                        <input type="text" class="index-form-content-form-field-input" name="nama" id="nama" placeholder="Ahmad Susetyo" required> -->
                    </div>
                    <div class="vertical-center">
                        <button class="index-form-content-footer-submit" onclick="executeExample('mixin')" name="submit">
                            MASUK
                        </button>
                    </div>
                </form>
            </div>
        </div><hr>
        <p class="foot">
            Copyright &copy; 2021 &middot; Gass Group Corporation &middot; Versi.2.0
        </p>
    </div>

    <script src="<?= base_url('assets/js/index.js')?>"></script>
    <script src="<?= base_url('plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>

</body>
</html>