<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAKTI POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script async src="//www.instagram.com/embed.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            position: fixed;
            width: 100%;
            z-index: 9999;
        }

        .navbar.scrolled {
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar ul li a {
            font-weight: 500;
            color: #ffffff;
        }

        .navbar.scrolled ul li a {
            font-weight: 500;
            color: #313131;
        }

        .navbar .nav-link {
            color: #ffffff;
            font-weight: 500;
        }

        .navbar:not(.scrolled) .nav-link:hover {
            color: #ffffff;
        }

        .navbar:not(.scrolled) .navbar-collape {
            color: #1D1D1D;
            background-color: #ffffff;
        }

        .navbar:not(.scrolled) .dropdown-toggle {
            color: #ffffff;
        }

        .navbar:not(.scrolled) .dropdown-menu {
            background-color: #D5B043;
            border: none;
        }

        .navbar:not(.scrolled) .dropdown-item {
            color: #ffffff;
        }

        .navbar:not(.scrolled) .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
        }

        .navbar.scrolled .dropdown-menu {
            background-color: #ffffff;
            border: 1px solid #eaeaea;
        }

        .navbar.scrolled .dropdown-item {
            color: #313131;
        }

        .navbar.scrolled .dropdown-item:hover {
            background-color: #f2f2f2;
            color: #313131;
        }


        .btn-login {
            color: #fff;
            border-color: #fff;
        }


        .navbar.scrolled .btn-login {
            background-color: #ffffff;
            color: #1D1D1D;
            border-color: #1D1D1D;
        }


        .navbar.scrolled .btn-login:hover {
            background-color: #e0a822;
            border-color: #e0a822;
            color: #ffffff;
        }

        .hero-section {
            padding: 100px 0;
            position: relative;
            background: #ffffff;

        }

        .navbar-collapse.show {
            background-color: #D5B043;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-collapse .nav-link {
            color: #ffffff;
            font-weight: 500;
        }

        .navbar-collapse .nav-link:hover {
            color: #f2f2f2;
        }

        .navbar-collapse .dropdown-menu {
            background-color: transparent;
            border: none;
        }

        .navbar-collapse .dropdown-item {
            color: #ffffff;
        }

        .navbar-collapse .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
        }

        .navbar.scrolled .navbar-collapse.show {
            background-color: #ffffff;
        }

        .navbar.scrolled .navbar-collapse .nav-link,
        .navbar.scrolled .navbar-collapse .dropdown-item {
            color: #313131;
        }

        .brand-highlight {
            border-radius: 12px;
            font-size: 42px;
            font-weight: 800;
            display: inline-block;
            color: rgb(255, 255, 255);
        }

        .hero-bg-1 {
            background-image: url("{{ asset('image/hero1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        .hero-bg-2 {
            background-image: url("{{ asset('image/hero2.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        .hero-bg-3 {
            background-image: url("{{ asset('image/hero3.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        .hero-bg-4 {
            background-image: url("{{ asset('image/hero4.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        .btn-hover:hover {
            color: #ffffff;
        }

        .btn-hero {
            border-radius: 40px;
        }

        .text-saktipos {
            color: #cda93f;
        }

        .instagram-video-frame {
            cursor: pointer;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 400px;
            width: 400px;
            background-size: cover;
        }

        .instagram-video-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .video-thumnail {
            width: 100%;
            display: block;
            border-radius: 12px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: rgb(255, 0, 0);
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .instagram-video-frame:hover .play-button {
            opacity: 1;
        }

        .superior-features .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .superior-features {
            background-color: #cda93f;
            height: 90%;
        }

        .superior-features h5 {
            color: #ffffff;
        }

        .superior-features p {
            color: #fff9;
        }

        .icon-box {
            background: white;
            padding: 12px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-about {
            max-width: 550px;
            text-align: start;
        }

        .card {
            width: 450vh;
            height: 24rem;
            border-radius: 20px;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .border-saktipos {
            border-color: #cda93f !important;
        }


        .bussines {
            height: 100%;
            width: 100%;
            background-color: #cda93f;
            padding: 50px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .small-mockup {
            width: 260px;
            bottom: -48px;
            right: 1px;
        }

        .small-mockup-2 {
            width: 180px;
            bottom: -20px;
            left: -30px;
        }

        .btn-gold {
            background-color: #D5B043;
            border-color: #D5B043;
            color: #ffffff;
        }

        .btn-gold:hover {
            background-color: #c4a13d;
            border-color: #c4a13d;
            color: #ffffff;
        }

        .tab-btn {
            background: transparent;
            border: none;
            font-weight: 600;
            font-size: 17px;
            color: #cda93f;
            padding: 10px 20px;
            border-radius: 40px;
            transition: .3s;
            width: 18.3%;
        }

        .tab-btn.active {
            background: #cda93f;
            color: white;
        }

        .tab-btn:hover {
            color: #875800;
        }

        .icon-box {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .accordion-button {
            font-weight: 600;
        }

        .accordion-button:not(.collapsed) {
            color: #D5B043;
            background-color: #ffffff;
        }

        .carousel-indicators {
            gap: 8px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #ffffff;
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .business-tabs {
            max-width: 100%;
            width: 100%;
            overflow-x: auto;
            flex-wrap: nowrap;
            white-space: nowrap;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch;
        }

        .tab-btn {
            flex: 0 0 auto;
        }

        .business-tabs::-webkit-scrollbar {
            display: none;

        }

        .business-tabs {
            scrollbar-width: none;

        }

        .tab-btn.active {
            background: #cda93f;
            color: #fff;

        }

        .tab-content-item {
            display: none;
            opacity: 0;
            transform: translateY(18px);
            transition: all 0.45s ease;
        }

        .tab-content-item.active {
            display: block;

            animation: fadeUp 0.45s ease forwards;
        }


        footer {
            background-color: #cda93f;
        }

        footer a {
            text-decoration: none;
        }

        footer h5 {
            font-weight: 700;
        }

        footer ul li a {
            font-size: 15px;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container px-4">

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/saktipos.png') }}" alt="Logo" width="130">
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Menu Tengah -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4 text-lg-start">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Layanan 1</a></li>
                            <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Fitur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Solusi Bisnis
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bisnis Retail</a></li>
                            <li><a class="dropdown-item" href="#">Bisnis Jasa</a></li>
                            <li><a class="dropdown-item" href="#">Bisnis Keuangan</a></li>
                            <li><a class="dropdown-item" href="#">Bisnis Beauty</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Harga</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>

                <!-- Login -->
                <div class="text-lg-end">
                    <a href="#" class="btn btn-outline-light px-4 ms-lg-3 fw-semibold rounded-pill btn-login">
                        Login
                    </a>



                </div>

            </div>
        </div>
    </nav>

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <section class="hero-section hero-bg-1 d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight">SAKTI POS <br>
                                        Kelola Penjualan Lebih Cepat dan Lebih Mudah</span>
                                </h1>

                                <p class="mt-3 text-secondary text-white">
                                    Atur transaksi, stok, dan laporan bisnis Anda
                                    dalam satu sistem kasir online.
                                </p>

                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-gold px-4 py-2 fw-semibold rounded-pill"> Coba Sekarang</a>


                                    <a class="btn btn-outline-light px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <section class="hero-section hero-bg-2 d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight text-white"> Pantau Laporan</span>
                                    <span class="brand-highlight text-white">Secara Real-Time</span>
                                </h1>

                                <p class="mt-3 text-secondary text-white">
                                    Lihat penjualan harian, bulanan, dan tahunan dengan mudah.
                                </p>
                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-gold px-4 py-2 fw-semibold rounded-pill">
                                        Coba Sekarang
                                    </a>

                                    <a class="btn btn-outline-light px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>

            <div class="carousel-item">
                <section class="hero-section hero-bg-3 d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight text-white">Satu Website</span>
                                    <span class="brand-highlight text-white">Responsif di Semua Perangkat</span>
                                </h1>

                                <p class="mt-3 text-white">
                                    Tampilan otomatis menyesuaikan di desktop, tablet, dan smartphone
                                    untuk pengalaman penggunaan yang nyaman kapan saja.
                                </p>


                                <div class="d-flex gap-3 mt-4">
<<<<<<< Updated upstream
                                    <a class="btn btn-gold px-4 py-2 fw-semibold rounded-pill">
                                        Coba Sekarang
                                    </a>
=======
                                    <a class="btn btn-gold px-4 py-2 fw-semibold rounded-pill"> Coba Sekarang</a>
>>>>>>> Stashed changes

                                    <a class="btn btn-outline-light px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>

        <!-- CONTROL -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <section class="about py-5 d-flex align-items-center justify-content-center mb-5 mt-5">
        <div class="container text-center text-md-start">

            <h2 class="fw-bold mb-4"> Mengapa? <span class="fw-bold text-saktipos">SAKTIPOS</span></h2>


            <div class="row align-items-center justify-content-center g-4">

                <!-- Thumbnail -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="instagram-video-frame position-relative mx-auto">
                        <img src="{{ asset('image/thumnail.png') }}" class="img-fluid rounded" alt="Video Instagram"
                            data-bs-toggle="modal" data-bs-target="#videoModal">

                        <div class="play-button">
                            <i class="bi bi-play-fill"></i>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-transparent border-0 position-relative">
                            <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                                data-bs-dismiss="modal"></button>

                            <div class="modal-body p-0">
                                <div class="ratio ratio-1x1">
                                    <blockquote class="instagram-media"
                                        data-instgrm-permalink="https://www.instagram.com/reel/DLEqw6Kp9qV/"
                                        data-instgrm-version="14">
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Teks -->
                <div class="col-md-8 d-flex flex-column justify-content-center mb-5">
                    <div class="mx-md-auto text-about">
                        <h4 class="fw-bold"> Solusi kasir modern yang cepat, akurat, <br>
                            dan <span class="fw-bold text-saktipos">mudah digunakan</span></h4>


                        <p>
                            Sakti Pos adalah aplikasi pembukuan keuangan berbasis web yang mempermudah pencatatan
                            dan pengelolaan transaksi harian. Dilengkapi fitur lengkap seperti transaksi
                            pembelian/penjualan,
                            manajemen stok, laporan keuangan, hingga riwayat hutang/piutang.
                        </p>

                        <p>
                            Dengan Sakti Pos, kamu bisa mengoptimalkan operasional bisnismu di setiap tahap
                            perkembangannya.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="superior-features py-5 mb-5">
        <div class="container">
            <h2 class="fw-bold text-white text-center mb-5">
                Fitur Unggulan SAKTIPOS
            </h2>

            <div class="row align-items-center">

                <!-- Kolom Kiri - Gambar Laptop -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img src="{{ asset('image/fitur-bg.png') }}" class="img-fluid">
                </div>

                <!-- Kolom Kanan - List Fitur -->
                <div class="col-lg-6">

                    <!-- Item 1 -->
                    <div class="d-flex mb-4">
                        <div class="icon-box me-3">
                            <img src="{{ asset('image/fitur1.png') }}" width="60" alt="">
                        </div>
                        <div>
                            <h5 class="fw-bold">Kemudahan Akses Disemua Device</h5>
                            <p class="mb-0">Dapat dibuka di berbagai device dengan <br>
                                menggunakan berbagai browser pilihan anda</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="d-flex mb-4">
                        <div class="icon-box me-3">
                            <img src="{{ asset('image/fitur2.png') }}" width="60" alt="">
                        </div>
                        <div>
                            <h5 class="fw-bold">Laporan Penjualan Instan</h5>
                            <p class="mb-0">Dapat dibuka di berbagai device dengan menggunakan
                                berbagai browser pilihan anda</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="d-flex">
                        <div class="icon-box me-3">
                            <img src="{{ asset('image/fitur3.png') }}" width="60" alt="">
                        </div>
                        <div>
                            <h5 class="fw-bold">Mudah Kelola Produk dan Penjualan</h5>
                            <p class="mb-0">Menyederhanakan sistem pengelolaan produk, <br>
                                pengaturan stok, pencatatan transaksi, dan cetak struk</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <br><br><br>
    <section class="price mb-5">
        <h2 class="fw-bold mb-4 text-center">
            Harga <span class="fw-bold text-saktipos">SAKTIPOS</span>
        </h2>


        <div class="container-fluid">
            <div class="row justify-content-center g-3">

                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-saktipos">
                        <div class="card-body">
                            <h3 class="card-title fw-bold pb-2 text-center">Bulanan</h3>
                            <h4 class="card-subtitle mb-2 text-saktipos fw-bold text-center">100k</h4>
                            <p class="card-text">✔ Lebih hemat untuk pembelian dalam jumlah banyak</p>
                            <p class="card-text">✔ Pengaturan otomatis berdasarkan kuantitas</p>
                            <p class="card-text">✔ Meningkatkan volume penjualan</p>
                            <p class="card-text">✔ Aturan harga yang fleksibel</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-saktipos">
                        <div class="card-body">
                            <h3 class="card-title fw-bold pb-2 text-center">Tahunan</h3>
                            <h4 class="card-subtitle mb-2 text-saktipos fw-bold text-center">500k</h4>

                            <p class="card-text">✔ Harga spesial untuk pelanggan terdaftar</p>
                            <p class="card-text">✔ Meningkatkan repeat order</p>
                            <p class="card-text">✔ Segmentasi pelanggan otomatis</p>
                            <p class="card-text">✔ Promosi lebih terarah</p>
                        </div>
                    </div>
                </div>


                <!-- Button -->
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="" class="btn btn-gold rounded-pill px-4">Selengkapnya</a>
                </div>
            </div>
    </section>
    <br><br>
    <section class="py-5">
        <div class="container">

            <!-- Judul -->
            <h2 class="text-center fw-bold mb-5">Layanan Kami</h2>

            <!-- ITEM 1 -->
            <div class="row align-items-center mb-5">
                <!-- Gambar utama -->
                <div class="col-12 col-md-6 position-relative mb-4 mb-md-0">
                    <img src="{{ asset('image/layanan1.png') }}" class="img-fluid rounded-4 shadow-sm"
                        alt="">

                    <!-- Mockup kecil -->
                    <img src="{{ asset('image/mockup1.png') }}" class="position-absolute small-mockup"
                        alt="">
                </div>

                <!-- Teks -->
                <div class="col-12 col-md-6 mt-4">
                    <h5 class="fw-bold text-saktipos">Kelola Produk Dan Stok Barang</h5>
                    <p class="text-secondary mt-2">
                        Kelola semua produk Anda dengan rapi dan akurat. Tambah, ubah, atau hapus barang
                        dalam beberapa klik. Stok diperbarui otomatis saat transaksi sehingga Anda selalu
                        tahu jumlah terbaru. Hindari kehabisan barang, atur variasi harga, dan pantau produk
                        terlaris dalam satu dashboard.
                    </p>
                </div>
            </div>


            <!-- ITEM 2 (ZIGZAG) -->
            <div class="row align-items-center mb-5 flex-lg-row-reverse">
                <div class="col-lg-6 position-relative mb-4 mb-lg-0">
                    <img src="{{ asset('image/layanan2.png') }}" class="img-fluid rounded-4 shadow-sm"
                        alt="">

                    <!-- Mockup kecil -->
                    <img src="{{ asset('image/mockup2.png') }}" class="position-absolute small-mockup-2"
                        alt="">
                </div>

                <div class="col-lg-6">
                    <h5 class="fw-bold text-saktipos">Pencatatan Penjualan</h5>
                    <p class="text-secondary mt-2">
                        Catat transaksi dengan cepat dan akurat. Proses penjualan dihitung otomatis dengan
                        berbagai metode pembayaran seperti tunai, transfer, dan QRIS. Semua transaksi tersimpan
                        otomatis ke laporan sehingga omzet harian hingga bulanan mudah dipantau tanpa hitungan manual.
                    </p>
                </div>
            </div>

        </div>
    </section>
    {{-- <section class="py-5 bussines">
        <div class="container-fluid px-3 px-md-5">

            <!-- Judul -->
            <h2 class="text-center fw-bold text-white mb-4">
                Solusi Untuk Berbagai Jenis Bisnis
            </h2>

            <!-- Tabs -->
            <div class="d-flex justify-content-center mb-5 px-3">
                <div class="business-tabs p-2 rounded-pill bg-white d-flex gap-4">
                    <button class="tab-btn active" data-target="retail-barang">Bisnis Retail</button>
                    <button class="tab-btn" data-target="retail-jasa">Bisnis Jasa</button>
                    <button class="tab-btn" data-target="retail-fnb">Bisnis F&B</button>
                    <button class="tab-btn" data-target="retail-grosir">Bisnis Grosir</button>
                    <button class="tab-btn" data-target="retail-beauty">Bisnis Digital</button>
                </div>
            </div>

            <!-- Konten Tabs -->
            <div class="tab-content-wrapper">

                <!-- TAB 1: Retail Barang -->
                <div class="tab-content-item active" id="retail-barang">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold text-white mb-3">Bisnis Retail</h3>
                            <p class="text-white mb-4">
                                Atur stok, kategori, dan varian produk dengan cepat,
                                sehingga operasional toko tetap rapi dan terkendali setiap hari.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/shop.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pengelolaan Stok yang Lebih Akurat</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/receipt.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pencatatan Penjualan yang Cepat & Efisien</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/list-ul.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Varian dan Kategori Produk Tersusun Rapi</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0 text-center">
                            <img src="{{ asset('image/retail.png') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>

                <!-- TAB 2: Retail Jasa -->
                <div class="tab-content-item" id="retail-jasa">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold text-white mb-3">Bisnis Jasa</h3>
                            <p class="text-white mb-4">
                                Retail jasa berfokus pada layanan seperti salon, bengkel,
                                laundry, dan jasa perawatan lainnya.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/shop.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pengelolaan Stok yang Lebih Akurat</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/receipt.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pencatatan Penjualan yang Cepat & Efisien</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/list-ul.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Varian dan Kategori Produk Tersusun Rapi</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('image/jasa.webp') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>

                <!-- TAB 3: Bisnis F&B -->
                <div class="tab-content-item" id="retail-fnb">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold text-white mb-3">Bisnis F&B</h3>
                            <p class="text-white mb-4">
                                Retail makanan mencakup restoran, café, bakery, dan bisnis kuliner lainnya.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/shop.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pengelolaan Stok yang Lebih Akurat</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/receipt.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pencatatan Penjualan yang Cepat & Efisien</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/list-ul.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Varian dan Kategori Produk Tersusun Rapi</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('image/food.webp') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>

                <!-- TAB 4: Bisnis Grosir -->
                <div class="tab-content-item" id="retail-grosir">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold text-white mb-3">Bisnis Grosir</h3>
                            <p class="text-white mb-4">
                                Retail grosir fokus pada penjualan dalam jumlah banyak
                                untuk reseller atau toko lain.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/shop.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pengelolaan Stok yang Lebih Akurat</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/receipt.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pencatatan Penjualan yang Cepat & Efisien</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/list-ul.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Varian dan Kategori Produk Tersusun Rapi</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('image/grosir.jpg') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>

                <!-- TAB 5: Bisnis Beauty -->
                <div class="tab-content-item" id="retail-beauty">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="fw-bold text-white mb-3">Bisnis Digital</h3>
                            <p class="text-white mb-4">
                                Retail digital fokus pada layanan digital dan produk online.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/shop.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pengelolaan Stok yang Lebih Akurat</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/receipt.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Pencatatan Penjualan yang Cepat & Efisien</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3">
                                    <img src="{{ asset('image/list-ul.png') }}" width="28" alt="">
                                </div>
                                <p class="mb-0 fw-semibold text-white">Varian dan Kategori Produk Tersusun Rapi</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('image/digital.webp') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}

    <section class="faq py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">FAQ</h2>
            <div class="accordion" id="faqAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            Apa itu SAKTIPOS?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            SAKTIPOS adalah sistem kasir online untuk mengelola penjualan, stok, dan laporan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Bagaimana cara menggunakan SAKTIPOS?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Cukup daftar, login, tambahkan produk, kemudian langsung bisa melakukan transaksi dan
                            memantau
                            laporan secara otomatis
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Apa saja fitur SAKTIPOS
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            -Absensi <br>
                            - Kelola Stok Produk <br>
                            - Pengelolaan Stok Otomatis <br>
                            - Kasir POS <br>
                            - Laporan Penjualan <br>
                            - Laporan Hutang Piutang
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Bagaimana cara daftar akun di SAKTIPOS?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Cara daftar akun adalah dengan mengisi data di halaman register
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Apakah SAKTI POS bisa dipakai banyak perangkat ?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, SAKTIPOS dapat digunakan di berbagai perangkat karena sudah reponsiv
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="" class="btn btn-gold rounded-pill px-4">Selengkapnya</a>

                </div>
            </div>
        </div>
    </section>

    <footer class="text-white py-5">
        <div class="container">
            <div class="row gy-4">

                <div class="col-12 col-md-4">
                    <img src="{{ asset('image/saktipos.png') }}" alt="" width="150" class="mb-2">
                    <p>Tegal Besar Permai 1 Blok AB-9, Kaliwates Jember, Jawa Timur, Indonesia Phone/WA : 081230033880
                        Email : mascitra.com@gmail.com</p>
                </div>

                <div class="col-6 col-md-2">
                    <h5>Beranda</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="" class="text-white">Unduh Aplikasi</a></li>
                        <li><a href="" class="text-white">Mesin Kasir</a></li>
                        <li><a href="" class="text-white">Kerjasama dengan Qasir</a></li>
                        <li><a href="" class="text-white">Kebijakan Privasi</a></li>
                        <li><a href="" class="text-white">Syarat dan Ketentuan</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2">
                    <h5>Tentang Kami</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="" class="text-white">Tentang Kasir</a></li>
                        <li><a href="" class="text-white">Karir</a></li>
                        <li><a href="" class="text-white">Tim Karir</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2">
                    <h5>Blog</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="" class="text-white">Event</a></li>
                        <li><a href="" class="text-white">Inspirasi</a></li>
                        <li><a href="" class="text-white">Promo Kasir</a></li>
                        <li><a href="" class="text-white">Studi Kasus</a></li>
                        <li><a href="" class="text-white">Tips</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2">
                    <h5>Support</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="" class="text-white">Bantuan</a></li>
                        <li><a href="" class="text-white">Video Tutorial</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <span class="text-white fw-bold">© 2025 SaktiPos . All rights reserved</span>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {


            const navbar = document.querySelector(".navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });


            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content-item');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {

                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));

                    tab.classList.add('active');
                    document
                        .getElementById(tab.dataset.target)
                        .classList.add('active');
                });
            });

        });
    </script>
</body>

</html>
