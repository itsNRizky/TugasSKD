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

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Items</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add Items</a></li>
                            <li class="breadcrumb-item"><a href="#">Items</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content px-3">
            <form action="/items/addItem" method="POST">
                <!-- Nama Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Name</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>

                    <div class="col-3 py-1">
                        <input class="form-control" type="text" placeholder="Items name" name="nama_item">
                    </div>
                </div>

                <!-- Type -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Type</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">


                        <div class="form-control">
                            <select class="form-select" aria-label="Default select example" name="tipe_item">
                                <option selected>Type of Items</option>
                                <option value="hotel">Hotel</option>
                                <option value="villa">Villa</option>
                            </select>

                        </div>
                    </div>
                </div>

                <!--Kota Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>City</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">
                        <input class="form-control" type="text" placeholder="Items City" name="kota_item">
                    </div>
                </div>

                <!--Alamat Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Address</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">
                        <textarea class="form-control" type="text" placeholder="Items Address" name="alamat_item"></textarea>
                    </div>
                </div>

                <!--Price Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Price (Rp)</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">
                        <input class="form-control" type="number" placeholder="Items Price" name="harga_item">
                    </div>
                </div>

                <!--Desc Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Description</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">
                        <textarea class="form-control" type="text" placeholder="Items Desccriptions" name="deskripsi_item"></textarea>
                    </div>
                </div>

                <!--Facility Items -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Facility</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">
                        <textarea class="form-control" type="text" placeholder="Items Facility" name="fasilitas_item"></textarea>
                    </div>
                </div>

                <!-- Image -->
                <div class="row g-3 align-items-center">
                    <div class="col-1">
                        <h1>Image</h1>
                    </div>
                    <div class="col-auto">
                        <h1>:</h1>
                    </div>
                    <div class="col-3 py-1">


                        <div class="form-control">
                            <select class="form-select" aria-label="Default select example" name="items_images">
                                <option selected>Images of Items</option>
                                <option value="/images/items/C-3.jpg">C-3</option>
                                <option value="/images/items/D-3.jpg">D-3</option>
                                <option value="/images/items/B-4.jpg">B-4</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row g-3 align-items-center py-3">
                    <div class="col-1"></div>
                    <div class="col-auto"></div>
                    <div class="col-3"><button class="btn btn-rounded-pill btn-light">Submit</button></div>
                </div>

            </form>

            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="">
                        <!-- /.info-box -->
                    </div>


                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

</div>
<?= $this->endSection(); ?>