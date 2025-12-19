@extends('layouts.app')
@section('content')
    <br><br><br>
    <style>
        .hero-section {
            padding: 100px 0;
            position: relative;
            background: #ffffff;
        }

        .brand-highlight {
            border-radius: 12px;
            font-size: 42px;
            font-weight: 800;
            display: inline-block;
            color: #FFAE00;
        }

        .hero-laptop {
            width: 100%;
            max-width: none;
            position: relative;
            z-index: 2;
            margin-left: 0;
        }

        .btn-hover:hover {
            color: #ffffff;
        }

        .btn-hero {
            border-radius: 40px;
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
            background-color: #F9C75B;
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
        }

        .card {
            width: 28rem;
            height: 24rem;
            border-radius: 20px;
        }

        .bussines {
            height: 100%;
            width: 100%;
            background-color: #F9C75B;
            padding: 50px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .small-mockup {
            width: 260px;
            bottom: -40px;
            right: -20px;
        }

        .small-mockup-2 {
            width: 180px;
            bottom: -20px;
            left: -30px;
        }

        /*
            .flex-lg-row-reverse .small-mockup {
                left: -60px;
                bottom: -20px;
                right: auto;
            } */
        .bussines {
            background: #F9C75B;
            margin-bottom: 5rem;
        }

        .business-tabs {
            padding-left: 30px;
            padding-right: 30px;
        }

        .tab-btn {
            background: transparent;
            border: none;
            font-weight: 600;
            font-size: 18px;
            color: #E29E0B;
            padding: 10px 20px;
            border-radius: 40px;
            transition: .3s;
        }

        .tab-btn.active {
            background: #FFAE00;
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
            color: #FFAE00;
            background-color: #ffffff;
        }

        .carousel-indicators {
            gap: 10px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #FFAE00;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .business-tabs {
            max-width: 100%;
            overflow-x: auto;
            flex-wrap: nowrap;
            white-space: nowrap;
            scrollbar-width: none;
        }

        .business-tabs::-webkit-scrollbar {
            display: none;
        }

        .tab-btn {
            flex-shrink: 0;
            border: none;
            background: transparent;
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 14px;
            white-space: nowrap;
        }

        .tab-btn.active {
            background: #f5b529;
            color: #fff;
        }


        /* Responsif */
        @media (max-width: 991px) {
            .hero-right {
                margin-top: 50px;
            }

            .hero-bg-shape {
                width: 400px;
                height: 400px;
                right: -30px;
            }

            .hero-laptop {
                margin-left: 0;
            }

            .hero-phone {
                width: 140px;
                bottom: -10px;
            }
        }
    </style>
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <section class="hero-section d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight">SAKTI POS</span>
                                    Kelola Penjualan Lebih Cepat dan Lebih Mudah
                                </h1>

                                <p class="mt-3 text-secondary">
                                    Atur transaksi, stok, dan laporan bisnis Anda
                                    dalam satu sistem kasir online.
                                </p>

                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-warning px-4 py-2 fw-semibold text-white rounded-pill px-4">
                                        Coba Sekarang
                                    </a>
                                    <a class="btn btn-outline-warning px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('image/herobg.png') }}" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <section class="hero-section d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <h1 class="fw-bold">
                                    Pantau <span class="brand-highlight">Laporan</span> Secara Real-Time
                                </h1>

                                <p class="mt-3 text-secondary">
                                    Lihat penjualan harian, bulanan, dan tahunan dengan mudah.
                                </p>
                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-warning px-4 py-2 fw-semibold text-white rounded-pill px-4">
                                        Coba Sekarang
                                    </a>
                                    <a class="btn btn-outline-warning px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('image/herobg.png') }}" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="carousel-item">
                <section class="hero-section d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight">SAKTI POS</span>
                                    Kelola Penjualan Lebih Cepat dan Lebih Mudah
                                </h1>

                                <p class="mt-3 text-secondary">
                                    Atur transaksi, stok, dan laporan bisnis Anda
                                    dalam satu sistem kasir online.
                                </p>

                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-warning px-4 py-2 fw-semibold text-white rounded-pill px-4">
                                        Coba Sekarang
                                    </a>
                                    <a class="btn btn-outline-warning px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('image/herobg.png') }}" class="img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="carousel-item">
                <section class="hero-section d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="fw-bold">
                                    <span class="brand-highlight">SAKTI POS</span>
                                    Kelola Penjualan Lebih Cepat dan Lebih Mudah
                                </h1>

                                <p class="mt-3 text-secondary">
                                    Atur transaksi, stok, dan laporan bisnis Anda
                                    dalam satu sistem kasir online.
                                </p>

                                <div class="d-flex gap-3 mt-4">
                                    <a class="btn btn-warning px-4 py-2 fw-semibold text-white rounded-pill px-4">
                                        Coba Sekarang
                                    </a>
                                    <a class="btn btn-outline-warning px-4 py-2 fw-semibold rounded-pill px-4">
                                        Lihat Fitur
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('image/herobg.png') }}" class="img-fluid" alt="">
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

            <h2 class="fw-bold mb-4">
                Mengapa? <span class="fw-bold text-warning">SAKTIPOS</span>
            </h2>

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
                        <h4 class="fw-bold">
                            Solusi kasir modern yang cepat, akurat, <br>
                            dan <span class="text-warning fw-bold">mudah digunakan</span>
                        </h4>

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
            Harga <span class="fw-bold text-warning">SAKTIPOS</span>
        </h2>

        <div class="container">
            <div class="row justify-content-center g-3">

                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning">
                        <div class="card-body">
                            <h3 class="card-title fw-bold pb-2">Grosir</h3>
                            <h4 class="card-subtitle mb-2 text-warning fw-bold">100k</h4>
                            <p class="card-text">✔ Lebih hemat untuk pembelian dalam jumlah banyak</p>
                            <p class="card-text">✔ Pengaturan otomatis berdasarkan kuantitas</p>
                            <p class="card-text">✔ Meningkatkan volume penjualan</p>
                            <p class="card-text">✔ Aturan harga yang fleksibel</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-warning pb-2">Member</h3>
                            <h4 class="card-subtitle mb-2 text-warning fw-bold">200k</h4>
                            <p class="card-text">✔ Harga spesial untuk pelanggan terdaftar</p>
                            <p class="card-text">✔ Meningkatkan repeat order</p>
                            <p class="card-text">✔ Segmentasi pelanggan otomatis</p>
                            <p class="card-text">✔ Promosi lebih terarah</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning">
                        <div class="card-body">
                            <h3 class="card-title fw-bold pb-2">Outlet</h3>
                            <h4 class="card-subtitle mb-2 text-warning fw-bold">300k</h4>
                            <p class="card-text">✔ Setiap cabang bisa punya harga berbeda</p>
                            <p class="card-text">✔ Manajemen harga lebih rapi</p>
                            <p class="card-text">✔ Mendukung bisnis multi-outlet</p>
                            <p class="card-text">✔ Kontrol penuh dari pusat</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Button -->
            <div class="d-flex justify-content-center align-items-center mt-3">
                <a href="" class="btn btn-warning text-white rounded-pill px-4">
                    Selengkapnya
                </a>
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
                <div class="col-lg-6 position-relative mb-4 mb-lg-0">
                    <img src="{{ asset('image/layanan1.png') }}" class="img-fluid rounded-4 shadow-sm" alt="">

                    <!-- Mockup kecil -->
                    <img src="{{ asset('image/mockup1.png') }}" class="position-absolute small-mockup" alt="">
                </div>

                <div class="col-lg-6"><br>
                    <h5 class="fw-bold text-warning">Kelola Produk Dan Stok Barang</h5>
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
                    <img src="{{ asset('image/layanan2.png') }}" class="img-fluid rounded-4 shadow-sm" alt="">

                    <!-- Mockup kecil -->
                    <img src="{{ asset('image/mockup2.png') }}" class="position-absolute small-mockup-2" alt="">
                </div>

                <div class="col-lg-6">
                    <h5 class="fw-bold text-warning">Pencatatan Penjualan</h5>
                    <p class="text-secondary mt-2">
                        Catat transaksi dengan cepat dan akurat. Proses penjualan dihitung otomatis dengan
                        berbagai metode pembayaran seperti tunai, transfer, dan QRIS. Semua transaksi tersimpan
                        otomatis ke laporan sehingga omzet harian hingga bulanan mudah dipantau tanpa hitungan manual.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="py-5 bussines">
        <div class="container-fluid px-3 px-md-5">

            <!-- Judul -->
            <h2 class="text-center fw-bold text-white mb-4">
                Solusi Untuk Berbagai Jenis Bisnis
            </h2>

            <!-- Tabs -->
            <div class="d-flex justify-content-center mb-5 px-3">
                <div class="business-tabs p-2 rounded-pill bg-white d-flex gap-4">
                    <button class="tab-btn active">Bisnis Retail</button>
                    <button class="tab-btn">Bisnis Jasa</button>
                    <button class="tab-btn">Bisnis F&B</button>
                    <button class="tab-btn">Bisnis Grosir</button>
                    <button class="tab-btn">Bisnis Beauty</button>
                </div>
            </div>

            <!-- Konten -->
            <div class="row align-items-center">

                <!-- Kiri -->
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

                <!-- Kanan -->
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('image/retail.png') }}" class="img-fluid rounded-4" alt="">
                </div>

            </div>

        </div>
    </section>
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
                            Cukup daftar, login, tambahkan produk, kemudian langsung bisa melakukan transaksi dan memantau
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
                    <a href="" class="btn btn-warning text-white rounded-pill px-4">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
