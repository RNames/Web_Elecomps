<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/banner1.png'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?= lang('Blog.titleActivities') . ' ' . $perusahaan->nama_perusahaan; ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"><?= lang('Blog.Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?= lang('Blog.headerActivities'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6" style="color: #02abf0;"><?= lang('Blog.headerActivities'); ?></h1>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center gx-2"> <!-- Reduce gutter (spacing between columns) -->
            <?php
            $count = count($tbaktivitas); // Get the number of items
            foreach ($tbaktivitas as $aktivitas) :
            ?>
                <div class="col-md-<?php echo ($count <= 2) ? '6' : '4'; ?> mb-4 col-lg-4"> <!-- Adjust column size for 2 items -->
                    <div class="card h-100 hover-effect"> <!-- Keeping hover effect -->
                        <!-- Use slug_in or slug_en in the link -->
                        <a href="<?= base_url($locale . '/' . ($locale === 'en' ? 'activities' : 'aktivitas') . '/' . (($locale === 'en') ? $aktivitas->slug_en : $aktivitas->slug_in)) ?>">
                            <div class="img-container">
                                <img data-src="../asset-user/images/<?= $aktivitas->foto_aktivitas ?>"
                                    alt="<?= (session('lang') === 'en') ? $aktivitas->nama_aktivitas_en : $aktivitas->nama_aktivitas_in; ?>"
                                    class="card-img-top img-fluid lazyload">
                            </div>
                        </a>
                        <div class="card-body text-center"> <!-- Center text for consistency -->
                            <h5 class="card-title">
                                <a href="<?= base_url($locale . '/activities/' . ((session('lang') === 'en') ? $aktivitas->slug_en : $aktivitas->slug_in)) ?>">
                                    <?= (session('lang') === 'en') ? $aktivitas->nama_aktivitas_en : $aktivitas->nama_aktivitas_in; ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
    /* Reduce gap between columns */
    .gx-2 {
        gap: 10px;
        /* Reduce the spacing between columns */
    }

    /* Adjust margin for centered cards */
    .col-md-6 {
        max-width: 45%;
        /* Make the card width slightly narrower when centered */
    }

    /* Hover and card styles remain the same */
    .hover-effect {
        transition: transform 0.3s ease, color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hover-effect:hover {
        transform: translateY(-5px);
    }

    .img-container {
        width: 100%;
        height: 250px;
        overflow: hidden;
        padding: 10px;
        background-color: white;
        border-radius: 10px;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .card-body {
        padding: 1rem;
        width: 100%;
    }

    .card-title {
        font-size: 20px;
        word-wrap: break-word;
        text-align: center;
        transition: color 0.3s ease;
        font-family: Open Sans, sans serif;
    }

    .card-title a {
        color: black;
        text-decoration: none;
    }

    .hover-effect:hover .card-title a {
        color: #02abf0 !important;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
<?= $this->endSection('content'); ?>