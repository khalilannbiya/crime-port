<div>
    <div style="text-align: center;">
        <h1 style="font-size:14px;">KEPOLISIAN NEGARA REPUBLIK INDONESIA</h1>
        <h2 style="font-size:12px;">DAERAH KABUPATEN KARAWANG</h2>
        <h1 style="font-size:14px;">DIREKTORAT RESERSE KRIMINAL</h1>
    </div>
    <div style="margin-top: 3rem;">
        <h1 style="text-decoration: underline; font-size:12px">PRO. JUSTITIA.</h1>
        <h1 style="font-size:12px;">LAPORAN POLISI</h1>
        <h1 style="font-size:16px;">Nomor: LP / / / <?= date('Y', $date_created); ?> / Dit Reskrim</h1>
    </div>
    <hr>
    <div style="text-align: left;">
        <h1 style="font-size: 13px; text-decoration:underline;">YANG MELAPORKAN :</h1>
        <table style="text-align: left; line-height: 1.7rem; margin-top:1rem; font-size:12px;">
            <tr>
                <th>1.</th>
                <td><strong>Nama</strong> </td>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>2.</th>
                <td><strong>Tanggal Lahir</strong> </td>
                <th>:</th>
                <td><?= date('d F Y', $ttl); ?></td>
            </tr>
            <tr>
                <th>3.</th>
                <td><strong>Agama</strong> </td>
                <th>:</th>
                <td><?= $agama; ?></td>
            </tr>
            <tr>
                <th>4.</th>
                <td><strong>Pekerjaan</strong> </td>
                <th>:</th>
                <td><?= $kerja; ?></td>
            </tr>
            <tr>
                <th>5.</th>
                <td><strong>Kewarganegaraan</strong> </td>
                <th>:</th>
                <td><?= $negara; ?></td>
            </tr>
            <tr>
                <th>6.</th>
                <td><strong>Alamat</strong> </td>
                <th>:</th>
                <td><?= $address; ?></td>
            </tr>
            <tr>
                <th>7.</th>
                <td><strong>Email</strong> </td>
                <th>:</th>
                <td><?= $email; ?></td>
            </tr>
            <tr>
                <th>8.</th>
                <td><strong>Nomer Telepon</strong> </td>
                <th>:</th>
                <td><?= $noHp; ?></td>
            </tr>
            <tr>
                <th>9.</th>
                <td><strong>NIK</strong> </td>
                <th>:</th>
                <td><?= $nik; ?></td>
            </tr>
        </table>
        <hr>
        <h1 style="font-size: 13px; text-decoration:underline;">HAL YANG DILAPORKAN : </h1>
        <ol style="font-size: 12px;">
            <li style="margin-bottom: 1rem;"><strong>Waktu Kejadian</strong><span>:</span> <span><?= date('d F Y', $time); ?></span></li>
            <li style="margin-bottom: 1rem;"><strong>Tampat Kejadian</strong> <span>:</span> <span><?= $alamat; ?></span></li>
            <li style="margin-bottom: 1rem;"><strong>Jenis Kasus</strong> <span>:</span> <span><?= $jk; ?></span></li>
            <li style="margin-bottom: 1rem;"><strong>Nama Terlapor</strong> <span>:</span> <span><?= $nopti; ?></span></li>
            <li style="margin-bottom: 1rem;"><strong>Nama Korban</strong> <span>:</span> <span><?= $nkor; ?></span></li>
            <li style="margin-bottom: 1rem; line-height:1.5rem;"><strong>Kronologi </strong> <span>:</span> <span><?= $kronologi; ?></span></li>
            <li style="margin-bottom: 1rem;"><strong>Dilaporkan Pada Hari </strong> <span>:</span> <span><?= date('l d F Y, H : i : s', $date_created); ?></span></li>
        </ol>
        <hr>
        <p style="font-size:12px;">Pengadu/pelapor membenarkan semua keterangannya.</p>
        <p style="text-align: right; font-size:12px; margin-right:3rem;"> <strong>Pelapor</strong> </p>
        <hr>
        <h1 style="font-size: 13px; text-decoration:underline;">TINDAKAN YANG DIAMBIL :</h1>
        <ul style="font-size: 12px;">
            <li>Membuat Laporan Polisi</li>
        </ul>
        <p style="text-align: center; margin-top:2rem; font-size:12px;">Dicetak Pada <?= date('l d F Y, H : i : s'); ?></p>
        <hr>
    </div>
</div>