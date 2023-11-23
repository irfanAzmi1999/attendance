<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    @include('layouts.header1')

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    {{--    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">--}}
    {{--    <meta property="og:site_name" content="Codebase">--}}
    {{--    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">--}}
    {{--    <meta property="og:type" content="website">--}}
    {{--    <meta property="og:url" content="">--}}
    {{--    <meta property="og:image" content="">--}}

<!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    {{--    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">--}}
    {{--    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">--}}
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
            <div class="row mx-0 bg-black-50">
                <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                    <div class="p-4">
                        <p class="fs-3 fw-semibold text-white">
                            Get Inspired and Create.
                        </p>
                        <p class="text-white-75 fw-medium">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
                    <div class="content content-full">
                        <!-- Header -->
                        <div class="px-4 py-2 mb-4">
                            <a class="link-fx fw-bold" href="{{url('/')}}">
                                {{--                                <i class="fa fa-fire"></i>--}}
                                {{--                                <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>--}}
                                <img src="{{url('assets/local_image/MANTA_high_logo.png')}}" width="100wh" alt="">
                            </a>
                            <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Mantasoft Attendance System</h1>
                            <h2 class="h5 fw-medium text-muted mb-0">Please log in</h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signin px-4" action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="login-username" name="email" placeholder="Enter your username">
                                <label class="form-label" for="login-username">Email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password">
                                <label class="form-label" for="login-password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me" checked>
                                    <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="submit" class="btn btn-lg btn-alt-primary fw-semibold" value="submit">


                                <div class="mt-4">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_signup2.html">
                                        Create Account
                                    </a>
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_reminder2.html">
                                        Forgot Password
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!-- END Sign In Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/codebase.app.min.js"></script>

<!-- jQuery (required for jQuery Validation plugins) -->
<script src="assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>
</html>
