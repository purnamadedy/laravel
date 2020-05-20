@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Ubah Data Barang</h1>


                <form method="post" action="/kartu/{{ $kartu->id }}"  enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" name="no_ktp" value="{{ $kartu->no_ktp }}">
                            @error('no_ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $kartu->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $kartu->alamat }}">
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_ortu">Nama Orang Tua</label>
                            <input type="text" class="form-control @error('nama_ortu') is-invalid @enderror" id="nama_ortu" name="nama_ortu" value="{{ $kartu->nama_ortu }}">
                            @error('nama_ortu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" value="{{ $kartu->nominal }}">
                            @error('nominal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input type="text" class="form-control @error('program') is-invalid @enderror" id="program" name="program" value="{{ $kartu->program }}">
                            @error('program')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                              @error('foto')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                        </div>
                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection

