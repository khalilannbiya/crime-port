<div class="shadow container">
    <div class="profile">
        <h1>My Profile</h1>
    </div>
    <div class="card mb-3 container" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4 foto-profile">
                <img src="<?= base_url('assets/image/foto user.jpeg') ?>" alt="Foto user" width="175px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <p class="card-text"><strong>Nama :</strong> <?= $user['nama']; ?></p>
                    <p class="card-text"> <strong>Tanggal Lahir :</strong> <?= date('d F Y', $user['ttl']); ?></p>
                    <p class="card-text"><strong>Agama :</strong> <?= $user['agama']; ?></p>
                    <p class="card-text"><strong>Pekerjaan :</strong> <?= $user['kerja']; ?></p>
                    <p class="card-text"><strong>Kewarganegaraan :</strong> <?= $user['negara']; ?></p>
                    <p class="card-text"><strong>Alamat :</strong> <?= $user['address']; ?></p>
                    <p class="card-text"><strong>Email :</strong> <?= $user['email']; ?></p>
                    <p class="card-text"><strong>No HP :</strong> <?= $user['noHp']; ?></p>
                    <p class="card-text"><strong>NIK :</strong> <?= $user['nik']; ?></p>
                    <p class="card-text"><small class="text-muted">Bergabung Sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>