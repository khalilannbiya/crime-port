<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <!-- Bacaan Dashboard -->
                <div class="col-lg-6 col-7">
                    <h1 class="h1 text-white d-inline-block mb-0">Dashboard</h1>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Pengguna</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $anggota; ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-single-02"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-2">Jumlah Laporan</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $laporan; ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-books"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--5">
    <div class="row">
        <div class="col">
            <div class="card bg-default bayangan">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Laporan Terbaru</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Jenis Kasus</th>
                                <th scope="col" class="sort" data-sort="completion">Nomer Telepon</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                            $i = 1;
                            foreach ($laporanBaru as $n) { ?>
                                <tr>
                                    <td scope="row">
                                        <?= $i++; ?>
                                    </td>
                                    <td class="budget">
                                        <?= $n['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $n['jk']; ?>
                                    </td>
                                    <td>
                                        <?= $n['noHp']; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-default bayangan">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Pengguna Terbaru</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Email</th>
                                <th scope="col" class="sort" data-sort="completion">Waktu Pembuatan</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                            $i = 1;
                            foreach ($userBaru as $a) { ?>
                                <tr>
                                    <td scope="row">
                                        <?= $i++; ?>
                                    </td>
                                    <td class="budget">
                                        <?= $a['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $a['email']; ?>
                                    </td>
                                    <td>
                                        <?= date('l d F Y, H : i : s', $a['date_created']); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>