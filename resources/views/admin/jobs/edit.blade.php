@extends('layouts.admin_template')

@section('title')
    <title>Edit Pekerjaan</title>
@endsection

@section('content-title')
    <h1>Edit Pekerjaan</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.jobs.update',
                        $job->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Nama Pekerjaan</label>

                            <input name="name" type="text" id="name" class="form-control"
                            placeholder="Masukkan nama pekerjaan" value="{{$job->name}}">

                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
