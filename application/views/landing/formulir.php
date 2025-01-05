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
        background-image: url('<?=base_url("assets/landing/")?>assets/images/carousel-ml2.png');
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
    <div class="form-preloader loaded">
        <div class="spinner">
            <div></div>
        </div>
    </div>


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
                <div class="formulir-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="form-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Silahkan isi formulir</h6>
                                    <h4><em>Push Rank Cepat</em>, Auto Mythic Hebat!</h4>
                                    <!-- <div class="main-button">
                                        <a href="#most-popular">Mulai Joki</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->
                    <div class="mt-2">
                        <!-- <h4>Formulir</h4> -->
                        <div class="section">
                            <div class="heading-section  d-flex justify-content-between">
                                <h4>Masukan Data Akun</h4>
                                <a class="btn">
                                    <h5 class="text-white">1</h5>
                                </a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="text-white">Login Via</label>
                                    <select id="via" class="form-control form-control-sm">
                                        <option selected disabled>Pilih Login Via</option>
                                        <option>Montoon</option>
                                        <option>Gmail/Data Center</option>
                                        <option>VK</option>
                                        <option>Tiktok</option>
                                        <option>Facebook</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-white">User ID & Nickname</label>
                                    <input type="text" id="userId" name="nickname" class="form-control form-control-sm"
                                        placeholder="Ketikkan User ID & Nickname ...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-white">Email/Moonton ID</label>
                                    <input type="text" id="dataAkun1" name="akun" class="form-control form-control-sm"
                                        placeholder="Ketikkan Email/No. Hp/Moonton ID ...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-white">Password</label>
                                    <input type="text" id="dataAkun2" name="password"
                                        class="form-control form-control-sm" placeholder="Ketikkan Password...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-white">Request Hero</label>
                                    <input type="text" id="hero" name="req_hero" class="form-control form-control-sm"
                                        placeholder="Ketikkan Request Hero ...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-white">Catatan Untuk Penjoki</label>
                                    <input type="text" id="catatan" name="catatan" class="form-control form-control-sm"
                                        placeholder="Ketikkan Catatan Untuk Penjoki ...">
                                </div>
                                <?php if ($layanan->kategori != "Joki Rank / Paket") {?>
                                <div class="form-group col-md-12">
                                    <label class="text-white">Jumlah Bintang Yang Dipesan</label>
                                    <input type="text" inputmode="numeric" id="jumlah" name="jumlah"
                                        class="form-control form-control-sm" placeholder="Ketikkan Jumlah Bintang ...">
                                </div>
                                <?php }?>
                                <input type="hidden" id="id_layanan" value="<?=$layanan->id?>">
                                <input type="hidden" id="harga" value="<?=$layanan->harga?>">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <!-- <h4>Formulir</h4> -->
                        <div class="section">
                            <div class="heading-section  d-flex justify-content-between">
                                <h4>Detail Kontak</h4>
                                <a class="btn">
                                    <h5 class="text-white">2</h5>
                                </a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group col-12">
                                        <div class="row ">
                                            <div class="col-12 d-flex justify-content-center">
                                                <label class="imagecheck text-center mb-4">
                                                    <input name="layanan" id="tipe" type="hidden"
                                                        value="<?=$layanan->nama_layanan?>" class="imagecheck-input"
                                                        checked>
                                                    <figure class="imagecheck-figure">
                                                        <img src="<?=base_url('assets/uploads/layanan/' . $layanan->foto)?>"
                                                            alt="title" class="imagecheck-image" style="height:180px">
                                                    </figure>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
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
                                    <div class="form-group">
                                        <button type="button" class="btn" onclick="kirim()">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-content">
                    <div class="section">
                        <div class="heading-section mb-2">
                            <h4>Deskripsi</h4>
                        </div>
                        <p class="text-white" style="font-size: small; text-align:justify ">
                            Joki Rank Mobile Legends dari Joki Fastwork: Solusi Cepat Naik Rank !
                            <br><br>

                            Waktu Pengecekan Orderan : <br>
                            Orderan yang sudah dibayarkan akan kami cek setiap hari mulai pukul 07.00 -
                            22.00 WIB.
                            Untuk orderan yang melewati batas waktu pengecekan, akan kami proses pada
                            jam kerja di
                            hari berikutnya. <br><br>

                            Berikut adalah langkah-langkah sederhana untuk Order Jasa Joki : <br><br>

                            1. Lengkapi Data Akun Joki Dengan Teliti (Pastikan data yang Anda masukkan
                            sudah benar
                            dan lengkap) <br>
                            2. Masukkan Jumlah Order Sesuai Tujuan Rank <br>
                            3. Masukkan Nomor WhatsApp dan Email yang Valid (Dapatkan konfirmasi dan
                            notifikasi
                            langsung ke kontak Anda) <br>
                            4. Klik Order Now & Lakukan Pembayaran (Tunggu konfirmasi dari kami dan
                            orderan Anda
                            akan segera diproses) <br><br>

                            Estimasi Waktu Proses : <br>
                            Kami berkomitmen untuk menyelesaikan jasa joki Anda dalam waktu 12-48 jam.
                            Waktu
                            penyelesaian dapat bervariasi tergantung pada jumlah dan kompleksitas
                            pesanan. Kami
                            berupaya untuk memberikan layanan secepat mungkin <br><br>

                            Joki FastWork Sahabat Para Gamers!
                        </p>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    function validateForm() {
        let isValid = true;

        // Ambil elemen
        const nama = document.getElementById('nama');
        const kontak = document.getElementById('kontak');
        const via = document.getElementById('via');
        const userId = document.getElementById('userId');
        const dataAkun1 = document.getElementById('dataAkun1');
        const dataAkun2 = document.getElementById('dataAkun2');
        const hero = document.getElementById('hero');
        const catatan = document.getElementById('catatan');
        const jumlah = document.getElementById('jumlah');

        // Validasi Nama
        if (!nama.value.trim()) {
            alert('Nama harus diisi.');
            nama.focus();
            isValid = false;
            return;
        }

        // Validasi Kontak
        if (!kontak.value.match(/^0[0-9]{9,13}$/)) {
            alert('Nomor HP harus diawali dengan 0 dan diikuti 9-13 digit angka.');
            kontak.focus();
            isValid = false;
            return;
        }

        // Validasi Login Via
        if (via.value === "Pilih Login Via") {
            alert('Silakan pilih metode login.');
            via.focus();
            isValid = false;
            return;
        }

        // Validasi User ID
        if (!userId.value.trim()) {
            alert('User ID & Nickname harus diisi.');
            userId.focus();
            isValid = false;
            return;
        }

        // Validasi Data Akun
        if (!dataAkun1.value.trim() || !dataAkun2.value.trim()) {
            alert('Email/Moonton ID dan Password harus diisi.');
            dataAkun1.focus();
            isValid = false;
            return;
        }

        // Validasi Request Hero
        if (!hero.value.trim()) {
            alert('Request Hero harus diisi.');
            hero.focus();
            isValid = false;
            return;

        }

        // Validasi Catatan
        if (!catatan.value.trim()) {
            alert('Catatan harus diisi.');
            catatan.focus();
            isValid = false;
            return;

        }

        // Validasi Jumlah Bintang (jika diperlukan)
        if (!jumlah || !jumlah.value.trim()) {
            alert('Jumlah Bintang harus diisi.');
            jumlah.focus();
            isValid = false;
            return;
        }

        if (!jumlah.value.match(/^[1-9][0-9]*$/)) {
            alert('Jumlah Bintang harus berupa angka dan tidak boleh dimulai dengan 0.');
            jumlah.focus();
            isValid = false;
            return;
        }


        return isValid;
    }


    function kirim() {
        if (!validateForm()) {
            // Jangan kirim jika validasi gagal
            return;
        }
        let token = '7513567228:AAH__VE6roagbTxhl67_z_HniRsUKkg-m7I'
        let via = $('#via').find(':selected').val()
        let userId = $('#userId').val();
        let dataAkun1 = $('#dataAkun1').val();
        let dataAkun2 = $('#dataAkun2').val();
        let hero = $('#hero').val();
        let kontak = $('#kontak').val();
        let tipe = $('#tipe').val();
        let id_layanan = $('#id_layanan').val();
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

        document.querySelector('.form-preloader').classList.remove('loaded');
        $.ajax({
            type: 'POST',
            url: '<?=base_url('pesanan/create')?>',
            data: {
                id_layanan: id_layanan,
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
                Swal.fire({
                    text: "Terjadi kesalahan!",
                    icon: "error",
                    confirmButtonColor: "#dc3545"
                });
                // Sembunyikan loader jika ada error
                document.querySelector('.form-preloader').classList.add('loaded');
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
                    document.querySelector('.form-preloader').classList.add('loaded');
                },
                error: function(error) {
                    console.error(error);
                    Swal.fire({
                        text: "Gagal mengirim pesan ke Telegram!",
                        icon: "error",
                        confirmButtonColor: "#dc3545"
                    });
                    document.querySelector('.form-preloader').classList.add('loaded');
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


</body>

</html>