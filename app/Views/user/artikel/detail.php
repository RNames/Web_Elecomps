<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<style>
    .article-title {
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        width: 100%;
    }

    .article-item {
        display: flex;
        height: 110px;
        /* Tinggi card sesuai dengan tinggi gambar */
        overflow: hidden;
        /* Sembunyikan overflow */
    }

    .article-image {
        width: 110px;
        height: 110px;
        object-fit: cover;
    }

    .article-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        padding: 0 1rem;
        white-space: normal;
        /* Izinkan teks membungkus ke baris berikutnya */
        overflow: hidden;
        /* Sembunyikan overflow yang tidak perlu */
        text-overflow: ellipsis;
        /* Tambahkan ellipsis pada teks yang terlalu panjang */
    }

    .popular-article-card {
        border: 1px solid #ddd;
        /* Light border around each card */
        border-radius: 5px;
        /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        background-color: #fff;
        /* Card background color */
        padding: 10px;
        /* Padding inside the card */
        margin-bottom: 10px;
        /* Spacing between cards */
        width: 100%;
        /* Full width within the sidebar */
        display: flex;
        /* Flexbox for layout */
        align-items: center;
        /* Center items vertically */
        position: relative;
        /* Allow positioning adjustments */
    }

    .popular-article-card img {
        border-radius: 5px;
        /* Rounded corners for images */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional shadow to enhance the border effect */
        width: 60px;
        /* Width for images */
        height: 60px;
        /* Height for images */
        object-fit: cover;
        /* Ensure image covers the space without distortion */
        margin-right: 20px;
        /* Increase spacing between image and text */
        transform: translateX(-10px);
        /* Slightly move the image to the left */
    }

    .popular-article-card .card-body {
        flex: 1;
        /* Allow text to take remaining space */
        transform: translateX(10px);
        /* Slightly move the text to the right */
    }

    .popular-article-card h6 {
        font-size: 14px;
        /* Font size for titles */
        margin: 0;
        /* Remove default margins */
    }

    .popular-article-card small {
        font-size: 12px;
        /* Font size for dates */
        color: #777;
        /* Lighter color for dates */
    }

    .card-link,
    .popular-card-link {
        text-decoration: none;
        /* Remove default underline from links */
        color: inherit;
        /* Inherit text color from parent */
        display: block;
        /* Ensure the link takes up the entire card */
    }

    .card,
    .popular-article-card {
        transition: transform 0.3s, box-shadow 0.3s;
        /* Smooth transition for hover effect */
    }

    .card:hover,
    .popular-article-card:hover {
        transform: scale(1.03);
        /* Slightly zoom the card */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        /* Enhance shadow on hover */
    }

    .card-link:hover .card-body h4,
    .popular-card-link:hover .card-body h6 {
        color: #02abf0;
        /* Change text color to #02abf0 on hover */
    }

    .card {
        max-width: 100%;
        width: 100%;
        margin: auto;
        /* Keep card centered */
    }

    .img-container {
        width: 100%;
        border-radius: 5px;
        height: 300px;
        /* Adjust this height based on card height */
        overflow: hidden;
        padding: 10px;
        box-sizing: border-box;
        background-color: #fff;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* This ensures the full image is visible without being cut */
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .img-container img {
        object-fit: scale-down;
        /* Use this if you prefer the image to not grow larger than its natural size */
    }

    .card-body {
        width: 90%;
        /* Slightly smaller than the card */
        margin: 0 auto;
        padding: 1rem 1rem 1rem 0;
    }

    .card-body p,
    .card-body h4,
    .card-body .card-text {
        text-align: left;
        /* Align text to the left */
    }

    .card-title {
        font-size: 28px;
    }

    .popular-article-item h6 {
        font-size: 16px;
    }

    .popular-article-item small {
        color: #777;
    }

    /* News Detail Styles */
    .news-detail-container {
        border: 1px solid #ddd;
        /* Border around the detail section */
        border-radius: 10px;
        /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Subtle shadow */
        background-color: #fff;
        /* Card background color */
        padding: 20px;
        /* Padding inside the card */
        margin-bottom: 30px;
        /* Space below the card */
    }

    .news-detail-container img {
        border-radius: 10px;
        /* Rounded corners for images */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Shadow to enhance the border effect */
    }

    .hover-effect {
        transition: transform 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: tambahkan bayangan untuk efek muncul */
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        /* Atur perubahan transformasi sesuai keinginan */
    }

    .article-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container-fluid page-header py-5" style="background-image: url('<?= base_url('./asset-user/images/hero_14.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurarticle');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?></h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"> <?php echo lang('Blog.headerHome'); ?></a></li>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerArticle');  ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>

<!--News Detail -->
<div class="container-fluid pt-5 mb-3" style="background-image: url('<?= base_url('asset-user/img/product-bg-1.png'); ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="news-detail-container position-relative mb-3">
                    <img style="box-shadow: none;" class="img-fluid w-100" src="<?= base_url('asset-user/images/' . $artikel->foto_artikel); ?>" style="object-fit: cover;">
                    <div style="border-radius: 10px;" class="bg-white border p-4">
                        <div class="mb-3">
                            <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($artikel->created_at)); ?></a>
                        </div>
                        <h1 class="display-5 mb-2 article-title"><?= $locale === 'id' ? strip_tags($artikel->judul_artikel) : strip_tags($artikel->judul_artikel_en) ?></h1>
                        <p class="fs-5">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $artikel->deskripsi_artikel_en;
                            } else {
                                echo $artikel->deskripsi_artikel;
                            } ?>
                        </p>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="popular-articles bg-light p-3">
                    <h3 class="text-white p-2" style="background-color: #02abf0;"><?php echo lang('Blog.alsoRead');?></h3>
                    <?php foreach ($artikel_lain as $artikel_item) : ?>
                        <a href="<?= base_url($locale . '/' . ($locale === 'en' ? 'articles' : 'artikel') . '/' . ($locale === 'id' ? $artikel_item->slug_in : $artikel_item->slug_en)) ?>" class="popular-card-link">
                            <div class="card popular-article-card mb-3">
                                <div class="card-body d-flex">
                                    <img src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel) ?>" class="img-fluid mr-3" style="width: 80px; height: 80px; object-fit: cover;">
                                    <div>
                                        <h6><?= session('lang') === 'id' ? strip_tags($artikel_item->judul_artikel) : strip_tags($artikel_item->judul_artikel_en) ?></h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($artikel_item->created_at)) ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>