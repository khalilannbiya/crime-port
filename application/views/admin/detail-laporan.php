<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <!-- Bacaan Dashboard -->
                <div class="col-lg-6 col-7">
                    <h1 class="h1 text-white d-inline-block mb-0">Data Laporan</h1>
                    <a href="<?= base_url('admin/laporan') ?>" class="btn btn-sm btn-neutral ml-5">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--5">
    <div class="row">
        <div class="col">
            <div class="card bg-white bayangan">
                <div class="laporan">
                    <h1 class="judul">Laporan Polisi</h1>
                </div>
                <hr class="garis">
                <div>
                    <h3 class="judul-h3">Yang Melaporkan : </h3>
                    <table class="table-laporan">
                        <tr>
                            <th>1.</th>
                            <th>Nama</th>
                            <th>:</th>
                            <td><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <th>Tanggal Lahir</th>
                            <th>:</th>
                            <td><?= date('d F Y', $ttl); ?></td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <th>Agama</th>
                            <th>:</th>
                            <td><?= $agama; ?></td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <th>Pekerjaan</th>
                            <th>:</th>
                            <td><?= $kerja; ?></td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <th>Kewarganegaraan</th>
                            <th>:</th>
                            <td><?= $negara; ?></td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <th>Alamat</th>
                            <th>:</th>
                            <td><?= $address; ?></td>
                        </tr>
                        <tr>
                            <th>7.</th>
                            <th>Email</th>
                            <th>:</th>
                            <td><?= $email; ?></td>
                        </tr>
                        <tr>
                            <th>8.</th>
                            <th>Nomer Telepon</th>
                            <th>:</th>
                            <td><?= $noHp; ?></td>
                        </tr>
                        <tr>
                            <th>9.</th>
                            <th>NIK</th>
                            <th>:</th>
                            <td><?= $nik; ?></td>
                        </tr>
                    </table>
                    <hr>
                    <h3 class="judul-h3">Hal Yang Dilaporkan : </h3>
                    <table class="table-laporan table-pelaporan">
                        <tr>
                            <th>1.</th>
                            <th class="th">Waktu Kejadian</th>
                            <th>:</th>
                            <td><?= date('d F Y', $time); ?></td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <th class="th">Tempat Kejadian</th>
                            <th>:</th>
                            <td><?= $alamat; ?></td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <th class="th">Jenis Kasus</th>
                            <th>:</th>
                            <td><?= $jk; ?></td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <th class="th">Nama Terlapor</th>
                            <th>:</th>
                            <td><?= $nopti; ?></td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <th class="th">Nama Korban</th>
                            <th>:</th>
                            <td><?= $nkor; ?></td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <th class="th">Kronologi</th>
                            <th>:</th>
                            <td><?= $kronologi; ?></td>
                        </tr>
                        <tr>
                            <th>7.</th>
                            <th class="th">Dilaporkan Pada Hari</th>
                            <th>:</th>
                            <td><?= date('l d F Y, H : i : s', $date_created); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>