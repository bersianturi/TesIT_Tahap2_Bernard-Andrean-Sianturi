<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="<?= base_url('assets') ?>/img/icons/user.png" alt="user icon" class="rounded">
                            </div>
                        </div>
                        <p class="mb-1">Jumlah Pasien</p>
                        <h4 class="card-title mb-0"><?= $pasien ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="<?= base_url('assets') ?>/img/icons/patient.png" alt="patient icon" class="rounded">
                            </div>
                        </div>
                        <p class="mb-1">Jumlah Rawat Jalan</p>
                        <h4 class="card-title mb-0"><?= $rawat_jalan ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->