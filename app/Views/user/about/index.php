<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 200px; display: flex; align-items: center; justify-content: center; background-image: url('<?= base_url('./asset-user/images/banner1.png'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?= lang('Blog.titleAboutUs') . ' ' . $perusahaan->nama_perusahaan; ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"><?= lang('Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?= lang('Blog.headerAbout'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid product py-2 wow fadeInUp" data-wow-delay="0.1s" style="background-image: url('<?= base_url('./asset-user/images/about-bg.png'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container" style="background-color: rgba(255, 255, 255, 0.8); padding: 30px;"> <!-- Add transparent background for the content -->
        <?php foreach ($profil as $descper) : ?>
            <div class="row gx-5 align-items-center" style="min-height: 500px;">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative h-100 d-flex align-items-center justify-content-center">
                        <img class="rounded wow zoomIn lazyload" data-wow-delay="0.9s" data-src="<?= base_url('asset-user/images/' . $descper->foto_utama); ?>" style="object-fit: contain; object-position: center; max-width: 75%; max-height: 100%;">
                    </div>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <div class="mb-1">
                        <div>
                            <h5 class="mb-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary" style="border: none !important;margin-bottom: 0px !important;padding-bottom:0px !important;"><?= lang('Blog.titleAbout'); ?></h5>
                        </div>
                        <h3 class="display-5 mb-0 section-title" style="padding-top: 0px;"><?= $descper->nama_perusahaan; ?></h3>
                    </div>

                    <p class="mb-4">
                        <?= $locale === 'id' ? character_limiter($descper->deskripsi_perusahaan_in) : character_limiter($descper->deskripsi_perusahaan_en); ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>
