<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ - SAKTIPOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
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

        .navbar-collapse.show {
            background-color: #d5b043;
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

        .hero-section {
            padding: 100px 0;
            position: relative;
            background: #ffffff;

        }

        .hero-faq {
            padding: 100px 0;
            position: relative;
            background-image: url("{{ asset('image/faqbg.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .hero-faq h1 {
            font-size: 2.5rem;
            line-height: 1.2;
        }

        .hero-faq p {
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        .hero-section {
            padding: 40px 0;
            position: relative;
        }

        .another-question h2 {
            margin-bottom: 0;
        }

        .card {
            border-color: #CDA93F;
            width: 100%;
            border-radius: 30px;
            margin-top: 3rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.692);
        }

        .contact-text {
            color: #CDA93F;
            font-size: 32px;
            justify-content: center;
            align-items: center;
            display: flex;
            margin: 0;
        }

        .rounded-circle {
            width: 60px;
            height: 60px;
            background-color: #F9C75B;
        }

        .accordion-button {
            font-weight: 600;
        }

        .accordion-button:not(.collapsed) {
            color: #CDA93F;
            background-color: #ffffff;
        }
        .btn-saktipos {
            background-color: #cda93f;
            border-color: #cda93f;
            color: #ffffff;
        }

        .btn-saktipos:hover {
            background-color: #b89633;
            border-color: #b89633;
            color: #ffffff;
        }
        .icon-bg-saktipos {
            background-color: #cda93f;
            width: 55px;
            height: 55px;
        }
        footer {
            background-color: #CDA93F;
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


        @media (max-width: 991px) {
            .hero-faq {
                padding: 80px 20px;
            }

            .hero-faq h1 {
                font-size: 2.5rem;
            }

            .hero-faq p {
                font-size: 1.1rem;
            }


            .hero-section {
                padding: 30px 0;
                text-align: start;
            }

            .contact-text {
                font-size: 24px;
            }

            .card {
                margin-top: 1.5rem;
            }

            @media (max-width: 576px) {
                .hero-faq {
                    padding: 60px 15px;
                }

                .hero-faq h1 {
                    font-size: 2rem;
                }

                .hero-faq p {
                    font-size: 1rem;
                }
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
                        <a class="nav-link" href="{{route('landingpage')}}">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/#layanan1">Layanan 1</a></li>
                            <li><a class="dropdown-item" href="/#layanan2">Layanan 2</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#fitur">Fitur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('artikel')}}">Blog</a>
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
                        <a class="nav-link" href="{{route('harga')}}">Harga</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                    </li>
                </ul>

                <!-- Login -->
                <div class="text-lg-end">
                   <a href="{{route('login')}}" class="btn btn-outline-light px-4 ms-lg-3 fw-semibold rounded-pill btn-login">
                        Login
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <section class="hero-section hero-faq d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <!-- KIRI -->
                <div class="col-12">
                    <h1 class="fw-bold text-white">
                        Pertanyaan Seputar <br>
                        SAKTI POS
                    </h1>

                    <p class="mt-3 text-secondary text-white">
                        Temukan jawaban dari berbagai <br>
                        pertanyaan umum mengenai penggunaan <br>
                        Sakti POS.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <section class="faq py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Pertanyaan Umum</h2>
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
                            Apakah SAKTI POS bisa dipakai di HP ?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, SAKTIPOS dapat digunakan di berbagai perangkat karena sudah reponsiv
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6">
                            Apakah SAKTIPOS bisa dipakai untuk lebih dari satu toko ?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, Sakti Pos bisa digunakan di semua toko
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="another-question text-center py-4 mb-5">
        <h2 class="text-center mb-1 fw-bold">Ada Pertanyaan Lain ?</h2>
        <span class="fw-bold contact-text">Hubungi Kami</span>

        <div class="container gap-4 ">

            <!-- Icon lingkaran -->
            <div class="row justify-content-center gap-4">

                <!-- Card Telepon -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card p-4 shadow-sm border-2">
                        <div class="d-flex align-items-center justify-content-center m-auto gap-3">
                                <div class="rounded-circle d-flex justify-content-center align-items-center icon-bg-saktipos">
                                <i class="bi bi-telephone-fill text-white fs-3"></i>
                            </div>
                            <span class="fw-bold fs-4">123-456-789</span>
                        </div>
                    </div>
                </div>
                <!-- Card Email -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card p-4 shadow-sm border-2">
                        <div class="d-flex align-items-center justify-content-center m-auto gap-3">
                         <div class="rounded-circle d-flex justify-content-center align-items-center icon-bg-saktipos">
                                <i class="bi bi-envelope text-white fs-3"></i>
                            </div>
                            <span class="fw-bold fs-4">123-456-789</span>
                        </div>
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

            /* =========================
               NAVBAR SCROLL EFFECT
            ========================= */
            const navbar = document.querySelector(".navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });


            /* =========================
               TAB BUTTON FUNCTION
            ========================= */
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
