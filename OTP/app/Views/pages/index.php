<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Navbar -->
    <?= $this->include('pages/navbar'); ?>
    <?php if (session()->getFlashdata('otpsalah')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('otpsalah'); ?>
        </div>
    <?php endif; ?>

    <!-- Section List -->

    <!-- Home Section -->
    <?= $this->include('pages/section/home-section'); ?>

    <!-- Footer -->
    <?= $this->include('pages/footer/footer'); ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <?= $this->endSection(); ?>