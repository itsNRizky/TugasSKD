<section id="home-section" class="hero">
    <img src="/images/blob-shape-3.svg" class="svg-blob" alt="Colorlib Free Template">
    <div class="home-slider owl-carousel">
        <?php foreach ($items as $items) : ?>
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="one-third order-md-last">
                            <div class="img" style="background-image:url(<?= $items['items_thumbnail'] ?>);">
                                <div class="overlay"></div>
                            </div>
                            <div class="bg-primary">
                                <div class="vr"><span class="pl-3 py-4" style="background-image: url(images/bg_1-1.jpg);"><?= $items['items_city'] ?></span></div>
                            </div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading pl-5">Discover Ecoland</span>
                                <h1 class="mb-4 mt-3">Explore Your Travel Destinations like never before</h1>
                                <p><?= $items['items_desc'] ?></p>

                                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover <span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</section>