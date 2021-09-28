<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <!-- Bacaan Dashboard -->
                <div class="col-lg-6 col-7">
                    <h1 class="h1 text-white d-inline-block mb-0">Data Laporan</h1>
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
                    <h3 class="text-white mb-0">Laporan Tindak Kriminal</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Jenis Kasus</th>
                                <th scope="col" class="sort" data-sort="completion">Nomer Telepon</th>
                                <th scope="col" class="sort" data-sort="completion">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list tbody">
                            <?php
                            $i = 1;
                            foreach ($dataLaporan as $l) { ?>
                                <tr>
                                    <td scope="row">
                                        <?= $i++; ?>
                                    </td>
                                    <td class="budget">
                                        <?= $l['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $l['jk']; ?>
                                    </td>
                                    <td>
                                        <?= $l['noHp']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/detailLaporan/' . $l['id']); ?>">Detail</a><br>
                                        <a href="<?= base_url('admin/exportToPdf/' . $l['id']); ?>" onclick="return confirm('Kamu yakin akan mencetak laporan ini ?');">PDF</a><br>
                                        <a href="<?= base_url('admin/hapusLaporan/') . $l['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus laporan ini ?');">Delete</a><br>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>