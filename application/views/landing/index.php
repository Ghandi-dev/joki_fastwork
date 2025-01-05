<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Joki Fastwork | <?=$title?></title>
    <!-- Favicons -->
    <link href="<?=base_url('assets/')?>logo-joki.png" rel="icon">
    <link href="<?=base_url('assets/')?>logo-joki.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/landing/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/landing/')?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?=base_url('assets/landing/')?>assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?=base_url('assets/landing/')?>assets/css/owl.css">
    <link rel="stylesheet" href="<?=base_url('assets/landing/')?>assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>
    html,
    body {
        background-image: url('<?=base_url("assets/landing/")?>assets/images/carousel-ml.png');
        background-size: cover;
        /* Memastikan gambar memenuhi seluruh layar */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-attachment: fixed;
        /* Membuat background tetap saat scrolling */
        background-position: center;
        /* Memusatkan gambar */
    }

    @media screen and (max-width: 768px) {

        html,
        body {
            background-image: none;
            /* Hapus gambar latar */
            background-color: #27292a;
            /* Ganti dengan warna latar */
        }
    }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav d-flex align-items-center justify-content-between">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?=base_url('home')?>" id="logo" class="logo">
                            <img src="<?=base_url('assets/logo-joki.png')?>" alt="Logo Joki"
                                title="Kembali ke halaman utama" width="50">
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="<?=base_url('home')?>" class="active">Home</a></li>
                            <li><a href="<?=base_url('auth')?>">Login<img
                                        src="<?=base_url('assets/landing/')?>assets/images/profile-header.jpg"
                                        alt=""></a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome To Joki Fastwork</h6>
                                    <h4><em>Push Rank Cepat</em>, Auto Mythic Hebat!</h4>
                                    <div class="main-button">
                                        <a href="#most-popular">Mulai Joki</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div id="most-popular">
                        <?php foreach ($kategori as $k) {?>
                        <div class="most-popular">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading-section">
                                        <h4><em>Joki&nbsp;</em><?=$k->nama_kategori?></h4>
                                    </div>
                                    <div class="row">
                                        <?php foreach ($layanan as $l) {
    if ($l->kategori_id == $k->id) {?>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <img src="<?=base_url('assets/uploads/layanan/' . $l->foto)?>" alt="">
                                                <h4 class="my-2"><?=$l->nama_layanan?><span>Harga</span></h4>
                                                <ul class="my-2">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i
                                                            class="fa fa-star"></i><?="Rp " . number_format($l->harga, 0, ',', '.')?>
                                                    </li>
                                                </ul>
                                                <div class="main-button">
                                                    <a href="<?=base_url('home/formulir/' . $l->id)?>">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }
    ;
}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <!-- ***** Most Popular End ***** -->
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2025 Joki Fastwork. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url('assets/landing/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/landing/')?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?=base_url('assets/landing/')?>assets/js/isotope.min.js"></script>
    <script src="<?=base_url('assets/landing/')?>assets/js/owl-carousel.js"></script>
    <script src="<?=base_url('assets/landing/')?>assets/js/tabs.js"></script>
    <script src="<?=base_url('assets/landing/')?>assets/js/popup.js"></script>
    <script src="<?=base_url('assets/landing/')?>assets/js/custom.js"></script>


</body>

</html>