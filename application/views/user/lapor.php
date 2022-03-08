<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <div class="title-lapor">
        <h1>silahkan isi form berikut</h1>
        <p>mohon isi dengan teliti untuk meminimalasir kesalahan</p>
    </div>
    <form class="container form-laporan" method="POST" action="<?= base_url('user/laporan'); ?>">
        <fieldset disabled>
            <p class="data-pelapor">data pelapor</p>
            <div class="form-group">
                <label for="nama" class="label-form">Nama</label>
                <input type="text" class="form-control" placeholder="<?= $user['nama']; ?>" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                <p class=" form-error"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="date" class="label-form">Tanggal Lahir</label>
                <input type="text" class="form-control" placeholder="<?= date('d F Y', $user['ttl']); ?>" name="date" id="date" value="<?= set_value('date'); ?>">
                <p class=" form-error"><?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="agama" class="label-form">Agama</label>
                <select id="agama" class="form-control" name="agama" value="<?= set_value('agama'); ?>">
                    <option><?= $user['agama']; ?></option>
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
            <div class="form-group">
                <label for="kerja" class="label-form">Pekerjaan</label>
                <select id="kerja" class="form-control" name="kerja" value="<?= set_value('kerja'); ?>">
                    <option><?= $user['kerja']; ?></option>
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
            <div class="form-group">
                <label for="negara" class="label-form">Kewarganegaraan</label>
                <input type="text" class="form-control" placeholder="<?= $user['negara']; ?>" id="negara" name="negara" value="<?= set_value('negara'); ?>">
                <p class=" form-error"><?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="address" class="label-form">Alamat</label>
                <textarea class="form-control" id="address" placeholder="<?= $user['address']; ?>" name="address" value=" <?= set_value('address'); ?>"></textarea>
                <p class=" form-error"><?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="email" class="label-form">Email</label>
                <input type="text" class="form-control" placeholder="<?= $user['email']; ?>" id="email" name="email" value="<?= set_value('email'); ?>">
                <p class=" form-error"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="noHp" class="label-form">Nomor Handphone</label>
                <input type="text" class="form-control" placeholder="<?= $user['noHp']; ?>" id="noHp" name="noHp" value="<?= set_value('noHp'); ?>">
                <p class=" form-error"><?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
            <div class="form-group">
                <label for="nik" class="label-form">NIK</label>
                <input type="text" class="form-control" placeholder="<?= $user['nik']; ?>" id="nik" name="nik" value="<?= set_value('nik'); ?>">
                <p class=" form-error"><?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></p>
            </div>
        </fieldset>
        <p class="data-pelapor">Hal Yang Dilaporkan</p>
        <div class="form-group">
            <label for="time" class="label-form">Waktu Kejadian</label>
            <input type="text" class="form-control" placeholder="dd-mm-yyyy CTH : (01-08-2021)" name="time" id="time" value="<?= set_value('time'); ?>">
            <p class=" form-error"><?= form_error('time', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="form-group">
            <label for="alamat" class="label-form">Tempat Kejadian</label>
            <textarea class="form-control" id="alamat" placeholder="Tempat Kejadian" name="alamat" value=" <?= set_value('alamat'); ?>"></textarea>
            <p class=" form-error"><?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="form-group">
            <label for="jk" class="label-form">Jenis Kasus</label>
            <select id="jk" class="form-control" name="jk" value="<?= set_value('jk'); ?>">
                <option>Pilih...</option>
                <option>Pencurian Dengan Pemberatan (curat)</option>
                <option>Pencurian Dengan Kekerasan (Curas)</option>
                <option>Penganiayaan Berat (Anirat)</option>
                <option>Pembunuhan</option>
                <option>Pencurian Kendaraan Bermotor (Curanmor)</option>
                <option>Judi</option>
                <option>Pemerasan/Ancaman</option>
                <option>Pemerkosaan</option>
                <option>Narkotika</option>
                <option>Kenakalan Remaja</option>
                <option>Lainnya</option>
            </select>
            <p class=" form-error"><?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="form-group">
            <label for="nopti" class="label-form">Nama Terlapor (Optional)</label>
            <input type="text" class="form-control" placeholder="Nama Terlapor" id="nopti" name="nopti" value="<?= set_value('nopti'); ?>">
            <p class=" form-error"><?= form_error('nopti', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="form-group">
            <label for="nkor" class="label-form">Nama Korban (Optional)</label>
            <input type="text" class="form-control" placeholder="Nama Korban" id="nkor" name="nkor" value="<?= set_value('nkor'); ?>">
            <p class=" form-error"><?= form_error('nkor', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="form-group">
            <label for="kronologi" class="label-form">Kronologi</label>
            <textarea class="form-control" id="kronologi" name="kronologi" placeholder="Kronologi" value=" <?= set_value('kronologi'); ?>"></textarea>
            <p class=" form-error"><?= form_error('kronologi', '<small class="text-danger pl-3">', '</small>'); ?></p>
        </div>
        <div class="tombol">
            <button class="btn btn-primary" type="submit">
                Lapor
            </button>
        </div>


    </form>

</div>