@extends('layouts.admin_template')

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content-title')
    <h1>Admin Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <h2>Hello {{Auth::user()->name}} !!!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
