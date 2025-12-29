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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #ffffff;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            position: fixed;
            width: 100%;
            z-index: 9999;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .btn-outline-dark-custom {
            background-color: transparent;
            border: 1.5px solid #000000;
            color: #000000;
            font-weight: 500;
        }

        .btn-outline-dark-custom:hover {
            background-color: #CDA93F;
            color: #ffffff;
            border-color: #CDA93F;
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
                    <li class="nav-item"><a class="nav-link" href="{{route('landingpage')}}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/#layanan1">Layanan 1</a></li>
                            <li><a class="dropdown-item" href="/#layanan2">Layanan 2</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('artikel')}}">Blog</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="{{route('harga')}}">Harga</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                </ul>
                </li>
                <!-- Login (masuk ke responsif juga) -->
                <div class=" text-lg-end">
                    <a href="{{route('login')}}" class="btn btn-outline-dark-custom px-4 ms-lg-3 fw-semibold rounded-pill">
                        Login
                    </a>

                </div>

            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>

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
