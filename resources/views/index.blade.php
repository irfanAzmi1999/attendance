<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
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
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-fixed page-header-glass main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1 d-flex align-items-center space-x-2">
            <!-- Logo -->
            <a class="link-fx fw-bold" href="index.html">
              <i class="fa fa-fire text-primary"></i>
              <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
            </a>
            <!-- END Logo -->

            <!-- Version -->
            <span class="d-inline-block fs-xs fw-medium bg-primary-dark text-white rounded-pill py-1 px-2">5.7</span>
            <!-- END Version -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="space-x-1">
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="btn btn-alt-secondary px-3" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
              <i class="fa fa-moon"></i>
            </a>
            {{-- <a class="btn btn-alt-success px-3" href="https://pixelcave.com/products/codebase?purchase=true&ref=demo">
              <i class="fa fa-shopping-bag opacity-50"></i>
              <span class="ms-1 d-none d-sm-inline-block">Purchase</span>
            </a> --}}
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-extra-light hero-bubbles">
          <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 20%; left: 10%;"></span>
          <span class="hero-bubble bg-success" style="top: 20%; left: 80%;"></span>
          <span class="hero-bubble hero-bubble-sm bg-corporate" style="top: 40%; left: 25%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 10%; left: 20%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-pulse" style="top: 30%; left: 90%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-danger" style="top: 35%; left: 20%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-warning" style="top: 60%; left: 35%;"></span>
          <span class="hero-bubble bg-info" style="top: 60%; left: 80%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-flat" style="top: 75%; left: 70%;"></span>
          <span class="hero-bubble hero-bubble-lg bg-earth" style="top: 75%; left: 10%;"></span>
          <span class="hero-bubble bg-elegance" style="top: 90%; left: 90%;"></span>
          <div class="position-relative d-flex align-items-center">
            <div class="content content-full">
              <div class="row g-6 w-100 py-7 overflow-hidden">
                <div class="col-md-6 order-md-last py-4 px-0 d-md-flex align-items-md-center justify-content-md-end">
                  <img class="img-fluid" src="assets/media/various/landing-promo-hero.png" alt="Hero Promo">
                </div>
                <div class="col-md-6 py-4 d-flex align-items-center">
                  <div class="text-center text-md-start">
                    <h1 class="fw-black mb-3">
                        Attendance System
                    </h1>
                    <p class="text-muted fw-medium mb-4">
                      {{-- Codebase is a super flexible solution built with <span class="fw-semibold">Bootstrap 5</span>. Use it to save time and create all kinds of web applications with friendly and modern UI. <span class="fw-semibold">No jQuery</span> in core. Now with a brand new <a class="fw-semibold" href="javascript:void(0)" data-toggle="layout" data-action="dark_mode_toggle">dark mode</a>. --}}
                    Attendance system to recoord employee attendance with location.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="be_pages_dashboard.html" target="_blank">
                      Login
                      <i class="fa fa-arrow-right opacity-50 ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Key Features -->
        <div class="position-relative bg-body-extra-light">
          <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light skew-y-1"></div>
          <div class="position-relative">
            <div class="content content-full">
              <div class="row g-0 justify-content-center text-center py-5">
                <div class="col-xl-4">
                  <div class="w-100 py-4">
                    <div class="d-inline-block bg-corporate-lighter rounded-4 p-4 mb-4">
                      <div class="d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i class="fa fa-cubes fa-2x text-corporate"></i>
                      </div>
                    </div>
                    <h3 class="h4 fw-bold mb-1">
                      Powerful Layout
                    </h3>
                    <p class="fw-medium text-muted mb-0">
                      Tons of predesigned pages.
                    </p>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="w-100 py-4">
                    <div class="d-inline-block bg-pulse-lighter rounded-4 p-4 mb-4">
                      <div class="d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="d-inline-block text-pulse" width="32"><path fill="currentColor" d="M504.4 115.83a5.72 5.72 0 00-.28-.68 8.52 8.52 0 00-.53-1.25 6 6 0 00-.54-.71 9.36 9.36 0 00-.72-.94c-.23-.22-.52-.4-.77-.6a8.84 8.84 0 00-.9-.68L404.4 55.55a8 8 0 00-8 0L300.12 111a8.07 8.07 0 00-.88.69 7.68 7.68 0 00-.78.6 8.23 8.23 0 00-.72.93c-.17.24-.39.45-.54.71a9.7 9.7 0 00-.52 1.25c-.08.23-.21.44-.28.68a8.08 8.08 0 00-.28 2.08v105.24l-80.22 46.19V63.44a7.8 7.8 0 00-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35 8.35 0 00-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36 9.36 0 00-.72-.94 9.46 9.46 0 00-.78-.6 9.8 9.8 0 00-.88-.68L115.61 1.07a8 8 0 00-8 0L11.34 56.49a6.52 6.52 0 00-.88.69 7.81 7.81 0 00-.79.6 8.15 8.15 0 00-.71.93c-.18.25-.4.46-.55.72a7.88 7.88 0 00-.51 1.24 6.46 6.46 0 00-.29.67 8.18 8.18 0 00-.28 2.1v329.7a8 8 0 004 6.95l192.5 110.84a8.83 8.83 0 001.33.54c.21.08.41.2.63.26a7.92 7.92 0 004.1 0c.2-.05.37-.16.55-.22a8.6 8.6 0 001.4-.58L404.4 400.09a8 8 0 004-6.95V287.88l92.24-53.11a8 8 0 004-7V117.92a8.63 8.63 0 00-.24-2.09zM111.6 17.28l80.19 46.15-80.2 46.18-80.18-46.17zm88.25 60V278.6l-46.53 26.79-33.69 19.4V123.5l46.53-26.79zm0 412.78L23.37 388.5V77.32L57.06 96.7l46.52 26.8v215.18a6.94 6.94 0 00.12.9 8 8 0 00.16 1.18 5.92 5.92 0 00.38.9 6.38 6.38 0 00.42 1 8.54 8.54 0 00.6.78 7.62 7.62 0 00.66.84c.23.22.52.38.77.58a8.93 8.93 0 00.86.66l92.19 52.18zm8-106.17l-80.06-45.32 84.09-48.41 92.26-53.11 80.13 46.13-58.8 33.56zm184.52 4.57L215.88 490.11V397.8l130.72-74.6 45.77-26.15zm0-119.13L358.68 250l-46.53-26.79v-91.42l33.69 19.4L392.37 178zm8-105.28l-80.2-46.17 80.2-46.16 80.18 46.15zm8 105.28V178L455 151.19l33.68-19.4v91.39z"></path></svg>
                      </div>
                    </div>
                    <h3 class="h4 fw-bold mb-1">
                      Laravel 10 Starter Kit
                    </h3>
                    <p class="fw-medium text-muted mb-0">
                      Super boost your Laravel based project.
                    </p>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="w-100 py-4">
                    <div class="d-inline-block bg-elegance-lighter rounded-4 p-4 mb-4">
                      <div class="d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" class="d-inline-block text-elegance" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                      </div>
                    </div>
                    <h3 class="h4 fw-bold mb-1">
                      Bootstrap 5, Sass and ES6
                    </h3>
                    <p class="fw-medium text-muted mb-0">
                      Only the latest tech under the hood.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Key Features -->

        <!-- Unlimited Dashboards -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">01</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Unlimited <span class="text-primary">Dashboards</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  Let your imagination build your idea with Codebase.
                </h3>
              </div>
              <div class="row g-5 py-2">
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="be_pages_dashboard.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-default.png" alt="Dashboard Default">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Default
                  </h4>
                  <p class="fw-medium text-muted">
                    Codebase’s original dashboard design provides a clean, modern and minimal starting point for your web application.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_classic.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-classic.png" alt="Dashboard Classic">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Classic
                  </h4>
                  <p class="fw-medium text-muted">
                    A classic and well tested approach for a project which is going to handle much data and needs all the space it can get.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_clean.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-clean.png" alt="Dashboard Clean">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Clean
                  </h4>
                  <p class="fw-medium text-muted">
                    Clean and modern dashboard which enables you to create rich content and user driven experiences.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_social.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-social.png" alt="Dashboard Social">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Social
                  </h4>
                  <p class="fw-medium text-muted">
                    Building a social dashboard shouldn’t be hard. It should be easy, so you could spend more time building your app.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_corporate.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-corporate.png" alt="Dashboard Corporate">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Corporate
                  </h4>
                  <p class="fw-medium text-muted">
                    Corporate dashboard design that is modern, clean and provokes the credibility you want for your business.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_minimal.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-minimal.png" alt="Dashboard Minimal">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Minimal
                  </h4>
                  <p class="fw-medium text-muted">
                    Super minimal design for you that you value simplicity and would like to incorporate into in your projects.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_pop.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-pop.png" alt="Dashboard Pop">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Pop
                  </h4>
                  <p class="fw-medium text-muted">
                    Material inspired design which give depth to your block elements and changes the way interact with your dashboard.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="db_medical.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-medical.png" alt="Dashboard Medical">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Medical
                  </h4>
                  <p>
                    A perfect starting point for your medical web application showcasing a doctor’s overview dashboard.
                  </p>
                </div>
                <div class="col-md-4 py-2">
                  <a class="options-container push text-white rounded overflow-hidden" href="be_pages_dashboard2.html" target="_blank">
                    <img class="img-fluid options-item" src="assets/media/various/preview-db-dashboard2.png" alt="Dashboard Media">
                    <div class="options-overlay bg-black-50">
                      <div class="options-overlay-content h5 fw-bold text-uppercase">
                        <i class="fa fa-link fa-2x"></i>
                      </div>
                    </div>
                  </a>
                  <h4 class="fw-bold mb-2">
                    Rich Examples
                  </h4>
                  <p>
                    More variations and examples are included in the main layout as well. Building the dashboard UI you want is just a click away.
                  </p>
                </div>
              </div>
              <div class="text-center">
                <a class="btn btn-alt-secondary py-3 px-4" href="be_pages_dashboard4.html" target="_blank">
                  <i class="fa fa-rocket opacity-50 me-1"></i> Explore More Dashboards
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Unlimited Dashboards -->

        <!-- Page Packs -->
        <div class="position-relative bg-body-extra-light">
          <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light -skew-y-1"></div>
          <div class="position-relative">
            <div class="content content-full">
              <div class="pt-7 pb-5">
                <div class="position-relative">
                  <span class="text-back">02</span>
                  <h2 class="h1 fw-black mb-2 text-center">
                    Page <span class="text-primary">Packs</span>
                  </h2>
                  <h3 class="h4 fw-medium text-muted text-center mb-5">
                    Just a glimpse of the ready made pages included to rocket start your project.
                  </h3>
                </div>
                <div class="row g-5 py-2">
                  <div class="col-md-4 py-2">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_crypto_dashboard.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-crypto.png" alt="Page Pack Crypto">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      Crypto
                    </h4>
                    <p class="fw-medium text-muted">
                      Cryptocurrency exchange pages for your blockchain project.
                    </p>
                  </div>
                  <div class="col-md-4 py-2">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_ecom_dashboard.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-ecommerce.png" alt="Page Pack e-Commerce">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      e-Commerce
                    </h4>
                    <p class="fw-medium text-muted">
                      Products and sales management pages for your e-commerce dashboards.
                    </p>
                  </div>
                  <div class="col-md-4 py-2">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_elearning_courses.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-elearning.png" alt="Page Pack e-Learning">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      e-Learning
                    </h4>
                    <p class="fw-medium text-muted">
                      Start building your e-learning platform easily with the included pages.
                    </p>
                  </div>
                  <div class="col-md-4 py-2">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_forum_categories.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-forum.png" alt="Page Pack Forum">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      Forum
                    </h4>
                    <p class="fw-medium text-muted">
                      Perfect if you are building a community or support section in your app.
                    </p>
                  </div>
                  <div class="col-md-4 py-2">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_auth_all.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-auth.png" alt="Page Pack Authentication">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      Authentication
                    </h4>
                    <p class="fw-medium text-muted">
                      Tons of options to meet every possible need when designing your authentication sections.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <a class="options-container push text-white rounded overflow-hidden" href="be_pages_error_all.html" target="_blank">
                      <img class="img-fluid options-item" src="assets/media/various/preview-page-pack-error.png" alt="Page Pack Error">
                      <div class="options-overlay bg-black-50">
                        <div class="options-overlay-content h5 fw-bold text-uppercase">
                          <i class="fa fa-link fa-2x"></i>
                        </div>
                      </div>
                    </a>
                    <h4 class="fw-bold mb-2">
                      Error
                    </h4>
                    <p class="fw-medium text-muted">
                      Clean error pages to incorporate in case of a server or an app failure.
                    </p>
                  </div>
                </div>
                <div class="text-center">
                  <a class="btn btn-alt-secondary py-3 px-4" href="be_pages_generic_todo.html" target="_blank">
                    <i class="fa fa-rocket opacity-50 me-1"></i> Explore More Pages
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Packs -->

        <!-- Feature: Powerful Layout -->
        <div class="bg-body-extra-light">
          <div class="content">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">03</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Powerful <span class="text-primary">Layout</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  One super flexible and reusable layout.
                </h3>
              </div>
              <div class="row g-6 py-2">
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="far fa-circle text-elegance me-1"></i>
                    Unity
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Codebase’s layout is really unique, adaptive and flexible. It enables you to create all kinds of pages that look great and work seamlessly across mobile and desktop devices.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-sync text-earth me-1"></i>
                    Reusability
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    It is the core principle we followed to create a layout that can work for different purposes with the minimum cost. That means fast and responsive layouts with limitless possibilities.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-bolt text-danger me-1"></i>
                    Flexibility
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    It is based on various layout & UI components which work together harmoniously to help you create what you imagine. Lots of boilerplate pages to help you started are included.
                  </p>
                </div>
              </div>
            </div>
            <div class="row g-0 pull-b text-center overflow-hidden">
              <div class="col-4">
                <a class="options-container" href="be_pages_dashboard.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-backend.png" alt="Backend Promo">
                  <div class="options-overlay bg-body-extra-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Backend</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="options-container" href="db_classic.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-classic-dashboard.png" alt="Classic Dashboard Promo">
                  <div class="options-overlay bg-body-extra-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Classic Dashboard</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="options-container" href="be_layout_api.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-layout-api.png" alt="Layout API Promo">
                  <div class="options-overlay bg-body-extra-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Layout</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Feature: Powerful Layout -->

        <!-- Feature: Bootstrap 5 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">04</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Bootstrap <span class="text-primary">5</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  Based on the most popular HTML, CSS, and JS framework.
                </h3>
              </div>
              <div class="row g-6 py-2">
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-leaf text-success me-1"></i>
                    Fresh
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-rocket text-corporate me-1"></i>
                    Features
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-code text-warning me-1"></i>
                    No jQuery
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Bootstrap 5 and Codebase are designed to be used without jQuery. It is only used for providing examples of popular plugins which are based on it.
                  </p>
                </div>
              </div>
            </div>
            <div class="row g-0 pull-b text-center overflow-hidden">
              <div class="col-4">
                <a class="options-container" href="be_ui_grid.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-grid.png" alt="Bootstrap 5 Grid Promo">
                  <div class="options-overlay bg-body-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Grid</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="options-container" href="be_ui_typography.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-typography.png" alt="Bootstrap 5 Typography Promo">
                  <div class="options-overlay bg-body-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Typography</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="options-container" href="be_ui_buttons.html" target="_blank">
                  <img class="img-fluid options-item" src="assets/media/various/landing-promo-bootstrap-buttons.png" alt="Bootstrap 5 Buttons Promo">
                  <div class="options-overlay bg-body-light">
                    <div class="options-overlay-content">
                      <h3 class="h5 fw-bold text-uppercase mb-1">
                        Explore <span class="text-primary">Buttons</span>
                      </h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Feature: Bootstrap 5 -->

        <!-- Feature: Smart Tools -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">05</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Smart <span class="text-primary">Tools</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  Make your life easier and work more efficiently.
                </h3>
              </div>
              <div class="row g-6 py-2">
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i  class="fa fa-cogs text-elegance me-1"></i>
                    Preprocessor
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Codebase CSS framework was built with Sass following a completely modular approach. It is easy to understand, customize and extend to fulfill your needs or project’s requirements.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i  class="fa fa-terminal text-info me-1"></i>
                    Live Tasks
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Smart tasks will serve your project, auto refresh on file changes, live compile your ES6 to ES5 and Sass to CSS while you work (also auto adding any required browser prefixes).
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i  class="far fa-dot-circle text-danger me-1"></i>
                    Build
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Time-saving task that will build a custom, minimized and production ready Codebase framework for you. Create your own variation based on your project.
                  </p>
                </div>
              </div>
            </div>
            <div class="row g-0 justify-content-center pull-b text-center overflow-hidden">
              <div class="col-sm-6">
                <img class="img-fluid" src="assets/media/various/landing-promo-smart-tools.png" alt="Smart Tools Promo">
              </div>
            </div>
          </div>
        </div>
        <!-- END Feature: Smart Tools -->

        <!-- Feature: Developer Minded -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">06</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Developer <span class="text-primary">Minded</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  We built Codebase based on your valuable feedback.
                </h3>
              </div>
              <div class="row g-6  py-2">
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-bullhorn text-danger me-1"></i>
                    Feedback
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    We get to know you better by continuously listening to your feedback. This way, we learn where to focus our efforts and build/improve quality products to better match your needs.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-book text-info me-1"></i>
                    Documentation
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    In the package, you will find the Codebase Docs which can become a valuable tool in getting familiar with the overall structure and helping you start your project faster.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-code text-elegance me-1"></i>
                    Clean Code
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    Working with someone else’s code can become uncomfortable and make you unproductive. We strive to ensure that your experience with Codebase will be the exact opposite.
                  </p>
                </div>
              </div>
            </div>
            <div class="row g-0 pull-b text-center overflow-hidden">
              <div class="col-4">
                <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-php.png" alt="Developer Minded PHP Promo">
              </div>
              <div class="col-4">
                <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-docs.png" alt="Developer Minded Docs Promo">
              </div>
              <div class="col-4">
                <img class="img-fluid" src="assets/media/various/landing-promo-developer-minded-html.png" alt="Developer Minded HTML Promo">
              </div>
            </div>
          </div>
        </div>
        <!-- END Feature: Developer Minded -->

        <!-- Feature: Handcrafted Design -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="pt-7 pb-5">
              <div class="position-relative">
                <span class="text-back">07</span>
                <h2 class="h1 fw-black mb-2 text-center">
                  Handcrafted <span class="text-primary">Design</span>
                </h2>
                <h3 class="h4 fw-medium text-muted text-center mb-5">
                  It’s not only about quantity, it’s about quality first and foremost.
                </h3>
              </div>
              <div class="row g-6 py-2">
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-heart text-pulse me-1"></i>
                    Passion
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    We are passionate with what we do and love crafting products that can make your life easier and help you succeed. We pay attention to small details and always aiming for the best.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="fa fa-compress text-corporate me-1"></i>
                    Commitment
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    We are committed to our work and stand by our projects. Our aim is to improve them in every update and offer the most full-featured packages with the smallest possible footprint.
                  </p>
                </div>
                <div class="col-md-4 py-3">
                  <h4 class="fw-bold mb-2">
                    <i class="far fa-circle text-gray me-1"></i>
                    Less is More
                  </h4>
                  <p class="fw-medium text-muted mb-0">
                    We believe that design should be invisible and enhance the user experience, not get in the way. This gives room for your content to breath and attracts your users’ attention to the right place.
                  </p>
                </div>
              </div>
            </div>
            <div class="row text-center push">
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-pulse-lighter mb-3">
                  <i class="si si-heart text-pulse"></i>
                </div>
                <div class="fw-semibold">Passion</div>
              </div>
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-elegance-lighter mb-3">
                  <i class="si si-chemistry text-elegance"></i>
                </div>
                <div class="fw-semibold">Creativity</div>
              </div>
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-default-lighter mb-3">
                  <i class="si si-vector text-default"></i>
                </div>
                <div class="fw-semibold">Design</div>
              </div>
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-warning-light mb-3">
                  <i class="si si-badge text-warning"></i>
                </div>
                <div class="fw-semibold">Quality</div>
              </div>
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-pulse-lighter mb-3">
                  <i class="si si-energy text-pulse"></i>
                </div>
                <div class="fw-semibold">Simplicity</div>
              </div>
              <div class="col-4 col-md-2 py-4">
                <div class="item item-circle mx-auto bg-success-light mb-3">
                  <i class="si si-compass text-success"></i>
                </div>
                <div class="fw-semibold">Motivation</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Feature: Handcrafted Design -->

        <!-- Features -->
        <div class="position-relative bg-body-extra-light">
          <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-body-light -skew-y-1"></div>
          <div class="position-relative">
            <div class="content content-full">
              <div class="pt-7 pb-5">
                <div class="position-relative">
                  <span class="text-back">Explore it</span>
                  <h2 class="h1 fw-black mb-2 text-center">
                    Feature <span class="text-primary">Rich</span>
                  </h2>
                  <h3 class="h4 fw-medium text-muted text-center mb-5">
                    Extra care and thought were put into each and every one.
                  </h3>
                </div>
                <div class="row g-4 py-2">
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      HTML5 &amp; CSS3
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Using the latest technologies, following the best practices. W3C valid code.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Fully Responsive
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      User Interface auto adjusts and looks great to any screen size.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Retina Ready
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      User Interface looks crispy clear on high resolution screens.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Cross Browser Support
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      It plays nice with all modern browsers including Chrome, Edge, Firefox, Opera and Safari.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Fast &amp; Lightweight
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      It is created to be as fast and lightweight as possible. You can use only what you need.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Custom JS APIs
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Powerful JavaScript APIs are included. Layout or blocks manipulation is just a JS call away.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Get Started Pages
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Simple empty boilerplate pages to help you rocket start your project.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      HTML Version
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      The generic and abstract version which can be used with any framework or language.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      PHP Version
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      A PHP version is included to assist you with your custom PHP project.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      RTL Support
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Boilerplate RTL pages are also included in 'Get Started' section providing a great starting point.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Components
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Carefully picked and integrated to enhance and enrich your project with great functionality.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      6 Inspiring Color Themes
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Carefully chosen and integrated color themes to choose from for your website/dashboard.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      1900+ Font Based Icons
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      With so many unique icons included in Codebase, you don’t have to worry about running out.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Super-Fast UI
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      GPU powered sidebar animations and smart CSS styles will ensure a great experience.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Flexible Side Areas
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Multiple available layouts and completely adjustable by using the powerful layout API.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Designed Pages
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      All kinds of pages, carefully designed, to get inspired and create your own.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Gulp Tasks
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Time-saving tasks that will be a valuable tool to your workflow.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Easy Updating
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      Updating a template can be hard but if you follow the instructions you will be just a copy-paste away.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Free Updates
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      All updates are free for existing customers to download. Great new features at no extra cost.
                    </p>
                  </div>
                  <div class="col-md-4 py-3">
                    <h4 class="h5 fw-bold mb-2">
                      Support
                    </h4>
                    <p class="fs-sm fw-medium text-muted mb-0">
                      By purchasing a license, you are eligible to email support. We are here to help!
                    </p>
                  </div>
                  <div class="col-md-4 py-3 text-center text-md-start">
                    <h4 class="h5 fw-bold mb-2">
                      Many Many More..
                    </h4>
                    <a class="btn btn-alt-secondary" href="be_pages_dashboard.html" target="_blank">
                      <i class="fa fa-external-link-square-alt opacity-50 me-1"></i> Explore Codebase
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Features -->

        <!-- Call to Action -->
        <div class="bg-body-extra-light">
          <div class="content content-full text-center overflow-hidden">
            <div class="py-7">
              <h2 class="h1 fw-black mb-2">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="link-fx" href="https://pixelcave.com">pixelcave</a>
              </h2>
              <h3 class="h4 fw-medium text-muted mb-5">
                Passionate web design and development with over 16,000 customers worldwide.
              </h3>
              <a class="btn btn-lg btn-alt-success mb-2 py-3 px-5" href="https://pixelcave.com/products/codebase?purchase=true&ref=demo">
                <i class="fa fa-shopping-bag opacity-50 me-2"></i> Purchase Codebase
              </a>
            </div>
          </div>
        </div>
        <!-- END Call to Action -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
          <div class="content py-5">
            <div class="row fs-sm">
              <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
              </div>
              <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <a class="fw-semibold" href="https://pixelcave.com/products/codebase" target="_blank">Codebase 5.7</a> &copy; <span data-toggle="year-copy"></span>
              </div>
            </div>
          </div>
        </footer>
        <!-- END Footer -->
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
  </body>
</html>