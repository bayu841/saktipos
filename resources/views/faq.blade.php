@extends('layouts.app')
@section('content')
    <br><br><br>
    <style>
        .hero-section {
            padding: 50px 0;
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
            width: 90%;
        }

        .another-question h2 {
            margin-bottom: 0;
        }

        .card {
            border-color: #F9C75B;
            width: 100%;
            border-radius: 30px;
            margin-top: 3rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.692);
        }

        .contact-text {
            color: #F9C75B;
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
            color: #FFAE00;
            background-color: #ffffff;
        }
    </style>
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <!-- KIRI -->
                <div class="col-lg-6 text-start mb-5 mb-lg-0">
                    <h1 class="fw-bold text-white">
                        Pertanyaan Seputar <br>
                        SAKTI POS
                    </h1>

                    <p class="mt-3 text-secondary text-white">
                        Temukan jawaban dari berbagai pertanyaan umum mengenai penggunaan Sakti POS.
                        Kami menyediakan informasi lengkap untuk membantu Anda memahami fitur, layanan, dan cara kerja
                        sistem kami dengan lebih mudah.
                    </p>
                </div>

                <!-- KANAN -->
                <div class="col-lg-6 position-relative hero-right">
                    <img src="{{ asset('image/faqbg.png') }}" class="hero-laptop" alt="">
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
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="" class="btn btn-warning text-white rounded-pill px-4">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

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
                        <div class="rounded-circle d-flex justify-content-center align-items-center">
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
                        <div class="rounded-circle d-flex justify-content-center align-items-center">
                            <i class="bi bi-envelope text-white fs-3"></i>
                        </div>
                        <span class="fw-bold fs-4">123-456-789</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
