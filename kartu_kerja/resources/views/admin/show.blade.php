@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-6">

                <h4 class="mt-3"><b>Detail Peserta Kartu Prakerja {{$kartu->nama}}</b></h4>
            </div>
        </div>
        <ul class="list-group text-center">
            <li class="list-group-item active"><img src="{{ Storage::url($kartu->foto) }}" alt="" style="width: 200px"></li>
            <li class="list-group-item">{{$kartu->no_ktp}}</li>
            <li class="list-group-item">{{$kartu->nama}}</li>
            <li class="list-group-item">{{$kartu->alamat}}</li>
            <li class="list-group-item">{{$kartu->nama_ortu}}</li>
            <li class="list-group-item">{{$kartu->nominal}}</li>
            <li class="list-group-item">{{$kartu->program}}</li>
        </ul>
        <br>
        <a href="/kartu" class="btn btn-warning">Kembali</a>
    </div>
@endsection

