<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room Details</title>

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
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Item Details</h2>
                        <div class="bt-option">
                            <a href="./home.html">Items</a>
                            <span>Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <?php
    function rupiah($angka)
    {
        return "Rp " . number_format($angka, 2, ',', '.');
    }
    ?>
    <section class="animate__animated animate__fadeIn room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="<?= $items['items_image'] ?>" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3><?= $items['items_name'] ?></h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                            </div>
                            <h2><?= rupiah($items['items_price']) ?><span>/Pernight</span></h2>
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
                                    <tr>
                                        <td class="r-o">Address:</td>
                                        <td><?= $items['items_address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Facility:</td>
                                        <td><?= $items['items_facility'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para"><?= $items['items_desc'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form method="post" action="<?= base_url('booking/create/' . $items['items_id']) ?>" enctype="multipart/form-data">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input name="mulai_tanggal_booking" type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input name="stop_tanggal_booking" type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Input Payment Proof:</label>
                                <input type="file" id="inputGroupFile01" name="bukti_booking" class="form-control">
                            </div>
                            <input type="hidden" value="<?= $items['items_price'] ?>" name="harga_booking">
                            <button name='submit' type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

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