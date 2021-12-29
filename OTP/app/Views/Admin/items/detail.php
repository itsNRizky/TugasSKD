<?= $this->extend('Admin/template/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>




        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('Admin/template/sidebar'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="card mb-3">
                    <img src="<?= base_url() . $item['items_image']; ?>" class="card-img-top rounded-md" alt="...">
                    <div class="card-body">
                        <h5 class="text-center text-3xl"><?= $item['items_name'];?></h5> 
                        <p class="card-text">Kota: <?= $item['items_city'];?></p>
                        <p class="card-text">Alamat: <?= $item['items_address'];?></p>
                        <p class="card-text">Fasilitas: <?= $item['items_facility'];?></p>
                        <p class="card-text font-bold">Harga: <?= $item['items_price'];?></p>
                        <p class="card-text"><small class="text-muted"><?= $item['items_desc']; ?></small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>