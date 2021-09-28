<!-- jumbotron awal -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Pelayanan Masyarakat <br> Untuk Indonesia Yang Lebih Aman</h1>
        <p class="lead">Pelayanan yang berbentuk aplikasi ini dibuat <br> sejak tahun 2021 yang bertujuan untuk memudahkan <br> masyarakat dalam melaporkan kejadian kriminal yang <br> dialami.</p>
        <p><a class=" btn btn-dark" href="<?= base_url('user/laporan'); ?>">Yuk Lapor!</a></p>
    </div>
</div>

<!-- jumbotron akhir -->

<!-- jumbrotron ke 2 -->
<div class="jumbotron jumbotron-fluid jumbotron2 ">
    <div class="container flex">
        <div class="pp-kapolri">
            <img src="<?= base_url('assets/image/kapolri.jpg'); ?>" alt="" class="kapolri animated">
        </div>
        <div class="kiri-profil">
            <h1 class="display-4">Profil Kapolri</h1>
            <h2 class="sigit">Jenderal Polisi Drs. Listyo Sigit Prabowo, M.Si.</h2>
            <p class="lead">Jenderal Polisi Drs. Listyo Sigit Prabowo, M.Si.<br> adalah seorang perwira tinggi Polri yang saat ini<br> menjabat sebagai Kepala Kepolisian Negara <br> Republik Indonesia.........</p>
            <a class=" btn btn-dark" data-toggle="modal" data-target="#myModal">Read More...</a>

        </div>
    </div>
</div>

<!-- jumbotron ke 2akhir -->

<!-- modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content modal-bg">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Perhatian!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Anda akan dialihkan ke halaman web humas.polri.go.id!
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="https://humas.polri.go.id/profil/pimpinan-polri/" target="_blank" class="btn btn-primary">Lanjutkan</a>
            </div>

        </div>
    </div>
</div>

<!-- modal akhir -->