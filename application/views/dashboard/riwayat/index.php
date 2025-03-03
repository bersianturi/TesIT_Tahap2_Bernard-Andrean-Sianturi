<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Riwayat Rawat Jalan</h5>
                <a href="<?= base_url('rawat-jalan/tambah') ?>" class="btn rounded-pill btn-outline-primary">
                    <span class="icon-base bx bx-plus icon-sm me-2"></span>Pendaftaran Rawat Jalan
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pasien</th>
                                <th>Keluhan</th>
                                <th width="1%">Tanggal Daftar</th>
                                <th width="10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rawat_jalan as $rawat_jalan) : ?>
                                <tr>
                                    <td>
                                        <?= $rawat_jalan->nama_pasien ?>
                                    </td>
                                    <td><?= $rawat_jalan->keluhan ?></td>
                                    <td><?= $rawat_jalan->tgl_daftar ?></td>
                                    <td>
                                        <?php if ($rawat_jalan->status == 'Menunggu') : ?>
                                            <span class="badge text-bg-danger">Menunggu</span>
                                        <?php elseif ($rawat_jalan->status == 'Diperiksa') : ?>
                                            <span class="badge text-bg-warning">Diperiksa</span>
                                        <?php elseif ($rawat_jalan->status == 'Selesai') : ?>
                                            <span class="badge text-bg-primary">Selesai</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->