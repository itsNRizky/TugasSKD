<link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/css/magnific-popup.css">
<link rel="stylesheet" href="/css/aos.css">
<link rel="stylesheet" href="/css/ionicons.min.css">
<link rel="stylesheet" href="/css/flaticon.css">
<link rel="stylesheet" href="/css/icomoon.css">
<link rel="stylesheet" href="/css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">Ecoland</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="<?= base_url(); ?>#home-section" class="nav-link"><span>Home</span></a></li>

                <li class="nav-item"><a href="<?= base_url(); ?>#contact-section" class="nav-link"><span>Contact</span></a></li>
                <?php if (logged_in() == true) : ?>
                    <li class="nav-item"><a href="/booking" class="nav-link"><span>Book</span></a></li>
                    <div class="dropdown">
                        <li class="nav-item">
                            <button class="btn dropdown-toggle mt-1 py-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="font-semibold ">
                                    <?= user()->username; ?>
                                </span>
                            </button>
                        </li>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-rose-300" href="<?= base_url(); ?>/customer">Profile</a></li>
                            <li><a class="dropdown-item text-rose-300" href="#">Settings</a></li>
                            <li><a class="dropdown-item text-rose-300" href="<?= base_url(); ?>/logout">Logout</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <li class="nav-item"><a href="<?= base_url(); ?>/login" class="nav-link"><span>Login</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<script src="<?= base_url(); ?>/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url(); ?>/js/popper.min.js"></script>
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url(); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>/js/jquery.stellar.min.js"></script>
<script src="<?= base_url(); ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>/js/aos.js"></script>
<script src="<?= base_url(); ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url(); ?>/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url(); ?>/js/google-map.js"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
