<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>
<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<style>
    .card {
        cursor: pointer;
        transition: box-shadow 0.3s ease;
    }

    .card-link,
    .img-link {
        display: block;
        text-decoration: none;
        color: inherit;
        height: 100%;
        width: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card-img-top {
        height: 200px;
        width: 100%;
        object-fit: cover;
        border: 10px solid white;
        border-radius: 15px;
    }

    .card-title a {
        color: black;
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .card-title a:hover {
        color: #02abf0;
    }

    .card-title {
        margin-bottom: 1rem;
    }

    .card-body p {
        text-align: center;
    }

    .card-title,
    .card-text {
        color: black;
        transition: color 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card:hover .card-title,
    .card:hover .card-text {
        color: #02abf0;
    }

    .card-title {
        text-align: center;
    }

    .hover-effect {
        transition: transform 0.3s ease;
    }

    .hover-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<!-- Products Start -->
<div class="container-fluid py-5 my-5">
    <div class="container py-5">
        <div class="row">
            <div class="section-title text-center mx-auto wow fadeInUp mb-0" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6" style="color: #02abf0;"><?php echo lang('Blog.btnOurproducts'); ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php $count = 0;
            foreach ($tbproduk as $produk) :
                if ($count < 3) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 hover-effect">
                            <a href="<?= base_url($locale . '/' . ($locale === 'en' ? 'service' : 'layanan') . '/' . (($locale === 'en') ? $produk->slug_en : $produk->slug_in)) ?>" class="card-link">
                                <img data-src="asset-user/images/<?= $produk->foto_produk; ?>"
                                    alt="<?php echo (lang('Blog.Languange') == 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>" class="card-img-top img-fluid lazyload">
                                <div class="card-body d-flex align-items-center justify-content-center flex-column">
                                    <h4 class="card-title" style="font-size: 20px; font-family: Open Sans,sans-serif;">
                                        <?php echo (lang('Blog.Languange') == 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                                    </h4>
                                    <p class="card-text">
                                        <?php echo (lang('Blog.Languange') == 'en') ? $produk->deskripsi_produk_en : $produk->deskripsi_produk_in; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

            <?php
                    $count++;
                }
            endforeach; ?>
        </div>
    </div>

    <br>
    <br>
    <div class="d-flex justify-content-center">
        <a href="<?= base_url($locale . '/product') ?>" style="background-color: #02abf0; border-color:#02abf0" class="btn btn-lg px-4 btn-primary"><?php echo lang('Blog.btnMoreproducts'); ?></a>
    </div>
</div>
<!-- Products End -->

<!-- About Start -->
<div class="container-fluid product py-2 wow fadeInUp" data-wow-delay="0.1s" style="background-image: url('asset-user/img/about-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.8); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <?php foreach ($profil as $descper) : ?>
            <div class="row gx-5 align-items-center" style="min-height: 500px;">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative h-100 d-flex align-items-center justify-content-center">
                        <img class="rounded wow zoomIn lazyload" data-wow-delay="0.9s" data-src="asset-user/images/<?= $descper->foto_utama; ?>" style="object-fit: contain; object-position: center; max-width: 75%; max-height: 100%;">
                    </div>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <div class="mb-1">
                        <div>
                            <h5 class="mb-2 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary" style="border: none !important;margin-bottom: 0px !important;padding-bottom:0px !important;"><?php echo lang('Blog.titleAbout'); ?></h5>
                        </div>
                        <h3 class="display-5 mb-0 section-title" style="padding-top: 0px;"><?= $descper->nama_perusahaan; ?></h3>
                    </div>

                    <p class="mb-4">
                        <?php echo (lang('Blog.Languange') == 'en') ? character_limiter($descper->deskripsi_perusahaan_en, 700) : character_limiter($descper->deskripsi_perusahaan_in, 700); ?>
                    </p>
                    <div class="button">
                        <a href="<?= base_url($locale . '/about') ?>" class="btn btn-outline-primary btn-lg rounded-border"><?php echo lang('Blog.btnReadmore'); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- About End -->

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6" style="color:#02abf0;"><?php echo lang('Blog.headerArticle'); ?></h1>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php
            shuffle($artikelterbaru);
            $artikelterbaru_limited = array_slice($artikelterbaru, 0, 3);
            foreach ($artikelterbaru_limited as $row) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 hover-effect" style="font-size: 14px;">
                        <a href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>" class="img-link">
                            <img data-src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>" alt="<?= $locale === 'id' ? strip_tags($row->judul_artikel) : strip_tags($row->judul_artikel_en); ?>" class="card-img-top img-fluid lazyload" style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h4 class="card-title mb-0" style="font-size: 20px;">
                                    <a href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>"><?= $locale === 'id' ? strip_tags($row->judul_artikel) : strip_tags($row->judul_artikel_en); ?></a>
                                </h4>
                                <p class="mb-0" style="font-size: 12px; position: absolute; bottom: 10px; right: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                                    <?= date('d F Y', strtotime($row->created_at)); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- News With Sidebar End -->

<?= $this->endSection(); ?>