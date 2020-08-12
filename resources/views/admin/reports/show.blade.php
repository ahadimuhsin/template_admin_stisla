@extends('layouts.admin_template')

@section('title')
    <title>Laporan {{ $report->user->name }}</title>
@endsection

@section('content-title')
    <h1>Laporan {{ $report->user->name }}</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card profile-widget">
                                <img alt="image" src="{{ asset('assets/images/' . $report->user->image) }}"
                                     class="img-fluid" style="width: 500px; margin: auto; margin-top: -3rem;">

                                <hr>

                                <div class="profile-widget-header">
                                    <div class="profile-widget-items">
                                        <div class="profile-widget-item">
                                            <div class="profile-widget-item-label">Tujuan</div>

                                            @if ($report->request)
                                                <div class="profile-widget-item-value"><span class="badge badge-primary">Keluar
                                                Desa</span>
                                                </div>
                                            @else
                                                <div class="profile-widget-item-value">
                                                    <span class="badge badge-secondary">Masuk Desa</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="profile-widget-item">
                                            @if ($report->request)
                                                <div class="profile-widget-item-label">Provinsi Tujuan</div>
                                            @else
                                                <div class="profile-widget-item-label">Provinsi Asal</div>
                                            @endif

                                            <div class="profile-widget-item-value">{{ $report->province->name }}</div>
                                        </div>

                                        <div class="profile-widget-item">
                                            @if ($report->request)
                                                <div class="profile-widget-item-label">Kabupaten/Kota Tujuan</div>
                                            @else
                                                <div class="profile-widget-item-label">Kabupaten/Kota Asal</div>
                                            @endif

                                            <div class="profile-widget-item-value">{{ $report->city->name }}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-widget-description pb-0">
                                    <div class="profile-widget-name">{{ $report->user->name }} <div
                                            class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div>

                                            {{ $report->user->job->name }}

                                            <div class="slash"></div>

                                            @if ($report->user->gender)
                                                Perempuan /
                                                {{ chunk_split($report->user->phone_number, 4, " ") }}
                                            @else
                                                Laki-Laki /
                                                {{ chunk_split($report->user->phone_number, 4, " ") }}
                                            @endif

                                            <p><small>Laporan ini dibuat pada
                                                    {{ $report->created_at->format("d-M-Y") }}</small>
                                            </p>
                                        </div>

                                        <div class="alert alert-info alert-has-icon">
                                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                            <div class="alert-body">
                                                <div class="alert-title">Alasan</div>
                                                {{ $report->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
