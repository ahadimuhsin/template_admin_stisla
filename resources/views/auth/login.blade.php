<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')

    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/fontawesome/css/all.min.css')}}">

    {{-- CSS Libraries --}}
    @yield('css-libraries')

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stisla/css/components.css') }}">

    {{-- Start GA --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
</head>
<body>

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3
                                col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <h4>User Login</h4>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible
                            show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>x</span>
                                    </button>
                                    {{session('success')}}
                                </div>
                            </div>
                        @endif

                        <div class="card card-primary">
                            <div class="card-body">
                                <form method="POST" action="{{route('login')}}"
                                      class="needs-validation" novalidate="">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email</label>

                                        <input id="email" type="email"
                                               class="form-control @error ('email') is-invalid @enderror"
                                               name="email" tabindex="1" required autofocus placeholder="Masukkan email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>

                                        <input id="password" type="password"
                                        class="form-control @error ('password') is-invalid @enderror" name="password"
                                        tabindex="2" required placeholder="Masukkan password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                    <p class="text-right">Are you an admin? <a href="{{ route('login.admin') }}">Click here</a> </p>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- General JS Scripts --}}
    <script src="{{asset('assets/stisla/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/popper.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/tooltip.js') }}"></script>
    <script src="{{asset('assets/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/moment.min.js')}}"></script>
    <script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>

    {{-- JS Libarires --}}
{{--    @yield('js-libraries')--}}

    {{-- Page Specific JS Files --}}

    {{-- Template JS File --}}
    <script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/stisla/js/custom.js') }}"></script>

    </body>
</html>
