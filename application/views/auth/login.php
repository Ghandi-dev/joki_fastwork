<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Joki Fastwork | <?=$title?></title>

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
        background-color: #1f2122;
        /* background-image: url('<?=base_url("assets/landing/")?>assets/images/carousel-ml2.png'); */
        background-size: cover;
        /* Memastikan gambar memenuhi seluruh layar */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-attachment: fixed;
        /* Membuat background tetap saat scrolling */
        background-position: center;
        /* Memusatkan gambar */
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
                            <li><a href="<?=base_url('home')?>">Home</a></li>
                            <li><a href="profile.html" class="active">Login<img
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile ">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <img src="<?=base_url('assets/landing/')?>assets/images/banner-bg.png" alt=""
                                            style="border-radius: 23px; width: 100%; height: 300px; object-fit: cover;">
                                    </div>

                                    <div class="col-lg-4 align-self-center">
                                        <form action="<?=base_url('auth')?>" method="post">
                                            <div class="form-group">
                                                <label class="text-white" for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-white" for="password">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?=base_url('assets/landing/')?>assets/js/custom.js"></script>

    <!-- ALERT -->
    <?php
$alertType = '';
$alertTitle = '';
$alertMessage = '';

if ($this->session->flashdata('success')) {
    $alertType = 'success';
    $alertTitle = 'Good Job!';
    $alertMessage = $this->session->flashdata('success');
} elseif ($this->session->flashdata('warning')) {
    $alertType = 'warning';
    $alertTitle = 'Oops!';
    $alertMessage = $this->session->flashdata('warning');
} elseif ($this->session->flashdata('error')) {
    $alertType = 'error';
    $alertTitle = 'Error!';
    $alertMessage = $this->session->flashdata('error');
}

if ($alertType): ?>
    <script>
    $(document).ready(function() {
        Swal.fire("<?=$alertTitle;?>", <?=json_encode($alertMessage);?>, "<?=$alertType;?>");
    });
    <?php endif;?>
    </script>


</body>

</html>