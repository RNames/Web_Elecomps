<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Email PBN</h1>
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

                    <form action="<?= base_url('admin/emailpbn/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label">Creator Email</label>
                            <input type="text" class="form-control" id="creator_emailpbn" name="creator_emailpbn" value="<?= old('creator_emailpbn') ?>" placeholder="Masukkan nama pembuat email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Buat</label>
                            <input type="datetime-local" class="form-control" id="tanggalbuat_emailpbn" name="tanggalbuat_emailpbn" value="<?= old('tanggalbuat_emailpbn') ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="alamat_emailpbn" name="alamat_emailpbn" value="<?= old('alamat_emailpbn') ?>" placeholder="Masukkan alamat email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Email</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password_emailpbn" name="password_emailpbn" value="<?= old('password_emailpbn') ?>" placeholder="Masukkan password email">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="cursor: pointer; border-left: 1px solid #ced4da; padding: 0 10px; border-radius: 0;">
                                    <i class="bi bi-eye" id="eyeIcon"></i> <!-- Ikon mata -->
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Info Lain</label>
                            <textarea class="form-control" id="infolain_emailpbn" name="infolain_emailpbn" rows="4" placeholder="Tambahkan info lain jika diperlukan"><?= old('infolain_emailpbn') ?></textarea>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col">
                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pastikan Bootstrap Icons sudah dimuat -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordField = document.getElementById('password_emailpbn');
        var eyeIcon = document.getElementById('eyeIcon');

        // Toggle antara password dan text
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('bi-eye');
            eyeIcon.classList.add('bi-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('bi-eye-slash');
            eyeIcon.classList.add('bi-eye');
        }
    });
</script>

<?= $this->endSection('content'); ?>