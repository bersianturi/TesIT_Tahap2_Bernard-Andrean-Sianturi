<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-6 gy-6">
            <div class="col-12 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Ubah Data Pasien</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($pasien as $pasien) : ?>
                            <form action="<?= base_url('pasien/ubah/') . $pasien->id_pasien ?>" method="post">
                                <input type="hidden" name="id_pasien" value="<?= $pasien->id_pasien ?>">
                                <div class="mb-6">
                                    <label class="form-label" for="nomor_rm">Nomor Rekam Medis</label>
                                    <input
                                        type="text"
                                        class="form-control <?php if (form_error('nomor_rm')) {
                                                                echo 'is-invalid';
                                                            } ?>"
                                        id="nomor_rm" name="nomor_rm" placeholder="Masukkan Nomor Rekam Medis" value="<?= $pasien->nomor_rm ?>" />
                                    <?= form_error('nomor_rm') ?>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="nama">Nama Pasien</label>
                                    <input type="text" class="form-control <?php if (form_error('nama')) {
                                                                                echo 'is-invalid';
                                                                            } ?>" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $pasien->nama_pasien ?>" />
                                    <?= form_error('nama') ?>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control <?php if (form_error('tanggal_lahir')) {
                                                                    echo 'is-invalid';
                                                                } ?>" type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pasien->tanggal_lahir ?>">
                                    <?= form_error('tanggal_lahir') ?>
                                </div>
                                <div class="mb-6">
                                    <small class="fw-medium d-block">Jenis Kelamin</small>
                                    <div class="form-check form-check-inline mt-4">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="jenis_kelamin"
                                            id="laki_laki"
                                            value="L"
                                            <?php if ($pasien->jenis_kelamin === "L") {
                                                echo 'checked';
                                            } ?> />
                                        <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="jenis_kelamin"
                                            id="perempuan"
                                            value="P"
                                            <?php if ($pasien->jenis_kelamin === "P") {
                                                echo 'checked';
                                            } ?> />
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                    <?= form_error('jenis_kelamin') ?>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input
                                        type="text"
                                        class="form-control <?php if (form_error('alamat')) {
                                                                echo 'is-invalid';
                                                            } ?>"
                                        id="alamat"
                                        name="alamat"
                                        placeholder="Masukkan Alamat"
                                        aria-label="Masukkan Alamat"
                                        value="<?= $pasien->alamat ?>" />
                                    <?= form_error('alamat') ?>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="no_telp">No Telp</label>
                                    <input
                                        type="text"
                                        id="no_telp"
                                        name="no_telp"
                                        class="form-control <?php if (form_error('no_telp')) {
                                                                echo 'is-invalid';
                                                            } ?>"
                                        placeholder="081234567890"
                                        value="<?= $pasien->no_telp ?>" />
                                    <?= form_error('no_telp') ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->