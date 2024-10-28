<!-- Carousel Start -->
<div class="container-fluid px-0 mb-4">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item<?= $key === 0 ? ' active' : ''; ?> bg-cover" style="background-image: url('asset-user/images/<?= $slider->file_foto_slider; ?>');">
                    <!-- Add overlay and centered text -->
                    <div class="carousel-overlay">
                    <?php foreach ($profil as $descper) : ?>
                        <h1 class="carousel-text"><?= $descper->nama_perusahaan; ?></h1>
                        <p class="carousel-subtext"><?= $descper->title_website; ?></p>
                    <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<style>
    .carousel-item {
        height: 500px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        /* To position the overlay and text */
    }

    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Darker background overlay */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .carousel-text {
        color: white;
        font-size: 3rem;
        font-weight: bold;
        text-align: center;
        margin: 0;
    }

    .carousel-subtext {
        color: white;
        font-size: 1.5rem;
        text-align: center;
        margin-top: 0.5rem;
    }

    @media (max-width: 767px) {
        .carousel-item {
        height: 200px; /* Reduced height for smaller screens */
        background-size: cover; /* Ensure the image covers the entire area */
    }

    .carousel-text {
        font-size: 1.5rem; /* Adjust font size for smaller screens */
    }

    .carousel-subtext {
        font-size: 0.9rem; /* Adjust subtext font size for smaller screens */
    }
    }
</style>