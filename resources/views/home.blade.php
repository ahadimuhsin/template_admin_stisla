@extends('layouts.user_template')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content-title')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <h2>Selamat datang, {{ Auth::user()->name }}!</h2>

                        <hr>

                        <h4>Panduan Penggunaan Aplikasi</h4>
                        <p>Berikut adalah ptunjuk untuk menggunakan aplikasi ini.</p>

                        <h6>Membuat Laporan Mandiri</h6>

                        <ul>
                            <li>Pada menu, klik 'Laporan Mandiri'.</li>
                            <li>Klik pada 'Buat Laporan' untuk membuat laporan baru.</li>
                            <li>Terdapat pilihan laporan untuk 'Masuk Desa' atau 'Keluar Desa'. Silahkan pilih sesuai dengan
                                keinginan Anda.</li>
                            <li>Jika Anda ingin masuk desa, maka Anda harus mengisi provinsi dan kota asal Anda.</li>
                            <li>Jika Anda ingin keluar desa, maka Anda harus mengisi provinsi dan kota tujuan Anda.</li>
                            <li>Sertakan juga alasan Anda.</li>
                            <li>Klik 'Submit' untuk mengirimkan laporan Anda kepada petugas desa.</li>
                        </ul>

                        <h6>Melihat Riwayat Laporan</h6>

                        <ul>
                            <li>Pada menu, klik 'Laporan Mandiri'.</li>
                            <li>Selanjutnya, klik 'Riwayat Laporan' untuk melihat riwayat laporan Anda.</li>
                            <li>Akan terlihat tabel kosong jika Anda belum pernah membuat laporan apapun.</li>
                            <li>Jika Anda sudah pernah membuat laporan, maka semua laporan yang pernah Anda buat akan tampil
                                pada tabel tersebut.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
