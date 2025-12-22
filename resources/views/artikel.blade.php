@extends('layouts.app')
@section('content')
    <br><br><br>
    <style>
        .hero-section {
            padding: 60px 0;
            position: relative;
            background: #F9C75B;
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
            border-radius: 20px;
            height: 100%;
        }

        .card img{
            height: 100%;
            object-fit: cover;
            border-radius: 20px 20px 0 0;
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
    </style>
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
                        <a class="btn btn-warning btn-hero px-4 py-2 fw-semibold text-white">Jelajai Blog</a>
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
@endsection
