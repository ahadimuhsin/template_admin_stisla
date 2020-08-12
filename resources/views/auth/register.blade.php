<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register</title>

    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/stisla/modules/jquery-selectric/selectric.css') }}">
    {{-- Temlate CSS--}}
    <link rel="stylesheet" href="{{asset('assets/stisla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/css/component.css')}}">

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
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <h4>Register</h4>
                        </div>

                        <div class="card card-primary">
                            <div class="card-body">
                                <form action="{{route('register')}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="'name">Name</label>

                                        <input name="name" id="name" type="text"
                                               class="form-control" placeholder="Masukkan nama">

                                        <p class="text-danger">{{$errors->first("name")}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>

                                        <select name="gender" class="form-control" id="gender">
                                            <option value="0">Laki-Laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>

                                        <p class="text-danger">{{$errors->first("gender")}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>

                                        <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Masukkan email">

                                        <p class="text-danger">{{$errors->first("email")}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>

                                        <input name="password" id="password" type="password" class="form-control"
                                        placeholder="Masukkan password">

                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_number">No. Telepon</label>

                                        <input name="phone_number" id="phone_number" type="number" class="form-control"
                                        placeholder="Masukkan nomor telepon">

                                        <p class="text-danger">{{$errors->first("phone_number")}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="job_id">Pilih Pekerjaan</label>

                                        <select name="job_id" class="form-control" id="job_id">
                                            @foreach ($jobs as $job)
                                                <option value="{{$job->id}}">{{$job->name}}</option>
                                            @endforeach
                                        </select>

                                        <p class="text-danger">{{$errors->first("job_id")}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Foto KTP</label>

                                        <input name="image" type="file" class="form-control-file" id="image">

                                        <p class="text-danger">{{$errors->first("image")}}</p>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="simple-footer">
                            Copyright &copy; Stisla 2020
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
    <script src="{{asset('assets/stisla/js/stisla.js') }}"></script>

    {{-- JS Libarires --}}
    <script src="{{ asset('assets/stisla/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    {{--    @yield('js-libraries')--}}

    {{-- Page Specific JS Files --}}
    <script src="{{asset('assets/stisla/js/page/auth-register.js')}}"></script>
    {{-- Template JS File --}}
    <script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/stisla/js/custom.js') }}"></script>
</body>
</html>
