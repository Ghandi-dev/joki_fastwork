<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joki Fastwork</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?=base_url('assets/uploads/logo/')?>logo-joki.ico" type="image/x-icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?=base_url()?>">
                            <img src="<?=base_url('assets/front-end/')?>img/logo-joki.png" alt=""
                                style=" width: 70px; margin-top: -20px; margin-bottom: -15px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class=""><a href="<?=base_url()?>">Homepage</a></li>
                                <!-- <li><a href="#">Contacts</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="<?=base_url('login')?>"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?=base_url('assets/front-end/')?>img/carousel-ml.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="<?=base_url('login')?>" method="post" autocomplete="off">
                            <div class="input__item">
                                <input type="text" name="username" placeholder="Username">
                                <span class="fa fa-user-circle"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn ">Login Now</button>
                        </form>
                        <!-- <a href="#" class="forget_pass">Forgot Your Password?</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="#"><img src="<?=base_url('assets/front-end/')?>img/logo1.png" alt=""
                                style="width:100px; padding-top:0px"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-3">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
    <script src="<?=base_url('assets/front-end/')?>js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/player.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/jquery.nice-select.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/mixitup.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/jquery.slicknav.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/main.js"></script>


</body>

</html>