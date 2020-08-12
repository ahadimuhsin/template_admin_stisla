@extends('layouts.admin_template')

@section('title')
    <title>Laporan Warga</title>
@endsection

@section('content-title')
    <h1>Laporan Warga</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Alasan</th>
                            <th scope="col">Tanggal Lapor</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse ($reports as $report)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ route('admin.reports.show', $report->id) }}">{{ $report->user->name }}</a>
                                </td>
                                <td>
                                    @if ($report->request)
                                        <span class="badge badge-primary">Keluar Desa</span>
                                    @else
                                        <span class="badge badge-secondary">Masuk Desa</span>
                                    @endif
                                </td>
                                <td>{{ $report->description }}</td>
                                <td>{{ $report->created_at->format("d-M-Y") }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada laporan ...</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
