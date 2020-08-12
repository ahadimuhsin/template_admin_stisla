@extends('layouts.admin_template')

@section('title')
    <title>Manajemen Kota</title>
@endsection

@section('content-title')
    <h1>Manajemen Kota</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
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
                            <th scope="col">Nama Kota</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Provinsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($cities as $city)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->type }}</td>
                                <td>{{ $city->postal_code }}</td>
                                <td>{{ $city->province->name }}</td>
                                <td>
                                    <form action="{{ route('admin.cities.destroy', $city->id) }}"
                                          method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('admin.cities.edit', $city->id) }}"
                                           class="btn btn-sm btn-warning">Edit</a>

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada kota</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>

                    {{$cities->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
