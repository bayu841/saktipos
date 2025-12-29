@extends('layouts.app')
@section('content')
    <br><br>
    <style>
        .card {
            width: 100%;
            border-radius: 20px;
            height: 100%;
        }

        .card img {
            width: 100%;
            object-fit: cover;
            border-radius: 20px 20px 0px 0px;
        }

        .card-other .card {
            width: 50%;
        }

        .card-container {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            border-radius: 20px
        }

        .card-container img {
            border-radius: 20px 20px 0 0;
        }

        .card-other img {
            border-radius: 10px 10px 0px 0px;
        }

        .btn-warning {
            border-radius: 20px;
            background-color: #CDA93F;
        }

        .text-detail {
            color: #cda93f;
        }
    </style>
    <div class="title mt-4 p-5">
        <h2 class="text-detail fw-bold mb-4">Detail Berita</h2>
        <div class="card-container">
            <img src="{{ asset('image/detail.png') }}" class="card-img-top" alt="...">
            <div class="article-card p-4">
                <div class="card-body">
                    <h2 class="card-title fw-bold pt-4 pb-3">Membangun branding yang kuat dan mengensankan untuk UKM</h2>
                    <p class="card-text">Pernahkah kamu mempertimbangkan betapa pentingnya branding yang kuat bagi bisnis UKM
                        kamu? Branding adalah salah satu aspek yang sangat vital dalam membangun kesan dan hubungan dengan
                        pelanggan. Dalam dunia yang penuh persaingan ini, penting bagi UKM untuk menciptakan identitas merek
                        yang unik dan mengesankan. Artikel ini akan membahas mengenai pentingnya branding yang konsisten dan
                        bagaimana pemilik UKM dapat menciptakan identitas merek yang unik bagi pelanggan.</p>
                    <p class="card-text mb-4">Branding yang kuat memiliki peran penting dalam membedakan UKM kamu dari
                        pesaing.
                        Ini membantu menciptakan kesan yang tahan lama pada pelanggan dan membangun hubungan emosional
                        dengan mereka. Branding yang kuat juga meningkatkan kesadaran merek, memperkuat citra bisnis kamu,
                        dan membantu dalam mempengaruhi keputusan pembelian pelanggan.</p>
                    <h5 class="card-title fw-bold">Menciptakan Identitas Merek yang Konsisten</h5>
                    <p class="card-text mb-4">Branding yang kuat memiliki peran penting dalam membedakan UKM kamu dari
                        pesaing.
                        Ini membantu menciptakan kesan yang tahan lama pada pelanggan dan membangun hubungan emosional
                        dengan mereka. Branding yang kuat juga meningkatkan kesadaran merek, memperkuat citra bisnis kamu,
                        dan membantu dalam mempengaruhi keputusan pembelian pelanggan.</p>
                    <h5 class="card-title fw-bold">Mengetahui Target Pasar dan Komunikasi yang Tepat</h5>
                    <p class="card-text mb-4">Pemahaman yang baik tentang target pasar kamu adalah kunci dalam menciptakan
                        branding yang efektif. Kenali siapa pelanggan target kamu, kebutuhan mereka, dan apa yang mereka
                        cari dalam produk atau layanan yang kamu tawarkan. Dengan memahami target pasar dengan baik, kamu
                        dapat mengembangkan pesan dan strategi komunikasi yang tepat untuk menjangkau mereka. Penting untuk
                        menggunakan bahasa dan gaya komunikasi yang sesuai agar pelanggan merasa terhubung dengan merek
                        kamu.</p>
                    <h5 class="card-title fw-bold">Desain Visual yang Menggambarkan Identitas Merek</h5>
                    <p class="card-text mb-4">Desain visual adalah salah satu elemen penting dalam menciptakan identitas
                        merek
                        yang unik dan mengesankan. Mulailah dengan logo yang menarik dan mudah diingat. Pilih warna, font,
                        dan gaya grafis yang mencerminkan kepribadian merek kamu. Pastikan elemen desain ini terlihat
                        konsisten di situs web, media sosial, kemasan produk, dan materi pemasaran lainnya. Desain visual
                        yang konsisten akan membantu kamu membangun citra merek yang kuat dan mudah dikenali.</p>
                    <h5 class="card-title fw-bold">Memiliki Nilai yang Autentik dan Menonjol</h5>
                    <p class="card-text mb-4">Merek yang kuat dan mengesankan adalah merek yang memiliki nilai-nilai yang
                        autentik dan menonjol. Pemilik UKM harus memiliki pemahaman yang jelas tentang nilai-nilai inti
                        bisnis mereka dan memastikan bahwa merek mereka mencerminkan nilai-nilai tersebut. Ini membantu
                        menciptakan hubungan emosional dengan pelanggan dan membangun kepercayaan. Penting untuk memastikan
                        bahwa identitas merek kamu konsisten dengan nilai-nilai bisnis kamu, baik dalam komunikasi maupun
                        tindakan nyata yang dilakukan oleh bisnis kamu.
                    </p>
                </div>
            </div>
        </div>
        <div class="other-articles mt-5">
            <h2 class="fw-bold mb-3">Artikel Lainnya</h2>

            <div class="row g-4">

                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/detail.png') }}" class="card-img-top img-cover" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-5">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/detail.png') }}" class="card-img-top img-cover" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-5">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/detail.png') }}" class="card-img-top img-cover" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-5">Membangun branding yang kuat dan mengensankan untuk UKM</h5>
                            <div class="text-end">
                                <a href="#" class="btn btn-warning text-white">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
