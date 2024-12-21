<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joki Ryouta</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?=base_url('assets/uploads/logo/')?>logo-joki.ico" type="image/x-icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>css/atlantis.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/front-end/')?>css/owl.carousel.min.css" type="text/css">
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?=base_url('home')?>"><i class="fa fa-home"></i> Home</a>
                        <span>Formulir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Formulir</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="card bg-dark">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="col-10 ">
                                                <h4 class="text-white">Masukkan Data Akun Anda</h4>
                                            </div>
                                            <div class="col-2 text-right">
                                                <a class="btn btn-danger">
                                                    <h5 class="text-white">1</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body row">
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Login Via</label>
                                            <select id="via" class="form-control form-control-sm">
                                                <option selected>Pilih Login Via</option>
                                                <option>Montoon</option>
                                                <option>Gmail/Data Center</option>
                                                <option>VK</option>
                                                <option>Tiktok</option>
                                                <option>Facebook</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-white">User ID & Nickname</label>
                                            <input type="text" id="userId" name="nickname"
                                                class="form-control form-control-sm"
                                                placeholder="Ketikkan User ID & Nickname ...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Email/No. Hp/Moonton ID</label>
                                            <input type="text" id="dataAkun1" name="akun"
                                                class="form-control form-control-sm"
                                                placeholder="Ketikkan Email/No. Hp/Moonton ID ...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Password</label>
                                            <input type="text" id="dataAkun2" name="password"
                                                class="form-control form-control-sm" placeholder="Ketikkan Password...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Request Hero</label>
                                            <input type="text" id="hero" name="req_hero"
                                                class="form-control form-control-sm"
                                                placeholder="Ketikkan Request Hero ...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Catatan Untuk Penjoki</label>
                                            <input type="text" id="catatan" name="catatan"
                                                class="form-control form-control-sm"
                                                placeholder="Ketikkan Catatan Untuk Penjoki ...">
                                        </div>
                                        <?php if ($layanan->kategori != "Joki Rank / Paket") {?>
                                        <div class="form-group col-md-12">
                                            <label class="text-white">Jumlah Bintang Yang Dipesan</label>
                                            <input type="number" id="jumlah" name="jumlah"
                                                class="form-control form-control-sm"
                                                placeholder="Ketikkan Jumlah Bintang ...">
                                        </div>
                                        <?php }?>
                                        <input type="hidden" id="harga" value="<?=$layanan->harga?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group col-12">
                                            <div class="row ">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <label class="imagecheck text-center mb-4">
                                                        <input name="layanan" id="tipe" type="checkbox"
                                                            value="<?=$layanan->nama_layanan?>" class="imagecheck-input"
                                                            checked>
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?=base_url('assets/uploads/layanan/' . $layanan->foto)?>"
                                                                alt="title" class="imagecheck-image"
                                                                style="height:180px">
                                                        </figure>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card bg-dark">
                                            <div class="card-header">
                                                <div class="row justify-content-between">
                                                    <div class="col-10 ">
                                                        <h4 class="text-white">Detail Kontak Anda</h4>
                                                    </div>
                                                    <div class="col-2 text-right">
                                                        <a class="btn btn-danger">
                                                            <h5 class="text-white">2</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="text-white">Nama</label>
                                                    <input type="text" id="nama" class="form-control form-control-sm"
                                                        pattern="[A-Za-z\s]+" placeholder="Nama Lengkap"
                                                        title="Hanya huruf yang diperbolehkan">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-white">No. WhatsApp</label>
                                                    <input type="text" id="kontak" class="form-control form-control-sm"
                                                        pattern="^\+62[0-9]{9,13}$" placeholder="Ketikkan No. WhatsApp"
                                                        title="Nomor HP harus diawali dengan kode negara (+62) dan diikuti 9-13 digit angka">
                                                    <small id="error-msg" style="color: red; display: none;">Nomor HP
                                                        harus diawali +62 dan diikuti 9-13 digit angka.</small>
                                                    <p class="text-white mt-1 font-italic">**Nomor ini akan dihubungi
                                                        jika
                                                        terjadi
                                                        masalah
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-danger btn-block mb-3"
                                            onclick="kirim()">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <p class="text-white" style="font-size: small; text-align:justify ">
                                Joki Rank Mobile Legends dari Joki Fastwork: Solusi Cepat Naik Rank ! <br><br>

                                <!-- Kami mempersembahkan layanan joki Mobile Legends yang cepat, murah, serta aman dan
                                terpercaya! Tingkatkan permainan dan rank Anda dengan bantuan dari profesional kami.
                                Kami mengutamakan kepuasan dan keamanan akun Anda dalam setiap jasa yang kami berikan.
                                <br><br> -->

                                Waktu Pengecekan Orderan : <br>
                                Orderan yang sudah dibayarkan akan kami cek setiap hari mulai pukul 07.00 - 22.00 WIB.
                                Untuk orderan yang melewati batas waktu pengecekan, akan kami proses pada jam kerja di
                                hari berikutnya. <br><br>

                                Berikut adalah langkah-langkah sederhana untuk Order Jasa Joki : <br><br>

                                1. Lengkapi Data Akun Joki Dengan Teliti (Pastikan data yang Anda masukkan sudah benar
                                dan lengkap) <br>
                                2. Pilih Jenis Variant Joki (Sesuaikan dengan kebutuhan Anda) <br>
                                3. Masukkan Jumlah Order Sesuai Tujuan Rank (Pastikan jumlah order sesuai dengan rank
                                yang Anda inginkan dan sesuai dengan S&K Takapedia) <br>
                                <!-- 4. Pilih Metode Pembayaran (Kenyamanan Anda adalah prioritas kami. Kami menyediakan
                                berbagai metode pembayaran yang mudah dan aman) <br>
                                5. Masukkan Kode Promo Jika Ada (Gunakan kode promo untuk mendapatkan penawaran spesial
                                dan diskon menarik) <br> -->
                                4. Masukkan Nomor WhatsApp dan Email yang Valid (Dapatkan konfirmasi dan notifikasi
                                langsung ke kontak Anda) <br>
                                5. Klik Order Now & Lakukan Pembayaran (Tunggu konfirmasi dari kami dan orderan Anda
                                akan segera diproses) <br><br>

                                Estimasi Waktu Proses : <br>
                                Kami berkomitmen untuk menyelesaikan jasa joki Anda dalam waktu 12-48 jam. Waktu
                                penyelesaian dapat bervariasi tergantung pada jumlah dan kompleksitas pesanan. Kami
                                berupaya untuk memberikan layanan secepat mungkin <br><br>

                                Joki FastWork Sahabat Para Gamers!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container-md">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="#"><img src="<?=base_url('assets/front-end/')?>img/logo-joki.png" alt=""
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
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        Design by Joki Fastwork teams
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Search model end -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function kirim() {
        let token = '7513567228:AAH__VE6roagbTxhl67_z_HniRsUKkg-m7I'
        let via = $('#via').find(':selected').val()
        let userId = $('#userId').val();
        let dataAkun1 = $('#dataAkun1').val();
        let dataAkun2 = $('#dataAkun2').val();
        let hero = $('#hero').val();
        let kontak = $('#kontak').val();
        let tipe = $('#tipe').val();
        let catatan = $('#catatan').val();
        let nama = $('#nama').val();
        let jumlah = $('#jumlah').val();
        let harga = $('#harga').val();
        let total = harga * jumlah;

        <?php if ($layanan->kategori == "Joki Rank / Paket") {?>
        total = harga;
        jumlah = 'tidak ada bintang dalam Joki Rank Paket';
        <?php }?>

        // Pemeriksaan jika ada kolom yang kosong
        if (!nama || !kontak || !tipe || !jumlah || !userId || !via || !dataAkun1 || !dataAkun2 || !hero || !catatan) {
            Swal.fire({
                text: "Semua kolom harus diisi!",
                icon: "error",
                confirmButtonColor: "#dc3545"
            });
            return; // Hentikan eksekusi jika ada kolom yang kosong
        }

        let pesan = `
            <b>PESANAN</b>\n├<b>Nama:</b> ${nama}\n├<b>No. WA:</b> ${kontak}\n├<b>Rank Tier:</b> ${tipe}\n├<b>Jumlah Bintang:</b> ${jumlah}\n├<b>ID:</b> ${userId}\n├<b>Login Via:</b> ${via}\n├<b>Email/Username:</b> ${dataAkun1}\n├<b>Password:</b> ${dataAkun2}\n├<b>Req Hero:</b> ${hero}\n├<b>Pesan:</b> ${catatan}\n├<b>Harga:</b> ${formatCurrency(total)}
            `;

        $.ajax({
            type: 'POST',
            url: '<?=base_url('pesanan/create')?>',
            data: {
                login_via: via,
                email: dataAkun1,
                password: dataAkun2,
                hero: hero,
                nick_name: userId,
                jumlah_star: jumlah,
                catatan: catatan,
                nama: nama,
                no_wa: kontak,

            },
            dataType: 'json',
            success: function(response) {
                tele()
                // Lakukan sesuatu dengan respons dari server
            },
            error: function(error) {
                console.error(error);
                // Tangani kesalahan jika terjadi
            }
        });
        const tele = () => {
            $.ajax({
                type: 'POST',
                url: `https://api.telegram.org/bot${token}/sendMessage`,
                data: {
                    chat_id: -4526621283,
                    text: pesan,
                    parse_mode: 'HTML',
                },
                success: function(res) {
                    Swal.fire({
                        text: "Terimaksih telah order",
                        icon: "success",
                        confirmButtonColor: "#dc3545"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function(error) {
                    console.error(error);
                    alert("error failed");
                }
            });

        }

    }
    const formatCurrency = (amount) => {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(amount);
    };
    </script>

    <script src="<?=base_url('assets/admin/')?>js/core/jquery.3.2.1.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>js/core/popper.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?=base_url('assets/admin/')?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?=base_url('assets/admin/')?>js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?=base_url('assets/admin/')?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="<?=base_url('assets/admin/')?>js/plugin/datatables/datatables.min.js"></script>
    <!-- Atlantis JS -->
    <script src="<?=base_url('assets/admin/')?>js/atlantis.min.js"></script>
    <script src="<?=base_url('assets/front-end/')?>js/main.js"></script>


</body>

</html>