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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/assetcss/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/dist/css/tiny-slider.css">
    <link rel="stylesheet" href="assets/dist/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/dist/css/rangeslider.css">
    <link rel="stylesheet" href="assets/dist/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="assets/dist/css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/dist/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href=assets/dist/manifest.json">
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>
<!-- Internet Connection Status -->
<!-- # This code for showing internet connection status -->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- # Paste your Header Content from here -->
        <!-- # Header Five Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper -->
            <div class="logo-wrapper"><a href="page-home.html"><img src="img/core-img/logo.png" alt=""></a></div>
            <!-- Navbar Toggler -->
            <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
        <!-- # Header Five Layout End -->
    </div>
</div>
<!-- Setting Popup Overlay -->
<div id="setting-popup-overlay"></div>
<!-- Setting Popup Card -->
<div class="card setting-popup-card shadow-lg" id="settingCard">
    <div class="card-body">
        <div class="container">
            <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
                <p class="mb-0">Settings</p>
                <div class="btn-close" id="settingCardClose"></div>
            </div>
            <div class="single-setting-panel">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="availabilityStatus" checked>
                    <label class="form-check-label" for="availabilityStatus">Availability status</label>
                </div>
            </div>
            <div class="single-setting-panel">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="sendMeNotifications" checked>
                    <label class="form-check-label" for="sendMeNotifications">Send me notifications</label>
                </div>
            </div>
            <div class="single-setting-panel">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="darkSwitch">
                    <label class="form-check-label" for="darkSwitch">Dark mode</label>
                </div>
            </div>
            <div class="single-setting-panel">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rtlSwitch">
                    <label class="form-check-label" for="rtlSwitch">RTL mode</label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
            <!-- Back Button -->
        {{--            <div class="back-button"><a href="elements.html">--}}
        {{--                    <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>--}}
        {{--                    </svg></a></div>--}}
        <!-- Page Title -->
            <img src="assets/localimage/MANTA_high_logo.png" width="50" alt="">
            <div class="page-heading">
                <h6 class="mb-0">Attendance</h6>
            </div>
            <!-- Settings -->
            <div class="setting-wrapper">
                <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <svg class="bi bi-gear" width="18" height="18" viewBox="0 0 16 16" fill="url(#gradientSettings)" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gradientSettings" spreadMethod="pad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0" style="stop-color: #0134d4; stop-opacity:1;"></stop>
                                <stop offset="100%" style="stop-color: #28a745; stop-opacity:1;"></stop>
                            </linearGradient>
                        </defs>
                        <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                        <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
                    </svg><span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper py-3">
    <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
            <div class="card-body d-flex align-items-center">
{{--                <div class="user-profile me-3"><img src="img/bg-img/2.jpg" alt=""><i class="bi bi-pencil"></i>--}}
{{--                    <form action="#">--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="user-info">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-1">{{Auth::user()->name}}</h5>
                    </div>
                    <p class="mb-0">{{Auth::user()->department}}</p>
                </div>
            </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="card-body">
                <form action="{{route('updateProfile',['id'=>Auth::user()->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="Username">Username</label>
                        <input class="form-control" name="Username" type="text" value="{{Auth::user()->username}}" placeholder="Username">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="fullname">Full Name</label>
                        <input class="form-control" name="fullname" type="text" value="{{Auth::user()->name}}" placeholder="Full Name" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="shortname">Short Name</label>
                        <input class="form-control" name="shortname" type="text" value="{{Auth::user()->shortname}}" placeholder="Shortname" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Email Address</label>
                        <input class="form-control" name="email" type="text" value="{{Auth::user()->email}}" placeholder="Email Address" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="department">Department</label>
                        <input class="form-control" name="department" type="text" value="{{Auth::user()->department}}" placeholder="Department">
                    </div>

                    <button class="btn btn-success w-100" type="submit">Update Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
        <div class="footer-nav position-relative">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li class=""><a href="{{url('/home')}}">
                        <svg class="bi bi-house" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                        </svg><span>Home</span></a></li>

                <li><a href="{{url('/history')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                        </svg><span>History</span></a></li>

                <li class="active"><a href="{{url('profile')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg><span>Profile</span></a></li>
                <li><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
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
<script src="js/pwa.js"></script>
</body>
</html>
