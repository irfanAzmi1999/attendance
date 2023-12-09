<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Kehadiran Mantasoft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    @include('layouts.header1')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/dist/css/tiny-slider.css">
    <link rel="stylesheet" href="assets/dist/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/dist/css/rangeslider.css">
    <link rel="stylesheet" href="assets/dist/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="assets/dist/css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/dist/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="assets/dist/manifest.json">
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>
<!-- Internet Connection Status -->
<!-- # This code for showing internet connection status -->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Back Button -->
<div class="login-back-button"><a href="{{url('/')}}">
        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
        </svg></a></div>
<!-- Login Wrapper Area -->
<div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
        <div class="text-center px-4"><img class="login-intro-img" src="assets/localimage/MANTA_high_logo.png" alt=""></div>
        <!-- Register Form -->
        <div class="register-form mt-4">
            <h6 class="mb-3 text-center">Log in to continue to Mantasoft Attendance.</h6>
{{--            <form action="{{route('login')}}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <input class="form-control" type="text" name="username" placeholder="Username">--}}
{{--                    @error('username')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="form-group position-relative">--}}
{{--                    <input class="form-control" id="psw-input" name="password" type="password" placeholder="Enter Password">--}}
{{--                    <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>--}}

{{--                    @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <button class="btn btn-primary w-100" type="submit">Sign In</button>--}}
{{--            </form>--}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4" style="text-align: center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                {{ __('Forgot Your Password?') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </div>
                </div>
            </form>
        </div>
        <!-- Login Meta -->
{{--        <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="page-forget-password.html">Forgot Password?</a>--}}
{{--            <p class="mb-0">Didn't have an account? <a class="stretched-link" href="page-register.html">Register Now</a></p>--}}
{{--        </div>--}}
    </div>
</div>
<!-- All JavaScript Files -->
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/slideToggle.min.js"></script>
<script src="assets/dist/js/internet-status.js"></script>
<script src="assets/dist/js/tiny-slider.js"></script>
<script src="assets/dist/js/baguetteBox.min.js"></script>
<script src="assets/dist/js/countdown.js"></script>
<script src="assets/dist/js/rangeslider.min.js"></script>
<script src="assets/dist/js/vanilla-dataTables.min.js"></script>
<script src="assets/dist/js/index.js"></script>
<script src="assets/dist/js/magic-grid.min.js"></script>
<script src="assets/dist/js/dark-rtl.js"></script>
<script src="assets/dist/js/active.js"></script>
<!-- PWA -->
<script src="assets/dist/js/pwa.js"></script>
</body>
</html>
