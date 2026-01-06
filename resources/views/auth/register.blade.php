@extends('layouts.app')

@section('content')
    <style>
        .register-section {
            padding: 120px 0 60px
        }

        .register-card {
            width: 90%;
            height: 100%;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            padding: 50px;
            border-radius: 40px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            width: 100%;
        }

        .form-1,
        .form-2 {
            flex: 1;
            min-width: 300px;

        }

        .register-input {
            padding: 14px 20px;
            border-radius: 20px;
            border: 1px solid #CDA93F;
        }

        .register-input:focus {
            border-color: #CDA93F;
            box-shadow: none;
        }

        .text-gold {
            color: #CDA93F;
        }

        .register-text {
            color: #000000;
            margin-bottom: 60px;
        }

        .register-link {
            color: #000000;
            font-weight: 600;
        }

        .btn-register {
            background-color: #FFAE00;
            color: #ffffff;
            border-radius: 50px;
            padding: 14px;
            font-weight: 600;
            margin-top: 20px;
            width: 40%;
            font-size: 17px;
        }

        .btn-register:hover {
            background-color: #FFAE00;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
                gap: 30px;
            }

            .form-1,
            .form-2 {
                width: 100%;
            }

            .btn-register {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .register-card {
                padding: 30px 20px;
            }
        }
    </style>
    <section class="register-section d-flex justify-content-center align-items-center">
        <div class="register-card">
            <h3 class="text-center fw-bold mb-4">Form Pendaftaran</h3>
            <div class="form-container">
                <div class="form-1">
                    <form>
                        <div class="mb-3">
                            <label for="kategori" class="form-label rounded">Kategori</label>
                            <select id="opsi" class="form-select register-input">
                                <option>Kategori</option>
                                <option>Toko Komputer</option>
                                <option>Resto</option>
                                <option>Apotek</option>
                                <option>Gudang</option>
                                <option>Toko</option>
                                <option>Cafe</option>
                                <option>Fashion</option>
                                <option>Toko Alat Tulis</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="namatoko" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control register-input" id="namatoko"
                                placeholder="Nama Toko">
                        </div>
                        <p class="text-gold">Subdomain : saktipos.com</p>
                        <div class="mb-3">
                            <label for="nomortelepontoko" class="form-label">Nomor Telepon Toko</label>
                            <input type="text" class="form-control register-input" id="nomortelepontoko"
                                placeholder="62+...">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control register-input" id="alamat" rows="4" placeholder="Alamat"></textarea>
                        </div>
                    </form>
                </div>
                <div class="form-2">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control register-input" id="nama" placeholder="Nama">
                        </div>
                        <label for="nama" class="form-label">Jenis Kelamin</label>
                        <div class="d-flex gap-4">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                <label class="form-check-label" for="radioDefault1">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2"
                                    checked>
                                <label class="form-check-label" for="radioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control register-input" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control register-input" id="username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control register-input" id="password" placeholder="Password">
                        </div>
                </div>
                </form>
            </div>
            <div class="justify-content-center align-items-center d-flex">
                <a href="" class="btn btn-register">Daftar Sekarang</a>
            </div>
        </div>
    </section>
    <p class="text-center mt-3 register-text">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="register-link">Login di sini</a>
    </p>
    </div>
    </div>
    </div>
@endsection
