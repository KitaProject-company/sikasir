<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" />

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">

  <style>
    [data-theme='dark'] {
      --bg-color: #1f1f1f;
      --text-color: #f8f9fa;
      --card-bg: #2d2d2d;
    }

    [data-theme='light'] {
      --bg-color: #ffffff;
      --text-color: #343a40;
      --card-bg: #ffffff;
    }

    body {
      background-color: var(--bg-color);
      color: var(--text-color);
      transition: all 0.3s ease;
    }

    .card, .form-control {
      background-color: var(--card-bg);
      color: var(--text-color);
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .theme-toggle {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 99;
    }
  </style>
</head>

<body>

  <div id="app">
    <section class="section">
      <div class="d-flex align-items-stretch flex-wrap">
        <!-- GAMBAR dipindah ke kiri -->
        <div class="col-lg-8 col-12 order-lg-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom order-1"
          data-background="{{ asset('img/unsplash/login-bg.jpg') }}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="display-4 font-weight-bold mb-2">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>
              {{-- Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on
              <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a> --}}
            </div>
          </div>
        </div>

        <!-- FORM login di kanan -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-2 min-vh-100 order-2 bg-white">
          <div class="m-3 p-4">
            <img src="{{ asset('img/stisla-fill.svg') }}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Stisla</span></h4>
            <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
            <form method="POST" action="#" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">Please fill in your email</div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">please fill in your password</div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                {{-- <a href="auth-forgot-password.html" class="float-left mt-3">Forgot Password?</a> --}}
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div>
            </form>

            <div class="text-small mt-5 text-center">
              Copyright &copy; Your Company. Made with 💙 by Stisla
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('library/popper.js/dist/umd/popper.js') }}"></script>
  <script src="{{ asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
  <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('library/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
