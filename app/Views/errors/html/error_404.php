<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found!!</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <style>
        .gambar-404-bg {
            background-image: url(<?= base_url('assets/img/404.gif') ?>);
            height: 400px;
            background-position: center;
        }

        h1 {
            font-size: 90px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-sm-8">
                        <div class="gambar-404-bg">
                            <h1 class="text-center" style="font-family: serif;">404</h1>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-4"></div>
                    <div class="col-sm-4">
                        <h3>Sepertinya anda tersesat</h3>
                        <p>halaman yang anda cari tidak tersedia!</p>
                        <button onclick="history.back()" class="btn btn-primary">Kembali ke halaman sebelumnya</button>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>