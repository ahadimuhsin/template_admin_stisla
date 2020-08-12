@extends('layouts.user_template')

@section('title')
    <title>Buat Laporan</title>
@endsection

@section('content-title')
    <h1>Buat Laporan</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Buat Laporan</h4>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{session('success')}}
                            </div>
                        </div>
                    @endif

                    <div class="card">
                        <form action="{{route('user.reports.store')}}" method="POST">
                            @csrf

                            <input name="user_id" value="{{Auth::user()->id}}" class="form-control" hidden>

                            <div class="form-group">
                                <label>Pilih Tujuan Laporan</label>

                                <select name="request" class="form-control" id="tujuanLaporan">
                                    <option value="0">Masuk Desa</option>
                                    <option value="1">Keluar Desa</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label id="labelProvinsi">Pilih Provinsi Asal</label>

                                <select name="province_id" class="form-control" id="province_id">
                                    <option value="">Pilih Provinsi</option>

                                    @foreach($provinces as $province)
                                        <option value="{{$province->id}}">
                                            {{$province->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label id="labelKabupatenKota">Pilih Kabupaten/Kota Asal</label>

                                <select name="city_id" class="form-control" id="city_id">
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label id="alasan">Alasan</label>
                                    <textarea name="description" class="form-control" required></textarea>
                            </div>

                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        const tujuanLaporan = document.getElementById("tujuanLaporan");
        const labelProvinsi = document.getElementById("labelProvinsi");
        const labelKabupatenKota = document.getElementById("labelKabupatenKota");

        tujuanLaporan.addEventListener("change", function (){
           if(parseInt(this.value)){
               labelProvinsi.innerHTML = "Pilih Provinsi Tujuan";
               labelKabupatenKota.innerHTML = "Pilih Kabupaten/Kota Tujuan";
           }
           else {
               labelProvinsi.innerHTML = "Pilih Provinsi Asal"
               labelKabupatenKota.innerHTML = "Pilih Kabupaten/Kota Asal";
           }
        });

           //ketika select box dengan id province_id dipilih
        $('#province_id').on('change', function (){
            //melakukan request ke url /api/city dan mengirimkan data ke province_id

            const _url = "/api/cities";

            $.ajax({
                dataType: "json",
                url : _url,
                type: "GET",
                data: {
                    province_id : $(this).val(),
                },
                success: function (html){
                    //setelah data diterima, select box dengan id city_id dikosongkan

                    $('#city_id').empty();
                       //kemudian tambahkan data baru yg didapatkan dari hasil request via
                       //ajax untuk menampilkan data kabupaten/kota
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>');
                    $.each(html.data, function (key, item){
                        $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    });
                },

                error: function (xhr){
                    console.log(xhr);
                }
            })
        });
    </script>
@endsection
