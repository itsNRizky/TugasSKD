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
                <form method="POST" action="/items/updateItem/<?= $item['items_id']; ?>">

                    <div class=" mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="nama_item" value="<?= $item['items_name']; ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                    <label class="form-label block">Tipe</label>
                    <select class="form-select" name="tipe_item">
                        <option value="hotel">Hotel</option>
                        <option value="villa">Villa</option>
                    </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="kota_item" value="<?= $item['items_city']; ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="alamat_item" value="<?= $item['items_address']; ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" name="harga_item" value="<?= $item['items_price']; ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" name="deskripsi_item" class="form-control"><?= $item['items_desc']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Facility</label>
                        <textarea type="text" name="fasilitas_item" class="form-control"><?= $item['items_facility']; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>