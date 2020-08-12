@extends('layouts.admin_template')

@section('title')
    <title>Manajemen Pekerjaan</title>
@endsection

@section('content-title')
    <h1>Manajemen Pekerjaan</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if(session("success"))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    @if(session("error"))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama Pekerjaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($jobs as $job)
                            <tr>
                                <th scope="row"> {{$loop->iteration}}</th>
                                <td> {{ $job->name }}</td>
                                <td> <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty {{--Dijalankan apabila data kosong--}}
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada pekerjaan</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
