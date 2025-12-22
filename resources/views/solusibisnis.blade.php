@extends('layouts.app')
@section('content')
    <style>
        .hero-section {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .hero-bg {
            width: 100%;
            height: auto;
            display: block;
        }

        /* OVERLAY */
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.70);
        }

        /* WRAPPER KONTEN */
        .hero-wrapper {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            right: 0;
        }

        /* KONTEN */
        .hero-content {
            color: #ffffff;
            max-width: 520px;
            margin: 0 auto;
            /* pusatkan blok */
            text-align: center;
            /* pusatkan teks & button */
        }


        .hero-content h1 {
            font-size: 34px;
            font-weight: 700;
            line-height: 1.3;
        }

        .hero-content p {
            font-size: 14px;
            line-height: 1.7;
            opacity: 0.9;
            margin-bottom: 24px;
        }

        .business-category {
            background: #ffffff;
        }

        .category-tabs {
            display: flex;
            align-items: center;
            justify-content: center;
            /* isi tab ke tengah */
            gap: 12px;
            padding: 10px;
            background: #ffffff;
            border-radius: 50px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            width: 100%;
            margin: 0 auto;
            /* posisi tabs ke tengah halaman */
        }


        .tab-btn {
            border: none;
            background: transparent;
            padding: 13px 26px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            color: #f6a800;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            width: 100%;
        }

        .tab-btn:hover {
            background: rgba(246, 168, 0, 0.1);
        }

        .tab-btn.active {
            background: #f6a800;
            color: #ffffff;
            box-shadow: 0 6px 14px rgba(246, 168, 0, 0.45);
        }

        .tab-content-wrapper {
            margin-top: 50px;
        }

        .tab-content-item {
            display: none;
            animation: tabFade 0.45s ease;
        }

        .tab-content-item.active {
            display: block;
        }

        @keyframes tabFade {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .tab-content-item h4 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .tab-content-item p {
            font-size: 15px;
            line-height: 1.7;
            color: #555555;
            max-width: 480px;
        }

        .retail-img {
            width: 100%;
            max-width: 420px;
            border-radius: 28px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        }

        @media (max-width: 991px) {
            .category-tabs {
                flex-wrap: wrap;
                border-radius: 24px;
            }

            .tab-btn {
                padding: 8px 20px;
                font-size: 13px;
            }

            .tab-content-item h4 {
                font-size: 22px;
            }

            .tab-content-item p {
                font-size: 14px;
            }

            .retail-img {
                max-width: 100%;
            }
        }

        .solusi-section {
            background-color: #F9C75B;
            padding: 60px 0;
            margin-bottom: 60px;
        }


        .solusi-card {
            background: #ffffff;
            border-radius: 28px;
            padding: 40px 24px;
            text-align: center;
            height: 100%;
        }

        .solusi-card img {
            max-width: 260px;
            margin-bottom: 24px;
        }

        .solusi-card p {
            color: #FFAE00;
            font-weight: 600;
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 0;
            fom-weight: bold;
        }

        .btn-hero {
            background-color: #f6a800;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 28px;
            font-size: 17px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 20px;
            font-weight: bold;
        }

        .btn-hero:hover {
            background-color: #e09500;
            color: #ffffff;
        }

        .help-section {
            padding: 80px 0;
            margin-top: 100px;
            /* JARAK DARI SECTION ATAS */
        }

        .help-title {
            font-weight: 600;
            margin-bottom: 24px;
        }

        .contact-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 26px 32px;
            width: 50%;
            border-radius: 40px;
            border: 2px solid #FFAE00;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: #FFAE00;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
    </style>

    <section class="hero-section">
        <img src="{{ asset('image/solusibg.png') }}" class="hero-bg" alt="Hero">

        <div class="hero-overlay"></div>

        <div class="container hero-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Bisnis Retail</h1>

                        <p>
                            Optimalkan Operasional Retail dengan SAKTI POS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="business-category py-5 mt-5 mb-5">
        <div class="container">
            <h2 class="fw-bold mb-4">Kategori Bisnis</h2>


            <!-- Tabs -->
            <div class="category-tabs mb-5">
                <button class="tab-btn active" data-target="retail-barang">Retail Barang</button>
                <button class="tab-btn" data-target="retail-jasa">Retail Jasa</button>
                <button class="tab-btn" data-target="retail-makanan">Retail Makanan</button>
                <button class="tab-btn" data-target="retail-online">Retail Online (E-commerce)</button>
            </div>

            <!-- Content -->
            <div class="tab-content-wrapper">

                <!-- TAB 1 -->
                <div class="tab-content-item active" id="retail-barang">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h4 class="fw-bold mb-3">
                                Apa itu <span class="text-warning">Bisnis Retail Barang?</span>
                            </h4>
                            <p class="text-muted">
                                Bisnis retail adalah kegiatan menjual barang langsung kepada pelanggan akhir untuk kebutuhan
                                pribadi, bukan untuk dijual kembali. Contohnya seperti minimarket, toko pakaian, toko
                                elektronik, apotek, dan toko kecantikan.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img src="{{ asset('image/retail.png') }}" class="retail-img">
                        </div>
                    </div>
                </div>

                <!-- TAB 2 -->
                <div class="tab-content-item" id="retail-jasa">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h4 class="fw-bold mb-3">
                                Apa itu <span class="text-warning">Retail Jasa?</span>
                            </h4>
                            <p class="text-muted">
                                Retail jasa berfokus pada layanan seperti salon, bengkel,
                                laundry, dan jasa perawatan lainnya.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img src="{{ asset('image/retail.png') }}" class="retail-img">
                        </div>
                    </div>
                </div>

                <!-- TAB 3 -->
                <div class="tab-content-item" id="retail-makanan">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h4 class="fw-bold mb-3">
                                Apa itu <span class="text-warning">Retail Makanan?</span>
                            </h4>
                            <p class="text-muted">
                                Retail makanan mencakup restoran, café, bakery,
                                dan bisnis kuliner lainnya.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img src="{{ asset('image/retail.png') }}" class="retail-img">
                        </div>
                    </div>
                </div>

                <!-- TAB 4 -->
                <div class="tab-content-item" id="retail-online">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h4 class="fw-bold mb-3">
                                Apa itu <span class="text-warning">Retail Online?</span>
                            </h4>
                            <p class="text-muted">
                                Retail online menjual produk melalui website, marketplace,
                                dan media sosial secara digital.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img src="{{ asset('image/retail.png') }}" class="retail-img">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <section class="solusi-section">
        <div class="container text-center">
            <h2 class="fw-bold text-white mb-5">
                Solusi yang ditawarkan
            </h2>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="solusi-card">
                        <img src="{{ asset('image/2bs.png') }}" alt="">
                        <p>
                            Pengelolaan Stok Barang<br>
                            yang lebih akurat
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="solusi-card">
                        <img src="{{ asset('image/1bs.png') }}" alt="">
                        <p>
                            Pencatatan Keuangan<br>
                            lebih efisien
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="solusi-card">
                        <img src="{{ asset('image/3bs.png') }}" alt="">
                        <p>
                            Kategori produk<br>
                            lebih tersusun dan rapi
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="#" class="btn btn-hero">
                    Coba Sekarang
                </a>
            </div>
        </div>
    </section>



    <section class="help-section text-center">
        <div class="container">
            <h2 class="help-title fw-bold mb-5">
                Ada kendala?<br>
                Hubungi nomor di bawah ini
            </h2>

            <div class="contact-box">
                <div class="contact-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <span>+123-456-789</span>
            </div>
        </div>
    </section>


    <script>
        const tabs = document.querySelectorAll('.tab-btn');
        const contents = document.querySelectorAll('.tab-content-item');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {

                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active'));

                tab.classList.add('active');
                document.getElementById(tab.dataset.target).classList.add('active');

            });
        });
    </script>
@endsection
