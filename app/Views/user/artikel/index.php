<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/banner1.png'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?= lang('Blog.titleOurarticle') . ' ' . $perusahaan->nama_perusahaan; ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url($locale . '') ?>"> <?= lang('Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?= lang('Blog.headerArticle'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>

<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <!-- Main content column with adjusted card width -->
            <div class="col-lg-8 col-md-12">
                <?php foreach ($artikelterbaru as $row) : ?>
                    <a href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>" class="card-link">

                        <div class="card mb-4 hover-effect" style="width: 100%;"> <!-- Adjusted width here -->
                            <div class="img-container">
                                <img src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>" alt="<?= $row->judul_artikel; ?>" class="card-img-top img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <!-- Title switch based on language -->
                                    <?= $locale === 'id' ? strip_tags($row->judul_artikel) : strip_tags($row->judul_artikel_en); ?>
                                </h4>
                                <p class="card-text">
                                    <!-- Description switch based on language -->
                                    <?= substr(strip_tags(session('lang') === 'id' ? $row->deskripsi_artikel : $row->deskripsi_artikel_en), 0, 100) ?>...
                                </p>
                                <p class="small text-muted"><?= date('d F Y', strtotime($row->created_at)); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Sidebar with popular articles -->
            <div class="col-lg-4 col-md-12">
                <div class="popular-articles bg-light p-3">
                    <h3 class="text-white p-2" style="background-color: #02abf0;"><?= lang('Blog.popularArticles'); ?></h3>
                    <?php foreach ($artikelterbaru as $artikel_item) : ?>
                        <a href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $artikel_item->slug_en : $artikel_item->slug_in)) ?>" class="popular-card-link">

                            <div class="card popular-article-card mb-3">
                                <div class="card-body d-flex">
                                    <img src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel) ?>" class="img-fluid mr-3" style="width: 80px; height: 80px; object-fit: cover;">
                                    <div>
                                        <h6>
                                            <!-- Title switch based on language -->
                                            <?= session('lang') === 'id' ? strip_tags($artikel_item->judul_artikel) : strip_tags($artikel_item->judul_artikel_en); ?>
                                        </h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($artikel_item->created_at)); ?></small>
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


<style>
    /* Popular article card styling */
    .popular-article-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 10px;
        margin-bottom: 10px;
        width: 100%;
        display: flex;
        align-items: center;
        position: relative;
    }

    /* Image styling within the card */
    .popular-article-card img {
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-right: 20px;
        transform: translateX(-10px);
    }

    /* Text styling within the card */
    .popular-article-card .card-body {
        flex: 1;
        transform: translateX(10px);
    }

    .popular-article-card h6 {
        font-size: 14px;
        margin: 0;
    }

    .popular-article-card small {
        font-size: 12px;
        color: #777;
    }

    /* Ensure card link takes full card width */
    .card-link,
    .popular-card-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    /* Card hover effect */
    .card,
    .popular-article-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover,
    .popular-article-card:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    /* Text color change on card hover */
    .card-link:hover .card-body h4,
    .popular-card-link:hover .card-body h6 {
        color: #02abf0;
    }

    /* Adjust card height */
    .card {
        max-width: 100%;
        width: 100%;
        margin: auto;
    }

    /* Ensure image container fits the new card height */
    .img-container {
        width: 100%;
        border-radius: 5px;
        height: 300px;
        overflow: hidden;
        padding: 10px;
        box-sizing: border-box;
        background-color: #fff;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Adjust card body to fit well */
    .card-body {
        width: 90%;
        margin: 0 auto;
        padding: 1rem 1rem 1rem 0;
    }

    .card-body p,
    .card-body h4,
    .card-body .card-text {
        text-align: left;
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
</style>

<?= $this->endSection('content'); ?>