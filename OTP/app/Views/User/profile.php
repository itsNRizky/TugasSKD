<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        :root {
            --main-color: #e2c0bb;
            font-family: 'Poppins';
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?= $this->include('pages/book/navbar'); ?>
    <div class="container mx-auto my-5 p-5">
        <?php if (session()->getFlashData('pesan')) : ?>
            <div class="mb-4 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold"><?= session()->getFlashData('pesan'); ?></strong>
            </div>
        <?php endif; ?>
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 rounded-xl border-gray-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto rounded-xl" src="https://source.unsplash.com/600x600/?portrait" alt="">
                    </div>
                    <h1 style="font-family: Poppins;" class="text-center justify-center items-center text-gray-900 font-bold text-xl leading-8 my-1"><?= $customer['customer_name']; ?></h1>
                    <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>

            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Full Name</div>
                                <div class="px-4 py-2"><?= $customer['customer_name']; ?></div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2"><?= $customer['customer_telp']; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Current Address</div>
                                <div class="px-4 py-2"><?= $customer['customer_address']; ?></div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com"><?= user()->email; ?></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">
                        <a href="/customer/update/<?= $customer['customer_id'] ?>"><i class="fas fa-pencil-alt"></i> Edit Profile</a>
                    </button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

            </div>
        </div>
    </div>
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
    <script src="<?= base_url(); ?>/js/google-map.js"></script>
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
</body>

</html>