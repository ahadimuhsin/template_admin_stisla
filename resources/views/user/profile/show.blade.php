@extends('layouts.user_template')

@section('title')
    <title>Profile {{ Auth::user()->name }}</title>
@endsection

@section('content-title')
    <h1>Profile {{ Auth::user()->name }}</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Profile {{ Auth::user()->name }}</h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card profile-widget">
                            <img alt="image" src="{{ asset('assets/images/' .$user->image) }}" class="img-fluid"
                                 style="width: 300px; margin: auto; margin-top: -3rem; margin-bottom: -0.5rem;">

                            <hr>

                            <div class="profile-widget-header">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Jenis Kelamin</div>

                                        @if($user->gender)
                                            <div class="profile-widget-item-value">Perempuan</div>
                                        @else
                                            <div class="profile-widget-item-value">Laki-laki</div>
                                        @endif
                                    </div>

                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">No Telepon</div>

                                        <div class="profile-widget-item-value">
                                            {{ chunk_split($user->phone_number, 4, " ") }}
                                        </div>
                                    </div>

                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Email</div>

                                        <div class="profile-widget-item-value">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget-description pb-0">
                                <div class="profile-widget-name">{{ $user->name }}
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>
                                    {{ $user->job->name }}
                                </div>
                            </div>

                            <a href="{{route('user.profile.edit', Auth::user()->id)}}"
                               class="btn btn-lg btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
