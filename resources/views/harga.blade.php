@extends('layouts.app')

@section('content')
    <style>
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }


        .hero-bg {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .hero-section img {
            width: 100%;
            height: 100%;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero-wrapper {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            right: 0;
        }

        .hero-content {
            color: #ffffff;
            max-width: 520px;
        }

        .hero-content h1 {
            font-size: 34px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 16px;
        }

        .hero-content p {
            font-size: 15px;
            line-height: 1.7;
            opacity: 0.9;
            margin-bottom: 24px;
        }


        .btn-hero {
            background-color: #F9C75B;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 28px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-hero:hover {
            background-color: #e09500;
            color: #ffffff;
        }

        .price {
            padding-top: 100px;
            padding-bottom: 80px;
        }

        .price-title {
            margin-bottom: 56px;
        }

        .price .card {
            border-radius: 16px;
        }

        .feature-section {
            padding: 80px 0;
        }

        .feature-title {
            color: #FFAE00;
            font-weight: 700;
            margin-bottom: 32px;
        }

        .feature-table-wrapper {
            border: 2px solid #FFAE00;
            border-radius: 12px;
            overflow: hidden;
            background: #ffffff;
        }

        .feature-table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .feature-table thead th {
            background-color: #F9C75B;
            color: #ffffff;
            font-weight: 700;
            text-align: center;
            padding: 14px 16px;
            border-bottom: 3px solid #FFAE00;
        }

        .feature-table tbody tr {
            background-color: #F8F8F8;
            border-bottom: 1px solid #7D7C7C;
        }

        .feature-table tbody td {
            padding: 14px 16px;
            font-size: 14px;
            vertical-align: middle;
            text-align: center;
        }

        .feature-table thead th:first-child,
        .feature-table tbody td:first-child {
            text-align: center;
        }

        .feature-table tbody td:not(:first-child) {
            font-size: 18px;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 26px;
            }

            .price {
                padding-top: 70px;
            }
        }
    </style>

    <section class="hero-section">
        <img src="{{ asset('image/hargabg.png') }}" class="hero-bg" alt="Hero">

        <div class="hero-overlay"></div>

        <div class="container hero-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>
                            Pilih Paket Harga Sesuai<br>
                            Kebutuhan Bisnismu
                        </h1>

                        <p>
                            Transparan, fleksibel, dan tanpa biaya tersembunyi.
                            Mulai gunakan Sakti POS dan kelola penjualan
                            lebih mudah.
                        </p>

                        <a href="#" class="btn btn-hero">
                            Jelajahi Harga
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="price">
        <div class="container">

            <div class="price-title text-center">
                <h2 class="fw-bold">
                    <span class="text-warning">Pilih Harga Sesuai dengan Kebutuhan</span>
                </h2>
            </div>

            <div class="row justify-content-center g-4">

                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning w-100">
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

                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning w-100">
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

                <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                    <div class="card border-3 border-warning w-100">
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
        </div>
    </section>

    <section class="feature-section">
        <div class="container">

            <h3 class="feature-title">Fitur Yang Didapat</h3>

            <div class="feature-table-wrapper">
                <table class="table feature-table mb-0">
                    <thead>
                        <tr>
                            <th>Fitur</th>
                            <th>Grosir</th>
                            <th>Member</th>
                            <th>Outlet</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Penentuan harga berdasarkan<br>jumlah pembelian</td>
                            <td class="text-center"><span class="icon-check">✓</span></td>
                            <td class="text-center"><span class="icon-cross">✕</span></td>
                            <td class="text-center"><span class="icon-cross">✕</span></td>
                        </tr>

                        <tr>
                            <td>Harga spesial berdasarkan jenis<br>pelanggan</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Level Harga Berbeda</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Otomatis diterapkan<br>saat transaksi</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Laporan Khusus</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Kontrol pusat /<br>admin</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Promosi khusus</td>
                            <td class="text-center">✕</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Penggunaan untuk bisnis<br>multi-outlet</td>
                            <td class="text-center">✕</td>
                            <td class="text-center">✕</td>
                            <td class="text-center">✓</td>
                        </tr>

                        <tr>
                            <td>Meningkatkan loyalitas<br>pelanggan</td>
                            <td class="text-center">✕</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✕</td>
                        </tr>

                        <tr>
                            <td>Meningkatkan volume<br>penjualan</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                            <td class="text-center">✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
