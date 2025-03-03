<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Pasien</h5>
                <a href="<?= base_url('pasien/tambah') ?>" class="btn rounded-pill btn-outline-primary">
                    <span class="icon-base bx bx-plus icon-sm me-2"></span>Pasien baru
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No Rekam Medis</th>
                                <th width="30%">Nama</th>
                                <th width="1%">Tanggal Lahir</th>
                                <th width="1%">Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th width="1%">No Telp</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $row) : ?>
                                <tr>
                                    <td>
                                        <?= $row->nomor_rm ?>
                                    </td>
                                    <td>
                                        <?= $row->nama_pasien ?>
                                    </td>
                                    <td><?= $row->tanggal_lahir ?></td>
                                    <td><?php if ($row->jenis_kelamin == 'L') echo 'Laki-laki';
                                        else echo 'Perempuan';  ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->no_telp ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('pasien/ubah/' . $row->id_pasien) ?>"><i class="icon-base bx bx-edit-alt me-1"></i> Ubah</a>
                                                <a class="dropdown-item text-danger" href="<?= base_url('pasien/hapus/' . $row->id_pasien) ?>"><i class="icon-base bx bx-trash me-1"></i> Hapus</a>
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