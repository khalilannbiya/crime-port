<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <!-- Bacaan Dashboard -->
                <div class="col-lg-6 col-7">
                    <h1 class="h1 text-white d-inline-block mb-0">User</h1>
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
                    <h3 class="text-white mb-0">Data User</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Nama</th>
                                <th scope="col" class="sort" data-sort="completion">Email</>
                                <th scope="col" class="sort" data-sort="completion">Waktu Pembuatan</>
                                <th scope="col" class="sort" data-sort="completion">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                            $i = 1;
                            foreach ($dataUser as $a) { ?>
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
                                    <td>
                                        <a href="<?= base_url('admin/hapusUser/') . $a['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus User ini ?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>