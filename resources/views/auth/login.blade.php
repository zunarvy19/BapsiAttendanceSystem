@extends('layouts.auth')

@push('style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')

<div class="wrapper">
    <div class="container main">
      <div class="row">
        <div class="col-md-6 side-image">
          <img src="https://unsplash.com/photos/two-teal-and-white-skyscrapers-_wpce-AsLxk" alt="">
          <div class="text">
            <h3>Biro Administrasi Perencanaan dan Sistem Informasi</h3>
          </div>

        </div>

        <div class="col-md-6 right">

          <div class="input-box">

            <header>Login</header>
            <form action="{{route('auth.login')}}" method="post" id="login-form">
              @csrf
              <div class="input-field">
                <input type="text" class="input" id="email" required="" autocomplete="off" name="email">
                <label for="floatingInputEmail">Email</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="pass" required="" name="password">
                <label for="pass">Password</label>
              </div>

              <div class="form-check mb-5 mt-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                  Ingatkan Saya di Perangkat ini
                </label>
              </div>

              <div class="input-field">
                <button type="submit" class="submit" id="login-form-button">Masuk</button>
                <p class=" mb-3 text-muted">&copy; 2024</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush