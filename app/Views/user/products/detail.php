<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/banner1.png'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurproducts');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerProducts'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>


<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <h1 style="color:#02abf0">
                    <b>
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo $tbproduk->nama_produk_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $tbproduk->nama_produk_in;
                        } ?>
                    </b>
                </h1>
                <p>
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo $tbproduk->deskripsi_produk_en;
                    } elseif (lang('Blog.Languange') == 'in') {
                        echo $tbproduk->deskripsi_produk_in;
                    } ?>
                </p>
            </div>
            <div class="col-md-4 sidebar">
                <div class="project-item-title">
                    <img data-src="/asset-user/images/<?= $tbproduk->foto_produk ?>" alt="
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo $tbproduk->nama_produk_en;
                    } ?>
                     <?php if (lang('Blog.Languange') == 'in') {
                            echo $tbproduk->nama_produk_in;
                        } ?>" class="img-fluid lazyload">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<?= $this->endSection('content'); ?>