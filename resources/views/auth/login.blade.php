@extends('layouts.app')

@section('content')
<style>
  .login-section {
    padding: 120px 0 60px
  }

  .login-card {
  border-radius: 24px;
  overflow: hidden;
  border: 2px solid #E29E0B; 
  box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}


  .login-left {
    background: #ffffff;
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .login-left img {
    max-width: 100%;
  }

  .login-right {
    background-color: #F9C75B;
    padding: 48px 40px;
  }

  .login-title {
    color: #ffffff;
    font-weight: 600;
    margin-bottom: 32px;
    text-align: center;
  }

  .login-input {
    border-radius: 50px;
    padding: 14px 20px;
    border: none;
  }

  .login-input:focus {
    box-shadow: none;
  }

  .login-btn {
    background-color: #FFAE00;
    color: #ffffff;
    border-radius: 50px;
    padding: 14px;
    font-weight: 600;
  }

  .login-btn:hover {
    background-color: #e09500;
    color: #ffffff;
  }

  .login-extra {
    font-size: 14px;
    color: #ffffff;
  }

  .login-extra a {
    color: #ffffff;
    text-decoration: none;
  }
  
  .login-register-text {
  color: #000000;
}

.login-register-link {
  color: #000000;
  font-weight: 700;
  text-decoration: underline;
}

</style>

<section class="login-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="login-card">
          <div class="row g-0">
            
            <div class="col-md-6 login-left">
              <img src="{{ asset('image/loginbg.png') }}" alt="Login">
            </div>

            <div class="col-md-6 login-right">
              <h4 class="login-title">Login Ke Akun Anda</h4>

              <div class="mb-3">
                <input type="email" class="form-control login-input" placeholder="Email">
              </div>

              <div class="mb-3">
                <input type="password" class="form-control login-input" placeholder="Password">
              </div>

              <div class="d-flex justify-content-between align-items-center mb-4 login-extra">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember">
                  <label class="form-check-label" for="remember">
                    Ingat Saya
                  </label>
                </div>
                <a href="#">Lupa Password ?</a>
              </div>

              <button class="btn login-btn w-100">Login</button>
            </div>

          </div>
        </div>

      <p class="text-center mt-3 login-register-text">
  Belum punya akun?
  <a href="#" class="login-register-link">Login di sini</a>
</p>


      </div>
    </div>
  </div>
</section>
@endsection
