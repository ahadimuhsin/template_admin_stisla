@extends('layouts.admin_template')

@section('title')
    <title>Manajemen User</title>
@endsection

@section('content-title')
    <h1>Manajemen User</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session("success"))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>

                                {{ session("success") }}
                            </div>
                        </div>
                    @endif

                    @if (session("error"))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>

                                {{ session("error") }}
                            </div>
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ asset('assets/images/' . $user->image) }}" alt="Image"
                                         style="width: 50px;"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                {{--Menampilkan gender, kalau 1 itu perempuan, 0 Laki-laki--}}
                                <td>{{ $user->gender ? "Perempuan" : "Laki-Laki" }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->job->name }}</td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")

                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada user ...</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
