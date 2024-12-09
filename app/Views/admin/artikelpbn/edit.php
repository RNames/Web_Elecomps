<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Blog</h1>
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
                    <form action="<?= base_url('admin/artikelpbn/proses_edit/' . $artikelData->id_artikelpbn ?? '') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <?php if (isset($artikelData)) : ?>
                                    <input type="text" class="form-control" id="id_artikel" name="id_artikel" value="<?= $artikelData->id_artikelpbn ?>" hidden>

                                     <!-- Input PBN -->
                                     <div class="mb-3">
                                        <label for="id_pbn" class="form-label">Pilih PBN</label>
                                        <select class="form-select <?= ($validation && $validation->hasError('id_pbn')) ? 'is-invalid' : '' ?>" id="id_pbn" name="id_pbn">
                                            <option value="">Pilih PBN</option>
                                            <?php foreach ($pbns as $data) : ?>
                                                <option value="<?= $data->id_pbn ?>" <?= old('id_pbn', $artikelData->id_pbn) == $data->id_pbn ? 'selected' : '' ?>>
                                                    <?= $data->alamat_pbn ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if ($validation && $validation->hasError('id_pbn')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('id_pbn') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Input Judul Artikel Bahasa Indonesia -->
                                    <div class="mb-3">
                                        <label class="form-label">Judul Artikel (ID)</label>
                                        <input type="text" class="form-control" id="judul_artikelpbn" name="judul_artikelpbn" value="<?= old('judul_artikelpbn', $artikelData->judul_artikelpbn); ?>">
                                    </div>

                                    <!-- Input Deskripsi Artikel Bahasa Indonesia -->
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi Artikel (ID)</label>
                                        <textarea class="form-control tiny" id="deskripsi_artikelpbn" name="deskripsi_artikelpbn"><?= old('deskripsi_artikelpbn', $artikelData->deskripsi_artikelpbn); ?></textarea>
                                    </div>

                                    <!-- Input Creator Artikel -->
                                    <div class="mb-3">
                                        <label class="form-label">Creator Artikel</label>
                                        <input type="text" class="form-control" id="creator_artikelpbn" name="creator_artikelpbn" value="<?= old('creator_artikelpbn', $artikelData->creator_artikelpbn); ?>">
                                    </div>

                                    <!-- Input Tanggal Buat -->
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Buat</label>
                                        <input type="datetime-local" class="form-control" id="tanggalbuat_artikelpbn" name="tanggalbuat_artikelpbn" value="<?= old('tanggalbuat_artikelpbn', $artikelData->tanggalbuat_artikelpbn); ?>">
                                    </div>

                                    <!-- Input Status Upload -->
                                    <div class="mb-3">
                                        <label class="form-label">Status Upload</label>
                                        <select class="form-control" id="statusupload_artikelpbn" name="statusupload_artikelpbn">
                                            <option value="Belum Diupload" <?= old('statusupload_artikelpbn', $artikelData->statusupload_artikelpbn) == 'Belum Diupload' ? 'selected' : '' ?>>Belum Diupload</option>
                                            <option value="Sudah Diupload" <?= old('statusupload_artikelpbn', $artikelData->statusupload_artikelpbn) == 'Sudah Diupload' ? 'selected' : '' ?>>Sudah Diupload</option>
                                        </select>
                                    </div>

                                    <!-- Input Tanggal Upload -->
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Upload</label>
                                        <input type="datetime-local" class="form-control" id="tanggalupload_artikelpbn" name="tanggalupload_artikelpbn" value="<?= old('tanggalupload_artikelpbn', $artikelData->tanggalupload_artikelpbn); ?>">
                                    </div>

                                    <!-- Input Foto Artikel -->
                                    <div class="mb-3">
                                        <label class="form-label">Foto Artikel</label>
                                        <input type="file" class="form-control" id="foto_artikelpbn" name="foto_artikelpbn">
                                        <img width="150px" class="img-thumbnail" src="<?= base_url() . "asset-user/images/" . $artikelData->foto_artikelpbn; ?>">
                                        <?php if ($validation ?? false && $validation->hasError('foto_artikelpbn')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('foto_artikelpbn') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <p>*Ukuran gambar maksimal 572x572 pixels</p>
                                    <p>*Format gambar harus jpg/png/jpeg</p>

                                    <!-- Input Backlink -->
                                    <div class="mb-3">
                                        <label class="form-label">Backlink</label>
                                        <input type="url" class="form-control" id="alamatweb_backlink" name="alamatweb_backlink" placeholder="Masukkan URL backlink" value="<?= old('alamatweb_backlink', $artikelData->alamatweb_backlink); ?>">
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

<?= $this->endSection('content'); ?>
