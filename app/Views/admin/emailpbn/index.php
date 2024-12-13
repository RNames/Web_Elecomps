<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Daftar Email PBN</h1>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('admin/emailpbn/tambah') ?>" class="btn btn-primary me-md-2"> + Tambah Email PBN</a>
            </div>
        </div>
        <div class="tab-content" id="orders-table-tab-content">
            <?php if (session()->has('success')) : ?>
                <div class="alert alert-success">
                    <?= session('success') ?>
                </div>
            <?php endif; ?>
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="text-center" valign="middle">Creator Email</th>
                                        <th class="text-center" valign="middle">Tanggal Buat</th>
                                        <th class="text-center" valign="middle">Alamat Email</th>
                                        <th class="text-center" valign="middle">Password Email</th>
                                        <th class="text-center" valign="middle">Info Lain</th>
                                        <th class="text-center" valign="middle">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($emails as $data) : ?>
                                        <tr>
                                            <td><?= $data->creator_emailpbn ?></td>
                                            <td><?= $data->tanggalbuat_emailpbn ?></td>
                                            <td><?= $data->alamat_emailpbn ?></td>
                                            <td><?= str_repeat('*', min(strlen($data->password_emailpbn), 20)) ?></td>
                                            <td><?= $data->infolain_emailpbn ?></td>
                                            <td valign="middle">
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $data->id_emailpbn ?>">
                                                        Hapus
                                                    </button>
                                                    <a href="<?= base_url('admin/emailpbn/edit') . '/' . $data->id_emailpbn ?>" class="btn btn-primary">Ubah</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <?= $pager->links() ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- //Pagination -->
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
</div><!--//app-wrapper-->

<!-- Modal Konfirmasi Hapus -->
<?php foreach ($emails as $data) : ?>
    <div class="modal fade" id="deleteModal<?= $data->id_emailpbn ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus email ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/emailpbn/delete') . '/' . $data->id_emailpbn ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection('content') ?>
