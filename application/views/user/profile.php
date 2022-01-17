<div class="">
    <div class="profile">
        <h1>My Profile</h1>
    </div>
    <div class="wrapper-card__profile">
        <div class="card-profile">
            <div class="image-profile">
                <img src="<?= base_url('assets/image/foto user.jpeg') ?>" alt="Foto user" width="175px">
                <h3><?= $user['nama']; ?></h3>
                <h4><em><?= $user['email']; ?></em></h4>
                <hr>
            </div>
            <div class="">
                <div class="other-data">
                    <h5 class="">Lainnya:</h5>
                    <p> <strong>Tanggal Lahir :</strong> <?= date('d F Y', $user['ttl']); ?></p>
                    <p><strong>Agama :</strong> <?= $user['agama']; ?></p>
                    <p><strong>Pekerjaan :</strong> <?= $user['kerja']; ?></p>
                    <p><strong>Kewarganegaraan :</strong> <?= $user['negara']; ?></p>
                    <p><strong>Alamat :</strong> <?= $user['address']; ?></p>

                    <p><strong>No HP :</strong> <?= $user['noHp']; ?></p>
                    <p><strong>NIK :</strong> <?= $user['nik']; ?></p>
                    <p><small class="text-muted">Bergabung Sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>