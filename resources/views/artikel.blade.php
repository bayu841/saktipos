<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - SAKTIPOS</title>
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
        body{
            font-family: 'Poppins', sans-serif;
        }
           .navbar {
            background-color: transparen !important;
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

        .navbar:not(.scrolled) .dropdown-toggle {
            color: #ffffff;
        }

        .navbar:not(.scrolled) .dropdown-menu {
            background-color: #F9C75B;
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

        .hero-section {
            padding: 100px 0;
            position: relative;
            background-image: url("{{ asset('image/heroblog.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            height: 100%;
        }

        .hero-laptop {
            width: 100%;
            max-width: none;
            position: relative;
            z-index: 2;
            margin-left: 80px;
        }

        .hero-right img {
            width: 80%;
        }

        .btn-hero {
            border-radius: 40px;
            background-color: #F5B529;
            height: 50%;
            width: 30%;
        }

        .btn-hero:hover {
            background-color: #ffb109;
        }

        .article-title {
            text-decoration: underline;
            text-decoration-color: #F5B529;

        }

        .card {
            width: 100%;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            height: 100%;
        }

        .card img{
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .container-card {
            width: 100%;
        }

        .text-end a {
            border-radius: 20px;
        }

        .btn-container .btn {
            border-radius: 10px;
        }
        footer {
            background-color: #F9C75B;
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
                    <a href="#" class="btn btn-warning text-white px-4 ms-lg-3 fw-semibold rounded-pill">
                        Login
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <!-- KIRI -->
                <div class="col-lg-6 text-start mb-5 mb-lg-0">
                    <h1 class="fw-bold text-white">
                        Insight Bisnis yang Penting untuk Anda
                    </h1>

                    <p class="mt-3 text-secondary text-white">
                        Baca tren, strategi, dan berita terkini yang bisa membantu usaha Anda berkembang lebih cepat.
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a class="btn btn-warning btn-hero px-4 py-2 fw-semibold text-white">Jelajahi Blog</a>
                    </div>
                </div>
                <!-- KANAN -->
                <div class="col-lg-6 position-relative hero-right">
                    <img src="{{ asset('image/blogbg.png') }}" class="hero-laptop" alt="">
                </div>

            </div>
        </div>
    </section>
    <br><br><br>

    <section class="article-container p-5">
        <h2 class="article-title fw-bold mb-4">Artikel Terbaru</h2>

        <div class="container my-4">
            <div class="row g-4">

                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{asset('image/detail.png')}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copy div.col untuk card lainnya -->

        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center gap-2 mt-5 flex-wrap">
            <a href="#" class="btn btn-warning text-white fw-bold">Sebelumnya</a>
            <a href="#" class="btn btn-warning text-white fw-bold">1</a>
            <a href="#" class="btn btn-warning text-white fw-bold">2</a>
            <a href="#" class="btn btn-warning text-white fw-bold">3</a>
            <a href="#" class="btn btn-warning text-white fw-bold">Selanjutnya</a>
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
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");

            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
