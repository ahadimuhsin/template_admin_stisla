<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendataan Warga Desa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/landing_page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin_template/modules/fontawesome/css/all.min.css') }}">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/landing_page/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/landing_page/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landing_page/device-mockups/device-mockups.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/landing_page/css/new-age.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pendataan Warga Desa</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#features">Fitur</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5">Selamat datang pada aplikasi pendataan warga desa! Daftar sekarang untuk mulai
                        menggunakan.</h1>

                    <a href="{{ route('register') }}" class="btn btn-outline btn-xl js-scroll-trigger">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="download bg-primary text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="section-heading">Apa kegunaan aplikasi ini?</h2>

                <p>Aplikasi ini berguna untuk melakukan pendataan terhadap aktivitas keluar masuknya warga yang ada
                    pada desa ini. Aplikasi ini diciptakan dengan harapan menciptakan efektifitas dan menghindari
                    kontak fisik antar manusia.</p>
            </div>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Fitur</h2>
            <p class="text-muted">Berikut adalah fitur yang ada pada aplikasi ini.</p>
            <hr>
        </div>

        <div class="row">
            <div class="col-lg-8 my-auto mx-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="fa fa-envelope text-primary"></i>
                                <h3>Laporan Mandiri</h3>
                                <p class="text-muted">Pengguna dapat melakukan laporan mandiri mengenai
                                    aktivitasnya.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="fa fa-history text-primary"></i>
                                <h3>Riwayat Laporan</h3>
                                <p class="text-muted">Pengguna dapat melihat semua riwayat laporan yang pernah
                                    dilakukan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="fa fa-globe text-primary"></i>
                                <h3>Jangkauan Luas</h3>
                                <p class="text-muted">Aplikasi ini mendukung seluruh provinsi dan kabupaten/kota
                                    yang ada di Indonesia.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Gratis</h3>
                                <p class="text-muted">Tidak ada pungutan biaya untuk pemakaian aplikasi ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2020. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/landing_page/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('assets/landing_page/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('assets/landing_page/js/new-age.min.js') }}"></script>
</body>
</html>
