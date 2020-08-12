@extends('layouts.admin_template')

@section('title')
    <title>Tambah Pekerjaan</title>
@endsection

@section('content-title')
    <h1>Tambah Pekerjaan</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.jobs.store') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Pekerjaan</label>

                            <input name="name" type="text" class="form-control"
                            id="name" placeholder="Masukkan nama pekerjaan">

                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
