@extends('layouts.app')

@section('content')
    <style>
        .register-section {
            padding: 120px 0 60px
        }

        .register-card {
            border-radius: 24px;
            overflow: hidden;
            border: 2px solid #E29E0B;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }


        .register-left {
            background: #ffffff;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-left img {
            max-width: 100%;
        }

        .register-right {
            background-color: #CDA93F;
            padding: 48px 40px;
        }

        .register-title {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 32px;
            text-align: center;
        }

        .register-input {
            border-radius: 50px;
            padding: 14px 20px;
            border: none;
        }

        .register-input:focus {
            box-shadow: none;
        }

        .register-btn {
            background-color: #FFAE00;
            color: #ffffff;
            border-radius: 50px;
            padding: 14px;
            font-weight: 600;
        }

        .register-btn:hover {
            background-color: #e09500;
            color: #ffffff;
        }

        .register-extra {
            font-size: 14px;
            color: #ffffff;
        }

        .register-extra a {
            color: #ffffff;
            text-decoration: none;
        }

        .register-register-text {
            color: #000000;
        }

        .register-register-link {
            color: #000000;
            font-weight: 700;
            text-decoration: underline;
        }
    </style>

    <section class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="register-card">
                        <div class="row g-0">

                            <div class="col-md-6 register-left">
                                <img src="{{ asset('image/register.png') }}" alt="register">
                            </div>

                            <div class="col-md-6 register-right">
                                <h5 class="register-title">Silahkan isi Data di Bawah ini Anda</h5>

                                <div class="mb-3">
                                    <input type="nama" class="form-control register-input" placeholder="nama">
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control register-input" placeholder="Email">
                                </div>

                                <div class="mb-3">
                                    <input type="no_telepon" class="form-control register-input" placeholder="No Telepon">
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control register-input" placeholder="Password">
                                </div>

                                <div class="mb-3">
                                    <input type="confirm_password" class="form-control register-input"
                                        placeholder="Konfirmasi Password">
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4 register-extra">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">
                                            Ingat Saya
                                        </label>
                                    </div>
                                </div>

                                <button class="btn register-btn w-100 ">Register</button>
                            </div>

                        </div>
                    </div>

                    <p class="text-center mt-3 register-register-text">
                        Sudah punya akun?
                        <a href="{{route('login')}}" class="register-register-link">Login di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
