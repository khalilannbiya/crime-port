<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/img/brand/logo polisi.png'); ?>" type="image/png">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>E-CrimePort | <?= $title; ?></title>
</head>

<body>
    <div class="contener">
        <div class="setengah kiri">
            <div class="flex-in-blue">
                <img src="<?= base_url('assets/image/logo.svg'); ?>" alt="" class="logo">
                <p class="crime">E-CrimePort</p>
            </div>
            <div class="wrapper__polisi">
                <div class="polisi" data-tilt transform-style: preserve-3d>
                    <img src="<?= base_url('assets/image/motif-geometris.svg'); ?>" alt="" class="motif">
                    <img class="police" src="<?= base_url('assets/image/polisi.svg'); ?>" alt="">
                </div>
                <p class="moto">Report The Crimes You Have <br>Experienced</p>
            </div>
        </div>
        <div class="setengah kanan">
            <div>
                <!-- <img src="<?= base_url('assets/image/motif-ombak.svg'); ?>" alt="" class="motif-om"> -->
                <div class="sambutan">
                    <p class="welcome">Welcome To E-CrimePort</p>
                    <p class="text-kecil">Belum Punya Akun? <a href="<?= base_url('auth/registrasi'); ?>">Sign Up</a></p>
                </div>
                <div class="pesan-logout"> <?= $this->session->flashdata('message'); ?></div>
                <form class="form-absolute" method="POST" action="<?= base_url('auth'); ?>">
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email"><br>
                        <p class="form-error"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="pw">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <p class="form-error"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <button class="btn btn-primary " type="submit">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Titl js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="tilt.jquery.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>