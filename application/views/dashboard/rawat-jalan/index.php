<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Rawat Jalan</h5>
                <a href="<?= base_url('rawat-jalan/tambah') ?>" class="btn rounded-pill btn-outline-primary">
                    <span class="icon-base bx bx-plus icon-sm me-2"></span>Pendaftaran Rawat Jalan
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No. Antrian</th>
                                <th>Pasien</th>
                                <th>Keluhan</th>
                                <th width="1%">Tanggal Daftar</th>
                                <th width="10%">Status</th>
                                <th width="1%">Aksi</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rawat_jalan as $rawat_jalan) : ?>
                                <tr>
                                    <td><?= $rawat_jalan->nomor_antrian ?></td>
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

                                    <td>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <a href="<?= base_url('rawat-jalan/menunggu/' . $rawat_jalan->id_pendaftaran) ?>" class="btn btn-outline-danger <?php if ($rawat_jalan->status == 'Menunggu') echo 'disabled'; ?>" data-bs-toggle="tooltip"
                                                data-bs-offset="0,6"
                                                data-bs-placement="top"
                                                data-bs-html="true"
                                                title="<i class='icon-base bx bx-time icon-xs' ></i> <span>Menunggu</span>">
                                                <i class="icon-base bx bx-time"></i>
                                            </a>
                                            <a href="<?= base_url('rawat-jalan/diperiksa/' . $rawat_jalan->id_pendaftaran) ?>" class="btn btn-outline-warning <?php if ($rawat_jalan->status == 'Diperiksa') echo 'disabled'; ?>" data-bs-toggle="tooltip"
                                                data-bs-offset="0,6"
                                                data-bs-placement="top"
                                                data-bs-html="true"
                                                title="<i class='icon-base bx bx-task icon-xs' ></i> <span>Diperiksa</span>">
                                                <i class="icon-base bx bx-task"></i>
                                            </a>
                                            <a href="<?= base_url('rawat-jalan/selesai/' . $rawat_jalan->id_pendaftaran) ?>" class="btn btn-outline-primary <?php if ($rawat_jalan->status == 'Selesai') echo 'disabled'; ?>" data-bs-toggle="tooltip"
                                                data-bs-offset="0,6"
                                                data-bs-placement="top"
                                                data-bs-html="true"
                                                title="<i class='icon-base bx bx-check-double icon-xs' ></i> <span>Selesai</span>">
                                                <i class="icon-base bx bx-check-double"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('rawat-jalan/ubah/' . $rawat_jalan->id_pendaftaran) ?>"><i class="icon-base bx bx-edit-alt me-1"></i> Ubah</a>
                                                <a class="dropdown-item text-danger" href="<?= base_url('rawat-jalan/hapus/' . $rawat_jalan->id_pendaftaran) ?>"><i class="icon-base bx bx-trash me-1"></i> Hapus</a>
                                            </div>
                                        </div>
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