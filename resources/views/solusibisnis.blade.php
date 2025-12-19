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
            width: fit-content;
            margin: 0 auto;
            /* posisi tabs ke tengah halaman */
        }


        .tab-btn {
            border: none;
            background: transparent;
            padding: 10px 26px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            color: #f6a800;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
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


    <section class="business-category py-5">
        <div class="container">

            <h3 class="fw-bold mb-4">Kategori Bisnis</h3>

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
    </script>pp
@endsection
