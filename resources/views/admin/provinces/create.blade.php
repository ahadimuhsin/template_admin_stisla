@extends('layouts.admin_template')

@section('title')
    <title>Tambah Provinsi</title>
@endsection

@section('content-title')
    <h1>Tambah Provinsi</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.provinces.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Nama Provinsi</label>

                            <input name="name" type="text" class="form-control" id="name"
                                   placeholder="Masukkan provinsi">

                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
