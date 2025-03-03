<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-6 gy-6">
            <div class="col-12 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Pendaftaran Rawat Jalan</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('rawat-jalan/tambah') ?>" method="post">
                            <div class="mb-6">
                                <label class="form-label" for="nomor_antrian">Nomor Antrian</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nomor_antrian" name="nomor_antrian" value="<?= $nomor_antrian ?>"
                                    readonly />
                                <?= form_error('nomor_antrian') ?>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="id_pasien">Pasien</label>
                                <select class="form-select <?php if (form_error('id_pasien')) {
                                                                echo 'is-invalid';
                                                            } ?>" id="id_pasien" aria-label="Pasien" name="id_pasien">
                                    <option selected disabled hidden>Pilih Pasien</option>
                                    <?php foreach ($pasien as $pasien) : ?>
                                        <option value="<?= $pasien->id_pasien ?>" <?php if (set_value('id_pasien') === $pasien->id_pasien) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $pasien->nama_pasien ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_pasien') ?>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="keluhan">Keluhan</label>
                                <textarea class="form-control <?php if (form_error('keluhan')) {
                                                                    echo 'is-invalid';
                                                                } ?>" id="keluhan" rows="3" name="keluhan"><?= set_value('keluhan') ?></textarea>
                                <?= form_error('keluhan') ?>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="tglDaftar">Tanggal Daftar</label>
                                <input class="form-control <?php if (form_error('tgl_daftar')) {
                                                                echo 'is-invalid';
                                                            } ?>" type="date" id="tglDaftar" name="tgl_daftar" value="<?= date('Y-m-d') ?>">
                                <?= form_error('tgl_daftar') ?>
                            </div>
                            <div class="mb-6">
                                <label class="form-label" for="status">Status</label>
                                <select class="form-select <?php if (form_error('status')) {
                                                                echo 'is-invalid';
                                                            } ?>" id="status" aria-label="Status" name="status">
                                    <option selected disabled hidden>Pilih Status</option>
                                    <option value="Menunggu" <?php if (set_value('status') === 'Menunggu') {
                                                                    echo 'selected';
                                                                } ?>>Menunggu</option>
                                    <option value="Diperiksa" <?php if (set_value('status') === 'Diperiksa') {
                                                                    echo 'selected';
                                                                } ?>>Diperiksa</option>
                                    <option value="Selesai" <?php if (set_value('status') === 'Selesai') {
                                                                echo 'selected';
                                                            } ?>>Selesai</option>
                                </select>
                                <?= form_error('status') ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->