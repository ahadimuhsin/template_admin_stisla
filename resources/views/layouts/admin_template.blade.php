<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/stisla/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stisla/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    @yield('css-libraries')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stisla/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{--Navbar--}}
            @include('layouts.admin_module.navbar')

            {{--Sidebar--}}
            @include('layouts.admin_module.sidebar')

            {{--Content--}}

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        @yield('content-title')
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>

            {{--Footer--}}

            @include('layouts.admin_module.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/stisla/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    @yield('js-libraries')

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/stisla/js/custom.js') }}"></script>

    @yield('custom-js')
</body>
</html>
