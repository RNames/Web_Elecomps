<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Email PBN</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Error</h4>
                            <p><?php echo session()->getFlashdata('error'); ?></p>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('admin/emailpbn/proses_edit/' . $emailData->id_emailpbn ?? '') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <?php if (isset($emailData)) : ?>
                                    <input type="text" class="form-control" id="id_emailpbn" name="id_emailpbn" value="<?= $emailData->id_emailpbn ?>" hidden>

                                    <!-- Input for Creator Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Creator Email</label>
                                        <input type="text" class="form-control" id="creator_emailpbn" name="creator_emailpbn" value="<?= $emailData->creator_emailpbn; ?>" required>
                                    </div>

                                    <!-- Input for Tanggal Buat Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Buat</label>
                                        <input type="datetime-local" class="form-control" id="tanggalbuat_emailpbn" name="tanggalbuat_emailpbn" value="<?= $emailData->tanggalbuat_emailpbn; ?>" required>
                                    </div>

                                    <!-- Input for Alamat Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Alamat Email</label>
                                        <input type="email" class="form-control" id="alamat_emailpbn" name="alamat_emailpbn" value="<?= $emailData->alamat_emailpbn; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password Email</label>
                                        <input type="text" class="form-control" id="password_emailpbn" name="password_emailpbn" value="<?= $emailData->password_emailpbn; ?>" required>
                                    </div>

                                    <!-- Input for Info Lain -->
                                    <div class="mb-3">
                                        <label class="form-label">Info Lain</label>
                                        <textarea class="form-control" id="infolain_emailpbn" name="infolain_emailpbn" rows="3"><?= $emailData->infolain_emailpbn; ?></textarea>
                                    </div>
                                <?php endif; ?>
                            </div>
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
            </div><!--//app-card-->
        </div><!--//row-->

        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content') ?>