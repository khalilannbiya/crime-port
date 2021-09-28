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
            <img src="<?= base_url('assets/image/logo.svg'); ?>" alt="" class="logo">
            <p class="crime">E-CrimePort</p>
            <img src="<?= base_url('assets/image/polisi.svg'); ?>" alt="" class="polisi">
            <img src="<?= base_url('assets/image/motif.svg'); ?>" alt="" class="motif">
            <p class="moto">Report The Crimes You Have Experienced</p>
        </div>
        <div class="setengah kanan">
            <p class="welcome">Welcome To E-CrimePort</p>
            <p class="text-kecil">Belum Punya Akun? <a href="<?= base_url('auth/registrasi'); ?>">Sign Up</a></p>
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
                <button type="submit">
                    Login
                </button>
            </form>
            <img src="<?= base_url('assets/image/motif-ombak.svg'); ?>" alt="" class="motif-om">


        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>