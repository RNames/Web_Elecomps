<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/banner1.png'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?= lang('Blog.titleOurproducts') . ' ' . $perusahaan->nama_perusahaan; ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"><?= lang('Blog.Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?= lang('Blog.headerProducts'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- All Services -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 style="color: #02abf0 !important;" class="display-6 text-primary"><?= lang('Blog.btnOurproducts'); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tbproduk as $produk) : ?>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <!-- Make the entire card clickable by wrapping it in an anchor tag -->
                    <a href="<?= base_url($locale . '/' . ($locale === 'en' ? 'service' : 'layanan') . '/' . (($locale === 'en') ? $produk->slug_en : $produk->slug_in)) ?>" class="card-link">
                        <div class="card h-100 hover-effect">
                            <div class="img-container">
                                <img data-src="/asset-user/images/<?= $produk->foto_produk ?>"
                                    alt="<?= (session('lang') === 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>"
                                    class="card-img-top img-fluid lazyload other-product-img">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; font-family: Open Sans, sans-serif;">
                                    <?= (session('lang') === 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                                </h4>
                                <p class="card-text">
                                    <?= (session('lang') === 'en') ? $produk->deskripsi_produk_en : $produk->deskripsi_produk_in; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <style>
        /* Scope the styles to the "All Services" section by targeting its parent */
        .site-section .hover-effect {
            transition: transform 0.3s ease;
        }

        .site-section .hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .site-section .card {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .site-section .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .site-section .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .site-section .other-product-img {
            border: 5px solid #ffffff;
            border-radius: 15px;
            padding: 5px;
            box-sizing: border-box;
        }

        .site-section .card-link {
            text-decoration: none;
            color: inherit;
        }

        /* Change description font color to match the product name only in this section */
        .site-section .card-text {
            color: inherit;
        }

        /* Adjust hover effect for the title and description */
        .site-section .card:hover .card-title,
        .site-section .card:hover .card-text {
            color: #02abf0 !important;
        }
    </style>

    <?= $this->endSection('content'); ?>