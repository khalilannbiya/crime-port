<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <!-- Bacaan Dashboard -->
                <div class="col-lg-6 col-7">
                    <h1 class="h1 text-white d-inline-block mb-4">My Profile</h1>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 order-xl-2 container">
                    <div class="card card-profile bayangan ">
                        <img src="<?= base_url('assets/image/mobil.jpg'); ?>" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/image/avatar.jpeg'); ?>" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="h3">
                                    <?= $user['nama']; ?>
                                </h5>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?= $user['nik']; ?>
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i><?= $user['email']; ?>
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>
                                    <p class="card-text"><small class="text-muted">Bergabung Sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>