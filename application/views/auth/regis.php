<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/img/brand/logo polisi.png'); ?>" type="image/png">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



    <!-- datePicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

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
                <div data-tilt class="polisi">
                    <img src="<?= base_url('assets/image/motif-geometris.svg'); ?>" alt="" class="motif">
                    <img class="police" src="<?= base_url('assets/image/polisi.svg'); ?>" alt="">
                </div>
                <p class="moto">Report The Crimes You Have <br>Experienced</p>
            </div>
        </div>
        <div class="right__regis">
            <!-- <img src="<?= base_url('assets/image/motif-ombak.svg'); ?>" alt="" class="motif-om"> -->
            <div class="sambutan sambutan__regis">
                <p class="welcome">Sign Up</p>
                <p class="text-kecil">Sudah Punya Akun?<a href="<?= base_url('auth'); ?>"> Login</a></p>
            </div>
            <form class="form-absolute form-absolute__regis" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                <div class="flex-form">
                    <div class="wrapper-form">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>">
                        <p class="form-error"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="wrapper-form">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="text" placeholder="YYYY-MM-DD" name="ttl" id="ttl" value="<?= set_value('ttl'); ?>">
                        <p class=" form-error"><?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                </div>

                <div class="flex-form">
                    <div class="wrapper-form">
                        <label for="agama">Agama</label>
                        <select id="agama" name="agama" value="<?= set_value('agama'); ?>">
                            <option>Pilih...</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Konghucu</option>
                            <option>Lainnya..</option>
                        </select>
                        <p class=" form-error"><?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="wrapper-form">
                        <label for="kerja">Pekerjaan</label>
                        <select id="kerja" name="kerja" value="<?= set_value('kerja'); ?>">
                            <option>Pilih...</option>
                            <option>Belum/Tidak Bekerja</option>
                            <option>Mengurus Rumah Tangga</option>
                            <option>Pelajar/Mahasiswa</option>
                            <option>Pensiunan</option>
                            <option>PNS</option>
                            <option>TNI</option>
                            <option>Polri</option>
                            <option>Perdagangan</option>
                            <option>Petani/Pekebun</option>
                            <option>Peternak</option>
                            <option>Nelayan/Perikanan</option>
                            <option>Konstruksi</option>
                            <option>Transportasi</option>
                            <option>Karyawan Swasta</option>
                            <option>Buruh Harian Lepas</option>
                            <option>Perancang Busana</option>
                            <option>Peterjemah</option>
                            <option>Imam Masjid</option>
                            <option>Pendeta</option>
                            <option>Pastor</option>
                            <option>Jurnalis</option>
                            <option>Chef</option>
                            <option>Penjabat</option>
                            <option>Pilot</option>
                            <option>Guru</option>
                            <option>Pengacara</option>
                            <option>Dokter</option>
                            <option>Bidan</option>
                            <option>Apoteker</option>
                            <option>Wiraswata</option>
                            <option>Psikolog</option>
                            <option>Lainnya</option>
                        </select>
                        <p class=" form-error"><?= form_error('kerja', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                </div>

                <div class="flex-form">
                    <div class="wrapper-form">
                        <label for="negara">Kewarganegaraan</label>
                        <input type="text" id="negara" name="negara" placeholder="Negara" value="<?= set_value('negara'); ?>">
                        <p class="form-error"><?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="wrapper-form">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                        <p class="form-error"><?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                </div>

                <div class="flex-form">
                    <div class="wrapper-form">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <p class="form-error"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="wrapper-form">
                        <label for="noHp">Nomor Handphone</label>
                        <input type="text" id="noHp" name="noHp" placeholder="Nomor Handphone" value="<?= set_value('noHp'); ?>">
                        <p class="form-error"><?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                </div>
                <div class="wrapper-form">
                    <label for="address">Alamat</label>
                    <textarea id="address" placeholder="Alamat" name="address" value=" <?= set_value('address'); ?>"></textarea>
                    <p class=" form-error"><?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?></p>
                </div>

                <div class="flex-form">
                    <div class="wrapper-form">
                        <label for="password">Password</label>
                        <input type="password" id="password1" name="password1" placeholder="Password">
                        <p class="form-error"><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                    <div class="wrapper-form">
                        <label for="password">Ulangi Password</label>
                        <input type="password" id="password2" name="password2" placeholder="Ulangi Password">
                        <p class="form-error"><?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?></p>
                    </div>
                </div>

                <button class="btn btn-primary btn__regis" type="submit">
                    Registrasi
                </button>
            </form>



        </div>
    </div>

    <!-- Titl js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="tilt.jquery.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#ttl").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
</body>

</html>