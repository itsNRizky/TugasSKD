<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick Your Rooms!</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="/book/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/book/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/book/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/book/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/book/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/book/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/book/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/book/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/book/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/book/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <?= $this->include('pages/book/navbar'); ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="animate__animated animate__fadeInUpBig breadcrumb-section mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>List</h2>
                        <div class="bt-option">
                            <a href="<?= base_url(); ?>">Home</a>
                            <span>Items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="animate__animated animate__fadeInUpBig rooms-section spad">
        <div class="container">
            <div class="row">
                <?php
                function rupiah($angka)
                {

                    return "Rp " . number_format($angka, 2, ',', '.');
                }
                foreach ($items as $items) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="<?= $items['items_image'] ?>" alt="">
                            <div class="ri-text">
                                <h4><?= $items['items_name'] ?></h4>
                                <h3><?= rupiah($items['items_price']) ?><span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">City: </td>
                                            <td><?= $items['items_city'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Type:</td>
                                            <td><?= $items['items_type'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="<?= base_url() . '/Booking/details/' . $items['items_id'] ?>" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <?= $this->include('pages/footer/footer'); ?>

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="/book/js/jquery-3.3.1.min.js"></script>
    <script src="/book/js/bootstrap.min.js"></script>
    <script src="/book/js/jquery.magnific-popup.min.js"></script>
    <script src="/book/js/jquery.nice-select.min.js"></script>
    <script src="/book/js/jquery-ui.min.js"></script>
    <script src="/book/js/jquery.slicknav.js"></script>
    <script src="/book/js/owl.carousel.min.js"></script>
    <script src="/book/js/main.js"></script>
</body>

</html>