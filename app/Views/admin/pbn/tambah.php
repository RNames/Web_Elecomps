<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan PBN</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Error</h4>
                            <p><?= session()->getFlashdata('error'); ?></p>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/pbn/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <!-- Email Dropdown -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <select class="form-select" id="email_pbn" name="email_pbn">
                                <option value="" selected disabled>Pilih Email PBN</option>
                                <?php if (!empty($emails)): ?>
                                    <?php foreach ($emails as $data): ?>
                                        <option value="<?= $data->id_emailpbn ?>" <?= old('email_pbn') == $data->id_emailpbn ? 'selected' : '' ?>>
                                            <?= $data->alamat_emailpbn ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option value="" disabled>Tidak ada email tersedia</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Creator</label>
                            <input type="text" class="form-control" id="creator_pbn" name="creator_pbn" value="<?= old('creator_pbn') ?>" placeholder="Masukkan nama creator">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Buat</label>
                            <input type="datetime-local" class="form-control" id="tanggalbuat_pbn" name="tanggalbuat_pbn" value="<?= old('tanggalbuat_pbn') ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat PBN</label>
                            <input type="text" class="form-control" id="alamat_pbn" name="alamat_pbn" value="<?= old('alamat_pbn') ?>" placeholder="Masukkan alamat PBN">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tema PBN</label>
                            <input type="text" class="form-control" id="tema_pbn" name="tema_pbn" value="<?= old('tema_pbn') ?>" placeholder="Masukkan tema PBN">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>